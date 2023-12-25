<?php

namespace App\Http\Controllers;

use App\Models\AssesmentModel;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = AssesmentModel::where('is_deleted', 0)->where('id', 1)->first();
        return view('assesment.index', compact('data', 'id'));
    }
    public function update(Request $request)
    {
        $data =  AssesmentModel::find(1);

        if (isset($request->banner_background_image)) {
            $background_image_name = time() . '1.' . $request->banner_background_image->getClientOriginalName();
            $request->banner_background_image->move(public_path('uploads/assesment'), $background_image_name);
            $background_image = 'public/uploads/assesment/' . $background_image_name;
        } else {
            $banner_section = json_decode($data->banner_section);
            $background_image = $banner_section->image;
        }
        $section_one_array = array(
            'heading' => $request->banner_heading,
            'image' => $background_image,
            'button' => array(
                'text' => $request->banner_button_text,
                'link' => $request->logo_link,
            )
        );
        $data->banner_section = json_encode($section_one_array);
        if ($data->save()) {
            return redirect()->back()->with('success', 'Record Updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
