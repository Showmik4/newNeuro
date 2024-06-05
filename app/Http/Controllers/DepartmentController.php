<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Service;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use ImageTrait;
    public function show()
    {
        return view('Backend.department.index');
    }

    public function list()
    {
        $works = Department::all();
        return datatables()->of($works)
            ->addColumn('status', function (Department $status) {
                if ($status->status == 'active') {
                    return "<span class='btn btn-success'>Active</span>";
                } elseif ($status->status == 'inactive') {
                    return "<label class='btn btn-danger'>Inactive</label>";
                }
            })
            ->rawColumns(['status'])
            ->setRowAttr([
                'align' => 'center',
            ])->make(true);
    }

    public function create()
    {
        return view('Backend.department.create');
    }

    public function store(Request $request)
    {       
        $validated = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'dept_image' => 'required',
            'status' => 'required',           
        ]);

        $work = Department::query()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' => $validated['status'],           
            'dept_image' => $this->save_image('department', $validated['dept_image']),
        ]);

        foreach ($request->service_title as $key => $services) {
            $service = new Service();
            $service->title = $services;
            $service->description = $request->service_description[$key];
            $service->status = $request->service_status[$key];
            $service->deptId = $work->id;
            if ($request->hasFile('service_image')) {               
                $serviceImages = $request->file('service_image');
                $serviceImage = $serviceImages[$key] ?? null;
                if ($serviceImage) {
                    $images = $request->file('service_image');
                    $originalName = $images[$key]->getClientOriginalName();
                    $uniqueImageName = $request->service_title[$key] . rand(1000, 9999) . $originalName;
                    $image = Image::make($images[$key]);
                    $image->save(public_path() . '/service/' . $uniqueImageName);
                    $service->image = $uniqueImageName;
                }
            }
            $service->save();
        }
        Session::flash('success', 'Department Created Successfully');
        return redirect()->route('department.show');
    }


    public function edit($id)
    {
        $works = Department::where('id', $id)->first();
        $service = Service::where('deptId', $works->id)->get();      
        return view('Backend.department.edit', compact('works', 'service'));
    }

    public function update(Request $request)
    {
        $works = Department::where('id', $request->id)->first();
        $works->title = $request->title;
        $works->description = $request->description;
        $works->status = $request->status;
        $works->save();

        $validated = $this->validate($request, [
            'title' => 'nullable',
            'description' => 'nullable',          
            'status' => 'nullable',
            'dept_image' => 'nullable',
        ]);

        $works = Department::query()->where('id', $request->id)->first();
        if (!empty($works)) {
            if (empty($validated['dept_image'])) {
                $imageLink = $works->dept_image;
            } else {
                $this->deleteImage($works->dept_image);
                $imageLink = $this->save_image('department', $validated['dept_image']);
            }

            $works->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'status' => $validated['status'],               
                'dept_image' => $imageLink,
            ]);
        }

        if (isset($request->service_id)) {
            foreach ($request->service_id as $key => $i_id) {
                $service = Service::find($i_id);
                if ($service) {
                    $service->title = $request->service_title[$key];
                    $service->description = $request->service_description[$key];
                    $service->status = $request->service_status[$key];
                    if ($request->hasFile('service_image')) {                       
                        $serviceImages = $request->file('service_image');
                        $serviceImage = $serviceImages[$key] ?? null;
                        if ($serviceImage) {
                            $images = $request->file('service_image');
                            $originalName = $images[$key]->getClientOriginalName();
                            $uniqueImageName = $request->service_title[$key] . rand(1000, 9999) . $originalName;
                            $image = Image::make($images[$key]);
                            $image->save(public_path() . '/service/' . $uniqueImageName);
                            $serviceImage->image = $uniqueImageName;
                        }
                    }
                    $service->save();
                }
            }
        }

        if (!empty($request->extra_service_title)) {
            foreach ($request->extra_service_title as $key => $f_title) {
                $extra_service = new Service();
                $extra_service->title = $f_title;
                $extra_service->description = $request->extra_service_description[$key];
                $extra_service->status = $request->extra_service_status[$key];

                if ($request->hasFile('extra_service_image')) {
                    $serviceImages = $request->file('extra_service_image');
                    $serviceImage = $serviceImages[$key] ?? null;
                    if ($serviceImage) {
                        $images = $request->file('extra_service_image');
                        $originalName = $images[$key]->getClientOriginalName();
                        $uniqueImageName = $request->extra_service_title[$key] . rand(1000, 9999) . $originalName;
                        $image = Image::make($images[$key]);
                        $image->save(public_path() . '/service/' . $uniqueImageName);
                        $extra_service->image = $uniqueImageName;
                    }
                }
                $extra_service->deptId = $works->id;
                $extra_service->save();
            }
        }

        Session::flash('success', 'Works Updated Successfully');
        return redirect()->route('department.show');
    }

    public function delete(Request $request)
    {
        $works = Department::with('services')->find($request->id);
        if (!$works) {
            return response()->json(['error' => 'Record not found'], 404);
        }       
        $works->delete();
        return response()->json();
    }
}
