<?php

namespace App\Http\Controllers\API;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Footer;
use App\Models\Header;
use App\Models\About;
use App\Models\Tips;
use App\Models\Certification;
use App\Models\HomeModel;

class ApiController extends Controller
{


    public function header()
    {
        $header_data = Header::where('is_deleted', 0)->where('id', 1)->first();
        if (isset($header_data)) {

            $header_logo_data = json_decode($header_data->logo);
            $header_menus_data = json_decode($header_data->menus);

            $return_data = array(
                'status' => true,
                'logo' => array(
                    'path' => $header_logo_data->image,
                    'alt' => $header_logo_data->alt,
                    'link' => $header_logo_data->link
                ),
                'menus' => $header_menus_data
            );

            return json_encode($return_data);
        }
    }

    public function footer()
    {
        $today = Carbon::now()->format('M d, Y , h:i A');
        $footer_data = Footer::where('is_deleted', 0)->where('id', 1)->first();
        if (isset($footer_data)) {

            $footer_logo_data = json_decode($footer_data->logo);
            $footer_menus_data = json_decode($footer_data->menus);
            $footer_social_menus_data = json_decode($footer_data->social_menus);
            $footer_phone_no_data = $footer_data->phone_no;
            $footer_email_data = $footer_data->email;
            $footer_copyright_data = $footer_data->copyright;

            $return_data = array(
                'status' => true,
                'column_first' => array(
                    'logo' => array(
                        'path' => $footer_logo_data->image,
                        'alt' => $footer_logo_data->alt,
                        'link' => $footer_logo_data->link
                    ),
                    'description' => $footer_data->description
                ),
                'column_second' => array(
                    'menus' => $footer_menus_data,
                    'social_menus' => $footer_social_menus_data
                ),
                'column_third' => array(
                    'phone_no' => $footer_phone_no_data,
                    'email' => $footer_email_data,
                    'copyright' => $footer_copyright_data
                )
            );

            return json_encode($return_data);
        }
    }
    public function getHomeData()
    {
        $responce = [
            'message' => 'Record not found',
            'error' => 404
        ];
        $home_data = HomeModel::where('is_deleted', 0)->where('id', 1)->first();
        if (isset($home_data)) {
            $sec3AddMore = json_decode($home_data->sec3AddMore);
            $sec5AddMore = json_decode($home_data->sec5AddMore);
            $sec10AddMore = json_decode($home_data->sec10AddMore);
            $insights_and_tips_data = json_decode($home_data->insights_and_tips_section);

            // Section One 
            $section_one_arr = [
                'sec1Title' => $home_data->sec1Title,
                'sec1SubTitle' => $home_data->sec1SubTitle,
                'sec1Desc' => $home_data->sec1Desc,
                'sec1LInk' => $home_data->sec1LInk,
                'sec1LinkTxt' => $home_data->sec1LinkTxt,
                'sec1Image' => $home_data->sec1Image,
                'sec1ImgAlt' => $home_data->sec1ImgAlt,
            ];
            // Section Two
            $section_two_arr = [
                'sec2Title' => $home_data->sec2Title,
                'sec2Desc' => $home_data->sec2Desc,
                'sec2Link' => $home_data->sec2Link,
                'sec2LinkTxt' => $home_data->sec2LinkTxt,
                'sec2Image' => $home_data->sec2Image,
                'sec2ImageAlt' => $home_data->sec2ImageAlt,
            ];
            // Section Three
            $section_three_arr = [
                'sec3Title' => $home_data->sec3Title,
                'sec3Link' => $home_data->sec3Link,
                'sec3LinkTxt' => $home_data->sec3LinkTxt,
                'sec3AddMore' => $sec3AddMore,
            ];
            // Section Four
            $section_four_arr = [
                'sec4Title' => $home_data->sec4Title,
                'sec4Desc' => $home_data->sec4Desc,
                'sec4Link' => $home_data->sec4Link,
                'sec4LinkTxt' => $home_data->sec4LinkTxt,
                'sec4Image' => $home_data->sec4Image,
                'sec4ImageAlt' => $home_data->sec4ImageAlt,
            ];
            // Section Five
            $section_five_arr = [
                'sec5Image' => $home_data->sec5Image,
                'sec5ImageAlt' => $home_data->sec5ImageAlt,
                'sec5Title' => $home_data->sec5Title,
                'sec5AddMore' => $sec5AddMore,
            ];
            // Section Five
            $section_six_arr = [
                'sec6Title' => $home_data->sec6Title,
                'sec6image' => $home_data->sec6image,
                'sec6imageAlt' => $home_data->sec6imageAlt,
                'sec6Link' => $home_data->sec6Link,
                'sec6LinkText' => $home_data->sec6LinkText,
            ];
            //Section seven
            $insights_and_tips_pointers_array = array();
            foreach ($insights_and_tips_data->pointers as $key => $value) {

                $tips_data =  Tips::find($value);

                $insights_and_tips_pointers_array[] = array(
                    'image' => json_decode($tips_data->image),
                    'category' => $tips_data->category,
                    'summary' => $tips_data->summary,
                );
            }
            // Section Eight
            $section_eight_arr = [
                'sec8Title' => $home_data->sec8Title,
                'sec8Desc' => $home_data->sec8Desc,
                'sec8LInk' => $home_data->sec8LInk,
                'sec8LInkTxt' => $home_data->sec8LInkTxt,
                'sec8Image' => $home_data->sec8Image,
                'sec8ImgAlt' => $home_data->sec8ImgAlt,
            ];
            $insights_and_tips_new_data = array(
                'heading' => $insights_and_tips_data->heading,
                'button' => $insights_and_tips_data->button,
                'pointers' => $insights_and_tips_pointers_array
            );
            $responce = array(
                'section_one' => $section_one_arr,
                'section_two' => $section_two_arr,
                'section_three' => $section_three_arr,
                'section_four' => $section_four_arr,
                'section_five' => $section_five_arr,
                'section_six' => $section_six_arr,
                'section_seven' => $insights_and_tips_new_data,
                'section_eight' => $section_eight_arr,
                'sec10AddMore' => $sec10AddMore,
            );
        }
        return json_encode($responce);
    }

    public function about()
    {
        $about_data = About::where('is_deleted', 0)->where('id', 1)->first();
        if (isset($about_data)) {

            $banner_data = json_decode($about_data->banner_section);
            $career_development_data = json_decode($about_data->career_development_section);
            $charge_process_data = json_decode($about_data->charge_process_section);
            $career_development_program_data = json_decode($about_data->career_development_program_section);
            $benefits_data = json_decode($about_data->benefits_section);
            $insights_and_tips_data = json_decode($about_data->insights_and_tips_section);

            $insights_and_tips_pointers_array = array();
            foreach ($insights_and_tips_data->pointers as $key => $value) {

                $tips_data =  Tips::find($value);

                $insights_and_tips_pointers_array[] = array(
                    'image' => json_decode($tips_data->image),
                    'category' => $tips_data->category,
                    'summary' => $tips_data->summary,
                );
            }

            $insights_and_tips_new_data = array(
                'heading' => $insights_and_tips_data->heading,
                'button' => $insights_and_tips_data->button,
                'pointers' => $insights_and_tips_pointers_array
            );

            $return_data = array(
                'status' => true,
                'banner_section' => $banner_data,
                'career_development_section' => $career_development_data,
                'charge_process_section' => $charge_process_data,
                'career_development_program_section' => $career_development_program_data,
                'benefits_section' => $benefits_data,
                'insights_and_tips_section' => $insights_and_tips_new_data,
            );

            return json_encode($return_data);
        }
    }

    public function certification()
    {
        $certification_data = Certification::where('is_deleted', 0)->where('id', 1)->first();
        if (isset($certification_data)) {

            $banner_section_data = json_decode($certification_data->banner_section);
            $content_section_data = json_decode($certification_data->content_section);
            $immersive_learning_section_data = json_decode($certification_data->immersive_learning_section);



            $return_data = array(
                'status' => true,
                'banner_section' => $banner_section_data,
                'content_section' => $content_section_data,
                'immersive_learning_section' => $immersive_learning_section_data
            );

            return json_encode($return_data);
        }
    }
}
