<?php

namespace App\Http\Controllers;

use App\Models\AssesmentModel;
use App\Models\Tips;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = AssesmentModel::where('is_deleted', 0)->where('id', 1)->first();
        $tipsdata = Tips::where('is_deleted', 0)->get();

        return view('assesment.index', compact('data', 'tipsdata', 'id'));
    }
    public function update(Request $request)
    {
        $data =  AssesmentModel::find(1);
        // Section One 
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
        // Section Two
        if (isset($request->skill_assesment_img)) {
            $skill_assesment_img = time() . '1.' . $request->skill_assesment_img->getClientOriginalName();
            $request->skill_assesment_img->move(public_path('uploads/assesment'), $skill_assesment_img);
            $skill_assesment_imgage = 'public/uploads/assesment/' . $skill_assesment_img;
        } else {
            $skill_assesment = json_decode($data->skill_assesment);
            $skill_assesment_imgage = $skill_assesment->skill_assesment_img;
        }

        $skill_assesment_tools = array();
        foreach ($request->tools_title as $key => $value) {
            $skill_assesment_tools[] = array(
                'tools_title' => $value,
                'tools_desc' => $request->tools_desc[$key],
                'tools_link' => $request->tools_link[$key],
                'tools_order_by' => $request->tools_order_by[$key],
            );
        }
        $section_two_array = array(
            'skill_assesment_title' => $request->skill_assesment_title,
            'skill_assesment_sub_title' => $request->skill_assesment_sub_title,
            'skill_assesment_desc' => $request->skill_assesment_desc,
            'skill_assesment_img' => $skill_assesment_imgage,
            'skill_assesment_img_alt' => $request->skill_assesment_img_alt,
            'skill_assesment_short_desc' => $request->skill_assesment_short_desc,
            'skill_assesment_tools' => $skill_assesment_tools
        );
        //Section Three
        if (isset($request->sec3_image)) {
            $sec3_image = time() . '1.' . $request->sec3_image->getClientOriginalName();
            $request->sec3_image->move(public_path('uploads/assesment'), $sec3_image);
            $sec3_img = 'public/uploads/assesment/' . $sec3_image;
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
        // Section four 
        if (isset($request->sec4_image)) {
            $sec4_image = time() . '1.' . $request->sec4_image->getClientOriginalName();
            $request->sec4_image->move(public_path('uploads/assesment'), $sec4_image);
            $sec4_img = 'public/uploads/assesment/' . $sec4_image;
        } else {
            $section_four = json_decode($data->section_four);
            $sec4_img = $section_four->sec4_image;
        }
        $section_four_array = array(
            'sec4_title' => $request->banner_heading,
            'sec4_desc' => $request->sec4_desc,
            'sec4_image' => $sec4_img,
            'button' => array(
                'sec4_text' => $request->sec4_text,
                'sec4_link' => $request->sec4_link,
            )
        );
        //Section six benifits
        $section_five_pointers_array = array();
        foreach ($request->benefits_section_pointer_heading as $key => $value) {
            $section_five_pointers_array[] = $value;
        }

        if (isset($request->benefits_section_image)) {
            $benefits_section_image_name = time() . '_benifits.' . $request->benefits_section_image->getClientOriginalName();
            $request->benefits_section_image->move(public_path('uploads/assesment'), $benefits_section_image_name);
            $benefits_section_image = 'public/uploads/assesment/' . $benefits_section_image_name;
        } else {
            $benefits_section_decode = json_decode($data->benefits_section);
            $benefits_section_image = $benefits_section_decode->image->path;
        }
        $section_five_array = array(
            'heading' => $request->benefits_section_heading,
            'image' => array(
                'path' => $benefits_section_image,
                'alt' => $request->benefits_section_image_alt,
            ),
            'button' => array(
                'text' => $request->benefits_section_button_text,
                'link' => $request->benefits_section_button_link,
            ),
            'pointers' => $section_five_pointers_array,
        );
        // seo start 
        $data->page_title = $request->page_title;
        $data->meta_title = $request->meta_title;
        $data->meta_desc = $request->meta_desc;
        $data->meta_keyword = $request->meta_keyword;
        $data->url_schema = $request->url_schema;
        $data->canonical_tag = $request->canonical_tag;
        $data->canonical_rel = $request->canonical_rel;
        // End
        $data->benefits_section = json_encode($section_five_array);
        $data->section_four = json_encode($section_four_array);
        $data->section_three = json_encode($section_three_array);
        $data->skill_assesment = json_encode($section_two_array);
        $data->banner_section = json_encode($section_one_array);
        if ($data->save()) {
            return redirect()->back()->with('success', 'Record Updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
