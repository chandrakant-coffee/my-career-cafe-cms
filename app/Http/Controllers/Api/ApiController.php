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
        $header_data = Header::where('is_deleted',0)->where('id',1)->first();
        if (isset($header_data)) {

            $header_logo_data = json_decode( $header_data->logo );
            $header_menus_data = json_decode( $header_data->menus );

            $return_data = array(
                'status' => true,
                'logo' => array(
                    'path' => $header_logo_data->image,
                    'alt' => $header_logo_data->alt,
                    'link' => $header_logo_data->link
                ),
                'menus' => $header_menus_data
            );

            return json_encode( $return_data );
        }
    }

    public function footer()
    {
        $today = Carbon::now()->format('M d, Y , h:i A');
        $footer_data = Footer::where('is_deleted',0)->where('id',1)->first();
        if (isset($footer_data)) {

            $footer_logo_data = json_decode( $footer_data->logo );
            $footer_menus_data = json_decode( $footer_data->menus );
            $footer_social_menus_data = json_decode( $footer_data->social_menus );
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

            return json_encode( $return_data );
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
            $responce = array(
                //Section One
                'sec1Title' => $home_data->sec1Title,
                'sec1SubTitle' => $home_data->sec1SubTitle,
                'sec1Desc' => $home_data->sec1Desc,
                'sec1LInk' => $home_data->sec1LInk,
                'sec1Image' => $home_data->sec1Image,
                //Section One
                'sec2Title' => $home_data->sec2Title,
                'sec2Desc' => $home_data->sec2Desc,
                'sec2Link' => $home_data->sec2Link,
                'sec2Image' => $home_data->sec2Image,
                //Section Three
                'sec3Title' => $home_data->sec3Title,
                'sec3Link' => $home_data->sec3Link,
                'sec3AddMore' => $sec3AddMore,
                //Section Four
                'sec4Title' => $home_data->sec4Title,
                'sec4Desc' => $home_data->sec4Desc,
                'sec4Link' => $home_data->sec4Link,
                'sec4Image' => $home_data->sec4Image,
                //Section Five
                'sec5Image' => $home_data->sec5Image,
                'sec5Title' => $home_data->sec5Title,
                'sec5AddMore' => $sec5AddMore,
                //Section Six
                'sec6Title' => $home_data->sec6Title,
                'sec6image' => $home_data->sec6image,
                'sec6Link' => $home_data->sec6Link,
                //Section Seven
                'sec7Title' => $home_data->sec7Title,
                'sec7link' => $home_data->sec7link,
                'sec7Images' => $home_data->sec7Images,
                //Section Seven
                'sec8Title' => $home_data->sec8Title,
                'sec8Desc' => $home_data->sec8Desc,
                'sec8LInk' => $home_data->sec8LInk,
                'sec8Image' => $home_data->sec8Image,
                //Section Ten
                'sec10AddMore' => $sec10AddMore,
            );
        }
        return json_encode($responce);
    }

    public function about()
    {
        $about_data = About::where('is_deleted',0)->where('id',1)->first();
        if (isset($about_data)) {

            $banner_data = json_decode( $about_data->banner_section );
            $career_development_data = json_decode( $about_data->career_development_section );
            $charge_process_data = json_decode( $about_data->charge_process_section );
            $career_development_program_data = json_decode( $about_data->career_development_program_section );
            $benefits_data = json_decode( $about_data->benefits_section );
            $insights_and_tips_data = json_decode( $about_data->insights_and_tips_section );

            $insights_and_tips_pointers_array = array();
            foreach ($insights_and_tips_data->pointers as $key => $value) {

                $tips_data =  Tips::find($value);

                $insights_and_tips_pointers_array[] = array(
                    'image' => json_decode( $tips_data->image ),
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

            return json_encode( $return_data );
        }
    }

    public function certification()
    {
        $certification_data = Certification::where('is_deleted',0)->where('id',1)->first();
        if (isset($certification_data)) {

            $banner_section_data = json_decode( $certification_data->banner_section );
            $content_section_data = json_decode( $certification_data->content_section );
            $immersive_learning_section_data = json_decode( $certification_data->immersive_learning_section );



            $return_data = array(
                'status' => true,
                'banner_section' => $banner_section_data,
                'content_section' => $content_section_data,
                'immersive_learning_section' => $immersive_learning_section_data
            );

            return json_encode( $return_data );
        }
    }


}
