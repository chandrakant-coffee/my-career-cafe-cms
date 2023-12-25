<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $id = 1;
        $data = Header::where('is_deleted',0)->where('id',1)->first();
        return view('header.index',compact('data','id'));

    }

    public function update(Request $request)
    {

       // dd($request);
        $data =  Header::find(1);

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

        $menu_data = array();
        foreach ($request->title as $key => $value) {
            $menu_data[] = array(
                'title' => $value,
                'link' => $request->link[$key],
                'order' => $request->order[$key]
            );
        }
        $data->menus = json_encode( $menu_data );




        if ($data->save()) {
            return redirect()->route('header.index')->with('success','Record updated successfully.');
        } else {
            return redirect()->route('header.index')->with('error','Something went to wrong, please try again!.');
        }

    }
}
