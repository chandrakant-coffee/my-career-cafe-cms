<?php

namespace App\Http\Controllers;

use App\Models\JobsModel;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = JobsModel::where('is_deleted', 0)->where('id', 1)->first();
        return view('jobs.index', compact('data', 'id'));
    }
    public function update(Request $request)
    {

        $data =  JobsModel::find(1);
        // Section one 
        if (isset($request->banner_background_image)) {
            $background_image_name = time() . '2.' . $request->banner_background_image->getClientOriginalExtension();
            $request->banner_background_image->move(public_path('uploads/jobs'), $background_image_name);
            $background_image = 'public/uploads/jobs/' . $background_image_name;
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
        // Section Two 
        $section_two_array = array(
            'heading' => $request->section_2_heading,
            'sub_heading' => $request->section_2_sub_heading,
            'description' => $request->section_2_description,
        );
        $data->section_two = json_encode($section_two_array);
        //Section Three
        if (isset($request->sec3_image)) {
            $sec3_image = time() . '1.' . $request->sec3_image->getClientOriginalName();
            $request->sec3_image->move(public_path('uploads/jobs'), $sec3_image);
            $sec3_img = 'public/uploads/jobs/' . $sec3_image;
        } else {
            $section_three = json_decode($data->section_three);
            $sec3_img = $section_three->sec3_image;
        }
        $section_three_array = array(
            'sec3_title' => $request->sec3_title,
            'sec3_desc' => $request->sec3_desc,
            'sec3_image_alt' => $request->sec3_image_alt,
            'sec3_image' => $sec3_img,
            'button' => array(
                'sec3_link_text' => $request->sec3_link_text,
                'sec3_link' => $request->sec3_link,
            )
        );
        $data->section_three = json_encode($section_three_array);
        // Last section 
        $last_sec_img_arr = array();
        if (isset($request->old_img)) {
            foreach ($request->old_img as $key => $value) {
                if (!isset($value) || isset($request->image[$key])) {
                    $iconImg = time() . $key . '.' . $request->image[$key]->getClientOriginalName();
                    $request->image[$key]->move(public_path('uploads/jobs/'), $iconImg);
                    $imgdata = 'public/uploads/jobs/' . $iconImg;
                } else {
                    $imgdata =  $value;
                }
                $last_sec_img_arr[] = array(
                    "image" => $imgdata,
                    "order_by" => $request->order_by[$key],
                );
            }
            $last_section_array = [
                "sec_last_title" => $request->sec_last_title,
                "images" => $last_sec_img_arr
            ];
        }
         // seo start 
         $data->page_title = $request->page_title;
         $data->meta_title = $request->meta_title;
         $data->meta_desc = $request->meta_desc;
         $data->meta_keyword = $request->meta_keyword;
         $data->url_schema = $request->url_schema;
         $data->canonical_tag = $request->canonical_tag;
         $data->canonical_rel = $request->canonical_rel;
         // End
        $data->last_section = json_encode($last_section_array);
        if ($data->save()) {
            return redirect()->route('jobs.index')->with('success', 'Record updated successfully.');
        } else {
            return redirect()->route('jobs.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
