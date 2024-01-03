<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\BlogCategoryModel;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $categoryList = BlogCategoryModel::pluck('catTitle', 'id')->toArray();
        $data = BlogModel::where('is_deleted', 0)->paginate(10);
        return view('blog.index', compact('data', 'categoryList'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        $categoryList = BlogCategoryModel::all()->where('is_deleted', 0);
        return view('blog.create', compact('categoryList'));
    }

    public function store(Request $request)
    {
        $data = new BlogModel();
        if (isset($request->featureImg)) {
            $img = time() . '1.' . $request->featureImg->getClientOriginalName();
            $request->featureImg->move(public_path('uploads/blog'), $img);
            $image = 'public/uploads/blog/' . $img;
            $data->featureImg =  $image;
        }
        $data->image_alt = $request->image_alt;
        $data->name = $request->name;
        $data->categoryID = $request->categoryID;
        $data->description = $request->description;
        $data->slug = Str::slug($request->catTitle);
        $data->save();
        return redirect()->route('blog.index')->with('success', 'Job seekers added successfully');
    }

    public function edit($id)
    {
        $categoryList = BlogCategoryModel::all()->where('is_deleted', 0);
        $data = BlogModel::find($id);
        return view('blog.edit', compact('data', 'categoryList'));
    }

    public function update(Request $request, $id)
    {
        $data = BlogModel::findOrFail($id);
        $featureImg = $data->featureImg;
        if (isset($request->featureImg)) {
            //For section Four
            $img = time() . '1.' . $request->featureImg->getClientOriginalName();
            $request->featureImg->move(public_path('uploads/blog'), $img);
            $image = 'public/uploads/blog/' . $img;
            $data->featureImg =  $image;
        } else {
            $data->featureImg = $featureImg;
        }
        $data->image_alt = $request->image_alt;
        $data->name = $request->name;
        $data->categoryID = $request->categoryID;
        $data->description = $request->description;
        $data->slug = Str::slug($request->name);
        $data->save();
        return redirect()->route('blog.index')->with('success', 'BlogModel updated successfully.');
    }


    public function destroy($id)
    {
        $data = BlogModel::find($id);
        $data->is_deleted = 1;
        if ($data->save()) {
            return redirect()->route('blog.index')->with('success', 'Record deleted successfully');
        } else {
            return redirect()->route('blog.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
