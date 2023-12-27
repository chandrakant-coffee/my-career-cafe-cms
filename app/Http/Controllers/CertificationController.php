<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = Certification::where('is_deleted', 0)->where('id', 1)->first();
        return view('certification.index', compact('data', 'id'));
    }

    public function update(Request $request)
    {

        // dd($request);
        $data =  Certification::find(1);

        if (isset($request->banner_background_image)) {
            $background_image_name = time() . '2.' . $request->banner_background_image->getClientOriginalExtension();
            $request->banner_background_image->move(public_path('uploads'), $background_image_name);
            $background_image = 'public/uploads/' . $background_image_name;
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



        if (isset($request->content_section_bottom_image)) {
            $bottom_image_name = time() . '2.' . $request->content_section_bottom_image->getClientOriginalExtension();
            $request->content_section_bottom_image->move(public_path('uploads'), $bottom_image_name);
            $bottom_new_image_name = 'public/uploads/' . $bottom_image_name;
        } else {
            $content_section_data = json_decode($data->content_section);
            $bottom_new_image_name = $content_section_data->image->path;
        }
        $content_section_array = array(
            'heading' => $request->content_section_heading,
            'sub_heading' => $request->content_section_sub_heading,
            'content' => $request->content_section_content,
            'bottom_heading' => $request->content_section_bottom_heading,
            'bottom_content' => $request->content_section_bottom_content,
            'image' => array(
                'path' => $bottom_new_image_name,
                'alt' => $request->content_section_bottom_image_alt,
            ),
            'button' => array(
                'text' => $request->content_section_bottom_button_text,
                'link' => $request->content_section_bottom_button_link,
            )
        );
        $data->content_section = json_encode($content_section_array);


        if (isset($request->immersive_learning_section_image)) {
            $image_name = time() . '2.' . $request->immersive_learning_section_image->getClientOriginalExtension();
            $request->immersive_learning_section_image->move(public_path('uploads'), $image_name);
            $new_image_name = 'public/uploads/' . $image_name;
        } else {
            $immersive_learning_section_data = json_decode($data->immersive_learning_section);
            $new_image_name = $immersive_learning_section_data->image->path;
        }
        $immersive_learning_section_array = array(
            'heading' => $request->immersive_learning_section_heading,
            'image' => array(
                'path' => $new_image_name,
                'alt' =>  $request->immersive_learning_section_image_alt,
            ),
            'bottom_heading' => $request->immersive_learning_section_bottom_heading,
            'bottom_content' => $request->immersive_learning_section_bottom_content,
        );
        $data->immersive_learning_section = json_encode($immersive_learning_section_array);

        // SEO start 
        $data->page_title = $request->page_title;
        $data->meta_title = $request->meta_title;
        $data->meta_desc = $request->meta_desc;
        $data->meta_keyword = $request->meta_keyword;
        $data->url_schema = $request->url_schema;
        $data->canonical_tag = $request->canonical_tag;
        $data->canonical_rel = $request->canonical_rel;
        // End
        if ($data->save()) {
            return redirect()->route('certification.index')->with('success', 'Record updated successfully.');
        } else {
            return redirect()->route('certification.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
