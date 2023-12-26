<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobSeekersModel;


class JobSeekersController extends Controller
{

    public function index()
    {
        $data = JobSeekersModel::where('is_deleted', 0)->paginate(10);
        return view('job-seekers.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('job-seekers.create');
    }

    public function store(Request $request)
    {
        $data = new JobSeekersModel();
        if (isset($request->image)) {
            //For section Four
            $img = time() . '1.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/assesment'), $img);
            $image = 'public/uploads/assesment/' . $img;
            $data->image =  $image;
        }
        $data->image_alt = $request->image_alt;
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->short_desc = $request->short_desc;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('jobseekers.index')->with('success', 'Job seekers added successfully');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = JobSeekersModel::find($id);
        return view('job-seekers.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = JobSeekersModel::findOrFail($id);

        if (isset($request->image)) {
            //For section Four
            $img = time() . '1.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/assesment'), $img);
            $image = 'public/uploads/assesment/' . $img;
            $data->image =  $image;
        }else{
            $data->image = $data->Image;
        }
        $data->image_alt = $request->image_alt;
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->short_desc = $request->short_desc;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('jobseekers.index')->with('success', 'JobSeekersModel updated successfully.');
    }


    public function destroy($id)
    {
        $data = JobSeekersModel::find($id);
        $data->is_deleted = 1;
        if ($data->save()) {
            return redirect()->route('jobseekers.index')->with('success', 'Record deleted successfully');
        } else {
            return redirect()->route('jobseekers.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
