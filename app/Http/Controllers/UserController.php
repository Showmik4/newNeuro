<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    use ImageTrait;

    public function show()
    {
        return view('user.index');
    }

    public function list()
    {
        $users = User::query()->where('type', 'admin')->get();
        return datatables()->of($users)

            ->setRowAttr([
                'align' => 'center',
            ])
         
            ->make(true);
    }

    public function create()
    {
        return view('Backend.user.create');
    }

    public function store(Request $data)
    {
        // dd($data->all());
        // if (Gate::allows('user_list')) {
        $this->validate($data, [
            'name' => 'required',           
            'phone' => 'required',
            'password' => 'required|confirmed|min:4',
            'address'=>'nullable',
            // 'fkUserTypeId' => 'required',
            'email' => 'required|unique:users,email'
        ]);
        $user = new User();
        $user->name = $data->name;      
        $user->email = $data->email;
        $user->phone = $data->phone;
        $user->address = $data->address;
        $user->type = 'admin';
        $user->password = Hash::make($data->password);
        // $user->status='1';
        $user->save();
        Session::flash('success', 'user Created Successfully!');
        return redirect()->route('user.show');
    }

    public function edit_profile($id)
    {
        $user = User::query()->findOrFail($id);
        return view('profile.index', compact('user'));
    }

    public function update_profile(Request $request, $id): RedirectResponse
    {
        $user = User::where('id', $request->id)->first();

        if (!$user) {
            Session::flash('error', 'No user found!');
            return redirect()->back();
        }

        $user->name = $request->name;
        $user->email = $request->email;

        // Check if a new password is provided
        if ($request->filled('new_password')) {
            // Validate and hash the new password
            $this->validate($request, [
                'new_password' => 'required|string|min:8',
                'confirm_password' => 'required|string|min:8|same:new_password',
            ]);

            $user->password = bcrypt($request->new_password);
        }

        $user->save();

        Session::flash('success', 'User profile updated successfully!');
        return redirect()->back();
    }
}
