<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategoryModel;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $data = BlogCategoryModel::where('is_deleted', 0)->paginate(10);
        return view('category.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validationRules = [
            'catTitle' => [
                'required',
                'max:250',
                Rule::unique('blog_category', 'catTitle'),
            ],
        ];

        $validator = validator($request->all(), $validationRules);
        if ($validator->fails()) {
            return redirect()->back()->with('success', 'Category must be unique; already added.');
        }
        $data = new BlogCategoryModel();
        $data->catTitle = $request->catTitle;
        $data->slug = Str::slug($request->catTitle);
        $data->save();
        return redirect()->route('blogcategory.index')->with('success', 'Category added successfully');
    }

    public function edit($id)
    {
        $data = BlogCategoryModel::find($id);
        return view('category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $validationRules = [
            'catTitle' => [
                'required',
                'max:250',
                Rule::unique('blog_category', 'catTitle'),
            ],
        ];
        if ($request->catTitle !== $request->oldCatTitle) {
            $validator = validator($request->all(), $validationRules);
            if ($validator->fails()) {
                return redirect()->back()->with('success', 'Category must be unique; already added.');
            }
        }
        $data = BlogCategoryModel::findOrFail($id);
        $data->catTitle = $request->catTitle;
        $data->slug = Str::slug($request->catTitle);
        $data->save();
        return redirect()->route('blogcategory.index')->with('success', 'Category updated successfully.');
    }


    public function destroy($id)
    {
        $data = BlogCategoryModel::find($id);
        $data->is_deleted = 1;
        if ($data->save()) {
            return redirect()->route('blogcategory.index')->with('success', 'Record deleted successfully');
        } else {
            return redirect()->route('blogcategory.index')->with('error', 'Something went to wrong, please try again!.');
        }
    }
}
