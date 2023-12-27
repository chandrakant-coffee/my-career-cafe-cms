<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\Tips;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $id = 1;
        $data = HomeModel::find($id);
        $tipsdata = Tips::where('is_deleted', 0)->get();
        $roleId = NULL;
        return view('home.edit', compact('data', 'tipsdata'));
    }
    public function edit($id)
    {
        $data = HomeModel::find($id);
        $tipsdata = Tips::where('is_deleted', 0)->get();

        $sec3AddMore =  json_decode($data->sec3AddMore);
        $sec5AddMore =  json_decode($data->sec5AddMore);
        $sec10AddMore =  json_decode($data->sec10AddMore);
        $roleId = NULL;
        return view('home.edit', compact('data', 'sec3AddMore', 'sec5AddMore', 'sec10AddMore', 'tipsdata'));
    }
    public function update(Request $request)
    {
        $id = 1;
        $home = HomeModel::find($id);
        if (isset($request->sec1Image)) {
            //For section one
            $sec1Image = time() . '1.' . $request->sec1Image->getClientOriginalName();
            $request->sec1Image->move(public_path('storage/home-images'), $sec1Image);
            $home->sec1Image = 'public/storage/home-images/' . $sec1Image;
        }
        if (isset($request->sec2Image)) {
            //For section Two
            $sec2Image = time() . '1.' . $request->sec2Image->getClientOriginalName();
            $request->sec2Image->move(public_path('storage/home-images'), $sec2Image);
            $home->sec2Image = 'public/storage/home-images/' . $sec2Image;
        }
        if (isset($request->sec4Image)) {
            //For section Four
            $sec4Image = time() . '1.' . $request->sec4Image->getClientOriginalName();
            $request->sec4Image->move(public_path('storage/home-images'), $sec4Image);
            $home->sec4Image = 'public/storage/home-images/' . $sec4Image;
        }
        if (isset($request->sec5Image)) {
            //For section Five
            $sec5Image = time() . '1.' . $request->sec5Image->getClientOriginalName();
            $request->sec5Image->move(public_path('storage/home-images'), $sec5Image);
            $home->sec5Image = 'public/storage/home-images/' . $sec5Image;
        }
        if (isset($request->sec6image)) {
            //For section Six
            $sec6Image = time() . '1.' . $request->sec6image->getClientOriginalName();
            $request->sec6image->move(public_path('storage/home-images'), $sec6Image);
            $home->sec6image = 'public/storage/home-images/' . $sec6Image;
        }
        if (isset($request->sec8Image)) {
            //For section Six
            $sec8Image = time() . '1.' . $request->sec8Image->getClientOriginalName();
            $request->sec8Image->move(public_path('storage/home-images'), $sec8Image);
            $home->sec8Image = 'public/storage/home-images/' . $sec8Image;
        }
        //Add Row Functionality for Section Three
        $sectionThreeArray = array();
        if (isset($request->old_img)) {
            foreach ($request->old_img as $key => $value) {
                if (!isset($value) || isset($request->sec3Images[$key])) {
                    $iconImg = time() . $key . '.' . $request->sec3Images[$key]->getClientOriginalExtension();
                    $request->sec3Images[$key]->move(public_path('storage/home-images/section-3/'), $iconImg);
                    $imgdata = 'public/storage/home-images/section-3/' . $iconImg;
                } else {
                    $imgdata =  $value;
                }
                $sectionThreeArray[] = array(
                    "sec3Images" => $imgdata,
                    "sec3ImagesAlt" => $request->sec3ImagesAlt[$key],
                    "sec3Titles" => $request->sec3Titles[$key],
                    "sec3Descriptions" => $request->sec3Descriptions[$key],
                    "sec3OrderBy" => $request->sec3OrderBy[$key]
                );
            }
        }
        // Add Row Functionality for Section Five
        $sectionFiveArray = array();
        if (isset($request->old_img_sec5)) {
            foreach ($request->old_img_sec5 as $key => $value) {
                if (!isset($value) || isset($request->sec5Images[$key])) {
                    $iconImg = time() . $key . '.' . $request->sec5Images[$key]->getClientOriginalExtension();
                    $request->sec5Images[$key]->move(public_path('storage/home-images/section-5/'), $iconImg);
                    $imgdata = 'public/storage/home-images/section-5/' . $iconImg;
                } else {
                    $imgdata =  $value;
                }
                $sectionFiveArray[] = array(
                    "sec5Images" => $imgdata,
                    "sec5ImagesAlt" => $request->sec5ImagesAlt[$key],
                    "sec5Titles" => $request->sec5Titles[$key],
                    "sec5Descriptions" => $request->sec5Descriptions[$key],
                    "sec5OrderBy" => $request->sec5OrderBy[$key]
                );
            }
        }
        // Add Row Functionality for Section Five
        $sectionTenArray = array();
        if (isset($request->title)) {
            foreach ($request->title as $key => $value) {
                $sectionTenArray[] = array(
                    "title" => $request->title[$key],
                    "recordInDigit" => $request->recordInDigit[$key],
                    "sec10OrderBy" => $request->sec10OrderBy[$key]
                );
            }
        }
        //Section six 
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
        //Image alt
        $home->sec1ImgAlt = $request->sec1ImgAlt;
        $home->sec2ImageAlt = $request->sec2ImageAlt;
        $home->sec4ImageAlt = $request->sec4ImageAlt;
        $home->sec5ImageAlt = $request->sec5ImageAlt;
        $home->sec6imageAlt = $request->sec6imageAlt;
        $home->sec8ImgAlt = $request->sec8ImgAlt;
        // End 
        $home->insights_and_tips_section = json_encode($section_six_array);
        $home->sec10AddMore = json_encode($sectionTenArray);
        $home->sec3AddMore = json_encode($sectionThreeArray);
        $home->sec5AddMore = json_encode($sectionFiveArray);
        $home->sec1Title = $request->sec1Title;
        $home->sec1SubTitle = $request->sec1SubTitle;
        $home->sec1Desc = $request->sec1Desc;
        $home->sec1LInk = $request->sec1LInk;
        $home->sec1LinkTxt = $request->sec1LinkTxt;
        $home->sec2Title = $request->sec2Title;
        $home->sec2Desc = $request->sec2Desc;
        $home->sec2Link = $request->sec2Link;
        $home->sec2LinkTxt = $request->sec2LinkTxt;
        $home->sec3Title = $request->sec3Title;
        $home->sec3Link = $request->sec3Link;
        $home->sec3LinkTxt = $request->sec3LinkTxt;
        $home->sec4Title = $request->sec4Title;
        $home->sec4Desc = $request->sec4Desc;
        $home->sec4Link = $request->sec4Link;
        $home->sec4LinkTxt = $request->sec4LinkTxt;
        $home->sec5Title = $request->sec5Title;
        $home->sec6Title = $request->sec6Title;
        $home->sec6Link = $request->sec6Link;
        $home->sec6LinkText = $request->sec6LinkText;
        $home->sec8Title = $request->sec8Title;
        $home->sec8Desc = $request->sec8Desc;
        $home->sec8LInk = $request->sec8LInk;
        $home->sec8LInkTxt = $request->sec8LInkTxt;
        // seo start 
        $home->page_title = $request->page_title;
        $home->meta_title = $request->meta_title;
        $home->meta_desc = $request->meta_desc;
        $home->meta_keyword = $request->meta_keyword;
        $home->url_schema = $request->url_schema;
        $home->canonical_tag = $request->canonical_tag;
        $home->canonical_rel = $request->canonical_rel;
        // End
        if ($home->save()) {
            return redirect()->back()->with('success', 'Record Updated successfully.');
        } else {
            return view('home.edit')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
