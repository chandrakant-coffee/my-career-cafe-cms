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

class ApiController extends Controller
{


    public function header()
    {
        $header_data = Header::where('is_deleted',0)->where('id',1)->first();
        if (isset($header_data)) {

            $header_logo_data = json_decode( $header_data->logo );
            $header_menus_data = json_decode( $header_data->menus );

            $return_data = array(
                'logo' => array(
                    'path' => $header_logo_data->image,
                    'alt' => $header_logo_data->alt,
                    'link' => $header_logo_data->link
                ),
                'social_menus' => $header_menus_data
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



}
