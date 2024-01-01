<x-app-layout>

    @section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Assesment Page</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-custom example example-compact">

                            <form action="{{ route('assesment.update',$id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h5 class="card-title">Banner Section</h5><br />
                                    @php
                                    $decode_logo = json_decode($data->banner_section);
                                    $section_three = json_decode($data->section_three);
                                    //dd($decode_logo->button->text);
                                    @endphp
                                    @isset($data->banner_section)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Background Image </label>
                                                <div class="col-10">
                                                    <img class="IndexImg" src="{{url('/')}}/{{ $decode_logo->image }}" alt="Banner Image" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Background Image *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($data->banner_section)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="banner_background_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->heading }}" name="banner_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->button->text }}" name="banner_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->button->link }}" name="logo_link" placeholder="Enter Link" />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr />
                                @php
                                $skill_assesment = json_decode($data->skill_assesment);
                                @endphp
                                <div class="card-body">
                                    <h5 class="card-title">Skill Asessment Section</h5><br />
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Title *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $skill_assesment->skill_assesment_title }}" name="skill_assesment_title" placeholder="Enter title" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Sub Title *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $skill_assesment->skill_assesment_sub_title }}" name="skill_assesment_sub_title" placeholder="Enter Sub Title" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Description *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor" name="skill_assesment_desc" placeholder="Enter Description" required="">{{ $skill_assesment->skill_assesment_desc }}</textarea>
                                        </div>
                                    </div>

                                    @if($decode_logo->image)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Image</label>
                                                <div class="col-10">
                                                    <img class="IndexImg" src="{{url('/')}}/{{ $skill_assesment->skill_assesment_img }}" alt="Banner Image" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($skill_assesment->skill_assesment_img)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="skill_assesment_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image Alt Tag *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $skill_assesment->skill_assesment_img_alt }}" name="skill_assesment_img_alt" placeholder="Enter Image Alt Tag" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Short Description *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor8" name="skill_assesment_short_desc" placeholder="Enter Short Description" required="">{{ $skill_assesment->skill_assesment_short_desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Skill Asessment </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-3 fw-normal">Title</th>
                                                <th class="col-3 fw-normal">Description</th>
                                                <th class="col-3 fw-normal">Link</th>
                                                <th class="col-3 fw-normal">Order By</th>
                                                <th><span role="button" class="ms-5" id="addclone1"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone1">

                                                @isset($skill_assesment->skill_assesment_tools)
                                                @foreach ($skill_assesment->skill_assesment_tools as $key => $value)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="tools_title[]" value="{{$value->tools_title}}" class="form-control" placeholder="Enter Title" data-bvalidator="required" />
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control CkeditorClass" id="{{ $key }}" name="tools_desc[]" placeholder="Description" required="required">{{ $value->tools_desc }}</textarea>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="tools_link[]" value="{{$value->tools_link}}" class="form-control" placeholder="Enter Link" data-bvalidator="required" />
                                                    </td>
                                                    <td>
                                                        <input type="text" name="tools_order_by[]" value="{{$value->tools_order_by}}" class="form-control" placeholder="order By" data-bvalidator="required" />
                                                    </td>
                                                    <td>
                                                        <button type="button" class="removeclone1 btn btn-sm ">
                                                            <i class="bi bi-trash text-danger fs-3"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr />
                                    <!-- Section Three Start -->
                                    @php
                                    $decode_logo = json_decode($data->banner_section);
                                    $section_three = json_decode($data->section_three);
                                    //dd($decode_logo->button->text);
                                    @endphp
                                    <div class="card-body">
                                        <h5 class="card-title">Section Three</h5><br />
                                        <div class="mb-3">
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Title *</label>
                                                    <div class="col-10">
                                                        <input type="text" data-bvalidator="required" class="form-control" name="sec3_title" value="{{ $section_three->sec3_title }}" placeholder="Enter Title" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Description *</label>
                                                    <div class="col-10">
                                                        <textarea name="sec3_desc" data-bvalidator="required" class="form-control CkeditorClass" id="editor5" cols="30" rows="5" placeholder="Enter Description">{{ $section_three->sec3_desc }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Link *</label>
                                                    <div class="col-10">
                                                        <input type="text" data-bvalidator="required" class="form-control" name="sec3_link" value="{{ $section_three->button->sec3_link }}" placeholder="Enter Link" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Link Button Text *</label>
                                                    <div class="col-10">
                                                        <input type="text" data-bvalidator="required" class="form-control" name="sec3_link_text" value="{{$section_three->button->sec3_link_text }}" placeholder="Enter Test" />
                                                    </div>
                                                </div>
                                            </div>
                                            @if($section_three->sec3_image)
                                            <div class="mb-3">
                                                <div class="mb-4">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Current Image</label>
                                                        <div class="col-10">
                                                            <img class="IndexImg" src="{{url('/')}}/{{ $section_three->sec3_image }}" alt="Banner Image" srcset="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="mb-5">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Image *</label>
                                                    <div class="col-10">
                                                        <input type="file" @if (!isset($section_three->sec3_image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="sec3_image" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Image alt Tag *</label>
                                                    <div class="col-10">
                                                        <input type="text" data-bvalidator="required" class="form-control" name="sec3_image_alt" value="{{ $section_three->sec3_image_alt }}" placeholder="Enter Image alt" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Section Three End -->
                                    <hr />
                                    <!-- Section Four Start -->
                                    <div class="card-body">
                                        <h5 class="card-title">Section Four</h5><br />
                                        @php
                                        $section_four = json_decode($data->section_four);
                                        //dd($section_four->button->text);
                                        @endphp
                                        @isset($data->section_four)
                                        <div class="mb-3">
                                            <div class="mb-4">
                                                <div class="form-group row">
                                                    <label class="col-2 col-form-label">Current Background Image </label>
                                                    <div class="col-10">
                                                        <img class="IndexImg" src="{{url('/')}}/{{ $section_four->sec4_image }}" alt="Banner Image" srcset="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endisset
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Background Image *</label>
                                                <div class="col-10">
                                                    <input type="file" @if (!isset($data->section_four)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="sec4_image" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Heading *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" value="{{ $section_four->sec4_title }}" name="banner_heading" placeholder="Enter Heading" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <label class="col-2 col-form-label">Description *</label>
                                            <div class="col-10">
                                                <textarea class="form-control CkeditorClass" id="editor4" name="sec4_desc" placeholder="Enter Description" required="">{{ $section_four->sec4_desc }}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Button Text *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" value="{{ $section_four->button->sec4_text }}" name="sec4_text" placeholder="Enter Button Text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Button Link *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" value="{{ $section_four->button->sec4_link }}" name="sec4_link" placeholder="Enter Link" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Section Four End -->
                                </div>
                                <hr />
                                <div class="card-body">
                                    <h5 class="card-title">Benefits Section</h5><br />
                                    @php
                                    $decode_data = json_decode($data->benefits_section);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="benefits_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>


                                    @isset($decode_data->image)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Image </label>
                                                <div class="col-10">
                                                    <img class="IndexImg" src="{{url('/')}}/{{ $decode_data->image->path }}" alt="Banner Image" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($decode_data->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="benefits_section_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image Alt Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->image->alt }}" name="benefits_section_image_alt" placeholder="Enter Alt text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->text }}" name="benefits_section_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->link }}" name="benefits_section_button_link" placeholder="Enter Button Link" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Benefits </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-6 fw-normal">Benefit</th>
                                                <th><span role="button" class="ms-5" id="addclone3"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone3">

                                                @isset($decode_data->pointers)
                                                @foreach ($decode_data->pointers as $value)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="benefits_section_pointer_heading[]" value="{{$value}}" class="form-control" placeholder="Enter heading" data-bvalidator="required" />
                                                    </td>
                                                    <td>
                                                        <button type="button" class="removeclone3 btn btn-sm ">
                                                            <i class="bi bi-trash text-danger fs-3"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr />
                                <div class="card-body">
                                    <h5 class="card-title">Insights and Tips Section *</h5><br />
                                    @php
                                    $decode_data = json_decode($data->insights_and_tips_section);
                                    @endphp
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="insights_and_tips_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Insights and Tips *</label>
                                            <div class="col-10">
                                                @php
                                                $TipsId = $decode_data->pointers;
                                                @endphp
                                                <select class="form-select" data-control="select2" data-placeholder="Select an option" multiple="multiple" name="insights_and_tips_section_tips_id[]" id="product_id" data-bvalidator="required">
                                                    <option>--- Select Insights and Tips name ---</option>
                                                    @foreach ($tipsdata as $value)
                                                    <option value="{{ $value->id}}" @if ($TipsId !=NULL && in_array($value->id,$TipsId)) selected @endif>{{ $value->category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->text }}" name="insights_and_tips_section_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->link }}" name="insights_and_tips_section_button_link" placeholder="Enter Button Link" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr />
                                <div class="card-body">
                                    <span class="fw-bold fs-3">SEO Tags</span>
                                    <div class="separator border-dark mb-5"></div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Page Title</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->page_title}}" class="form-control" name="page_title" placeholder="Enter Page Title" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Meta Title</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->meta_title}}" class="form-control" name="meta_title" placeholder="Enter Meta Title" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Meta Keywords</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->meta_keyword}}" class="form-control" name="meta_keyword" placeholder="Enter Meta Keywords" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Meta Description</label>
                                            <div class="col-10">
                                                <textarea name="meta_desc" data-bvalidator="maxlen[99]" class="form-control" id="" cols="30" rows="5">{{$data->meta_desc}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Url Schema</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->url_schema}}" class="form-control" name="url_schema" placeholder="Enter Url Schema" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Canonical Rel</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->canonical_rel}}" class="form-control" name="canonical_rel" placeholder="Enter Canonical Rel" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Canonical Tag</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49]" value="{{$data->canonical_tag}}" class="form-control" name="canonical_tag" placeholder="Enter Canonical Tag" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2" name="submitButton">Submit</button>
                                            <a href="{{ route('footer.index') }}" class="btn btn-light-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".js-example-placeholder-single").select2({
            placeholder: "Select Product Menu",
            multiple: true
        });
    </script>
    @endsection
</x-app-layout>