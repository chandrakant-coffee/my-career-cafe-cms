<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tips;


class TipsController extends Controller
{

    public function index()
    {
        $data = Tips::where('is_deleted', 0)->paginate(10);
        return view('tips.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('tips.create');

    }

    public function store(Request $request)
    {

        $data = new Tips();

        $image_name = time().'_benifits.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $image_name);
        $image_name = 'public/uploads/'.$image_name;

        $image_array = array(
            'path' => $image_name,
            'alt' => $request->image_alt
        );

        $data->image =  json_encode( $image_array );
        $data->category = $request->category;
        $data->summary = $request->summary;
        $data->save();

        return redirect()->route('tips.index')->with('success', 'Tips added successfully');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Tips::find($id);
        return view('tips.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Tips::findOrFail($id);

        if (isset($request->image)) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $image_name);
            $new_image_name = 'public/uploads/'.$image_name;
        } else {
            $image_data = json_decode($data->image);
            $new_image_name = $image_data->path;
        }

        $image_array = array(
            'path' => $new_image_name,
            'alt' => $request->image_alt
        );

        $data->image =  json_encode( $image_array );
        $data->category = $request->category;
        $data->summary = $request->summary;
        $data->save();
        return redirect()->route('tips.index')->with('success', 'Tips updated successfully.');
    }


    public function destroy($id)
    {
        $data = Tips::find($id);
        $data->is_deleted = 1;
        if ($data->save()) {
            return redirect()->route('tips.index')->with('success', 'Record deleted successfully');
        } else {
            return redirect()->route('tips.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }

}
