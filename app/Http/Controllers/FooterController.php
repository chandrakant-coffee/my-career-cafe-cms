<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = Footer::where('is_deleted',0)->where('id',1)->first();
        return view('footer.index',compact('data','id'));

    }

    public function update(Request $request)
    {

       // dd($request);
        $data =  Footer::find(1);

        if (isset($request->logo_image)) {
            $logo_image_name = time().'2.'.$request->logo_image->getClientOriginalExtension();
            $request->logo_image->move(public_path('uploads'), $logo_image_name);
            $logo_image = 'public/uploads/'.$logo_image_name;
        } else {
            $decode_logo = json_decode($data->logo);
            $logo_image = $decode_logo->image;
        }

        $logo_new_data = array(
            'image' =>  $logo_image,
            'alt' => $request->logo_alt,
            'link' => $request->logo_link
        );
        $data->logo = json_encode( $logo_new_data );
        $data->description = $request->description;

        $menu_data = array();
        foreach ($request->title as $key => $value) {
            $menu_data[] = array(
                'title' => $value,
                'link' => $request->link[$key],
                'order' => $request->order[$key]
            );
        }
        $data->menus = json_encode( $menu_data );

        $social_menu_data = array();
        foreach ($request->old_image as $key => $value) {

            if( $value == null ){

                $social_image_name = time().$key.'.'.$request->social_image[$key]->getClientOriginalExtension();
                $request->social_image[$key]->move(public_path('uploads'), $social_image_name);
                $social_image_new_name = 'public/uploads/'.$social_image_name;

            } else {
                if( isset( $request->social_image[$key]) ){

                    $social_image_name = time().$key.'.'.$request->social_image[$key]->getClientOriginalExtension();
                    $request->social_image[$key]->move(public_path('uploads'), $social_image_name);
                    $social_image_new_name = 'public/uploads/'.$social_image_name;
                } else {
                    $social_image_new_name = $value;
                }
            }

            $social_menu_data[] = array(
                'image' => $social_image_new_name,
                'link' => $request->social_link[$key],
            );
        }
        $data->social_menus = json_encode( $social_menu_data );
        $data->phone_no = $request->phone_no;
        $data->email = $request->email;
        $data->copyright = $request->copyright;

        if ($data->save()) {
            return redirect()->route('footer.index')->with('success','Record updated successfully.');
        } else {
            return redirect()->route('footer.index')->with('error','Something went to wrong, please try again!.');
        }

    }
}
