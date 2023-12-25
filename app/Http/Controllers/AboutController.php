<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Tips;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = About::where('is_deleted',0)->where('id',1)->first();
        $tipsdata = Tips::where('is_deleted',0)->get();
        return view('about.index',compact('data', 'tipsdata','id'));

    }

    public function update(Request $request)
    {

       // dd($request);
        $data =  About::find(1);

        if (isset($request->banner_background_image)) {
            $background_image_name = time().'2.'.$request->banner_background_image->getClientOriginalExtension();
            $request->banner_background_image->move(public_path('uploads'), $background_image_name);
            $background_image = 'public/uploads/'.$background_image_name;
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
        $data->banner_section = json_encode( $section_one_array );

        $section_two_pointers_array = array();
        foreach ($request->second_section_old_image as $key => $value) {

            if( $value == null ){

                $second_section_image = time().$key.'.'.$request->second_section_image[$key]->getClientOriginalExtension();
                $request->second_section_image[$key]->move(public_path('uploads'), $second_section_image);
                $second_section_image_new_name = 'public/uploads/'.$second_section_image;

            } else {
                if( isset( $request->second_section_image[$key]) ){

                    $social_image_name = time().$key.'.'.$request->second_section_image[$key]->getClientOriginalExtension();
                    $request->second_section_image[$key]->move(public_path('uploads'), $social_image_name);
                    $second_section_image_new_name = 'public/uploads/'.$social_image_name;
                } else {
                    $second_section_image_new_name = $value;
                }
            }

            $section_two_pointers_array[] = array(
                'heading' => $request->second_section_heading[$key],
                'description' => $request->second_section_description[$key],
                'image' =>  $second_section_image_new_name,
                'image_alt' => $request->second_section_image_alt[$key]
            );
        }
        $section_two_array = array(
            'heading' => $request->section_2_heading,
            'sub_heading' => $request->section_2_sub_heading,
            'description' => $request->section_2_description,
            'pointers' => $section_two_pointers_array,
        );
        $data->career_development_section = json_encode( $section_two_array );


        $section_three_pointers_array = array();
        foreach ($request->charge_process_section_pointer_heading as $key => $value) {
            $section_three_pointers_array[] = array(
                'heading' => $value,
                'description' => $request->charge_process_section_pointer_description[$key],
            );
        }
        $section_three_array = array(
            'heading' => $request->charge_process_section_heading,
            'button' => array(
                'text' => $request->charge_process_section_button_text,
                'link' => $request->charge_process_section_button_link,
            ),
            'pointers' => $section_three_pointers_array,
        );
        $data->charge_process_section = json_encode( $section_three_array );


        $section_four_pointers_array = array();
        foreach ($request->career_development_program_section_pointer_heading as $key => $value) {
            $section_four_pointers_array[] = array(
                'heading' => $value,
                'description' => $request->career_development_program_section_pointer_description[$key],
                'goal' => $request->career_development_program_section_pointer_goal[$key],
                'time' => $request->career_development_program_section_pointer_time[$key],
            );
        }
        $section_four_array = array(
            'heading' => $request->career_development_program_section_heading,
            'description' => $request->career_development_program_section_description,
            'button' => array(
                'text' => $request->career_development_program_section_button_text,
                'link' => $request->career_development_program_section_button_link,
            ),
            'pointers' => $section_four_pointers_array,
        );
        $data->career_development_program_section = json_encode( $section_four_array );


        $section_five_pointers_array = array();
        foreach ($request->benefits_section_pointer_heading as $key => $value) {
            $section_five_pointers_array[] = $value;
        }

        if (isset($request->benefits_section_image)) {
            $benefits_section_image_name = time().'_benifits.'.$request->benefits_section_image->getClientOriginalExtension();
            $request->benefits_section_image->move(public_path('uploads'), $benefits_section_image_name);
            $benefits_section_image = 'public/uploads/'.$benefits_section_image_name;
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
        $data->benefits_section = json_encode( $section_five_array );


        $section_six_pointers_array = array();
        foreach ($request->insights_and_tips_section_tips_id as $key => $value) {
            $section_six_pointers_array[] = $value;
        }
        $section_six_array = array(
            'heading' => $request->insights_and_tips_section_heading,
            'button' => array(
                'text' => $request->insights_and_tips_section_button_text,
                'link' => $request->insights_and_tips_section_button_link,
            ),
            'pointers' => $section_six_pointers_array
        );
        $data->insights_and_tips_section = json_encode( $section_six_array );


        if ($data->save()) {
            return redirect()->route('about.index')->with('success','Record updated successfully.');
        } else {
            return redirect()->route('about.index')->with('error','Something went to wrong, please try again!.');
        }

    }
}
