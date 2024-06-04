<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OurGoals;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Session;

class OurGoalController extends Controller
{
    use ImageTrait;
    public function show()
    {
        return view('Backend.ourgoals.index');
    }

    public function list()
    {
        $goals = OurGoals::all();

        return datatables()->of($goals)

            ->addColumn('image', function (OurGoals $goals) {
                if (isset($goals->image)) {
                    return '<img height="50px" width="50px" src="' . url($goals->image) . '" alt="">';
                }
                return '';
            })

            ->addColumn('status', function (OurGoals $goals) {
                if ($goals->status == 'active') {
                    return "<span class='btn btn-success'>Active</span>";
                } elseif ($goals->status == 'inactive') {
                    return "<label class='btn btn-danger'>Inactive</label>";
                }
            })
            ->rawColumns(['status','image'])
            ->setRowAttr([
                'align' => 'center',
            ])->make(true);
    }

    public function create()
    {
        return view('Backend.ourgoals.create');
    }

    public function store(Request $request)
    {

        $validated = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',            
        ]);

        $ourGoals = OurGoals::query()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' => $validated['status'],         
            'image' => $this->save_image('ourGoals', $validated['image']),
        ]);

        $ourGoals->save();
        Session::flash('success', 'Our Goals Created Successfully');
        return redirect()->route('goals.show');
    }



    public function edit($id)
    {
        $works = OurGoals::where('id', $id)->first();
        return view('Backend.ourgoals.edit', compact('works'));
    }

    public function update(Request $request)
    {

        // $works = OurGoals::where('id', $request->id)->first();
        // $works->title = $request->title;
        // $works->description = $request->description;
        // $works->status = $request->status;
        // $works->save();
        $validated = $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',          
            'status' => 'nullable',
            'image' => 'nullable',
        ]);

        $ourGoals = OurGoals::query()->where('id',$request->id)->first();
        if (!empty($ourGoals)) {
            if (empty($validated['image'])) {
                $imageLink = $ourGoals->image;
            } else {
                $this->deleteImage($ourGoals->image);
                $imageLink = $this->save_image('ourGoals', $validated['image']);
            }
            $ourGoals->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'status' => $validated['status'],              
                'image' => $imageLink,
            ]);
        }
        Session::flash('success', 'Our Goals Updated Successfully');
        return redirect()->route('goals.show');
    }

    public function delete(Request $request)
    {
        $works = OurGoals::find($request->id);

        if (!$works) {
            return response()->json(['error' => 'Record not found'], 404);
        }

        $works->delete();
        return response()->json();
    }
}
