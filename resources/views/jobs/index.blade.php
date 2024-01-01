<x-app-layout>

    @section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Jobs Page</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-custom example example-compact">

                            <form action="{{ route('jobs.update',$id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h5 class="card-title">Banner Section</h5><br />
                                    @php
                                    $decode_logo = json_decode($data->banner_section);
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
                                <!-- Section Two Start -->
                                <div class="card-body">
                                    <h5 class="card-title">Next Job Section</h5><br />
                                    @php
                                    $section_two = json_decode($data->section_two);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $section_two->heading }}" name="section_2_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Sub Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $section_two->sub_heading }}" name="section_2_sub_heading" placeholder="Enter Sub Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Description *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor" name="section_2_description" placeholder="Enter Description" required="">{{ $section_two->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <!-- Section Two End -->
                                <!-- Section Three Start -->
                                @php
                                $section_three = json_decode($data->section_three);
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
                                                    <textarea name="sec3_desc" data-bvalidator="required" class="form-control CkeditorClass" id="editor" cols="30" rows="5" placeholder="Enter Description">{{ $section_three->sec3_desc }}</textarea>
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
                                @php
                                $last_section = json_decode($data->last_section);
                                @endphp
                                <div class="card-body">
                                    <h5 class="card-title">Hiring Teams Section</h5><br />
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Title *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" name="sec_last_title" value="{{ $last_section->sec_last_title }}" placeholder="Enter Title" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Benefits </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-4 fw-normal">Current Image</th>
                                                <th class="col-4 fw-normal">Update Image</th>
                                                <th class="col-4 fw-normal">Order By</th>
                                                <th><span role="button" class="ms-5" id="addclone3"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone3">

                                                @isset($last_section->images)
                                                @foreach ($last_section->images as $value)
                                                <tr>
                                                    <td>
                                                        @if($value->image)
                                                        <img src="{{ asset($value->image) }}" alt="Current Image" style="height: 100px; width: 150px;">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <input type="file" @if (!isset($value->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="image[]" />
                                                        <input type="hidden" name="old_img[]" id="" value="{{ $value->image }}">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="order_by[]" value="{{$value->order_by}}" class="form-control" placeholder="Order By" data-bvalidator="required,number" />
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
                                                    <textarea name="meta_desc" data-bvalidator="maxlen[99]" class="form-control" cols="30" rows="5">{{$data->meta_desc}}</textarea>
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
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2" name="submitButton">Submit</button>
                                            <a href="{{ route('jobs.index') }}" class="btn btn-light-danger">Cancel</a>
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