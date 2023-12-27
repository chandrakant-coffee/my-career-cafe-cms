<x-app-layout>

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">About Us Page</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-custom example example-compact">

                               <form action="{{ route('about.update',$id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h5 class="card-title">Banner Section</h5><br/>
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

                                <hr/>

                                <div class="card-body">
                                    <h5 class="card-title">Career Development Section</h5><br/>
                                    @php
                                    $decode_logo = json_decode($data->career_development_section);
                                    //dd($decode_logo);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->heading }}" name="section_2_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Sub Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->sub_heading }}" name="section_2_sub_heading" placeholder="Enter Sub Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Description *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor" name="section_2_description" placeholder="Enter Description" required="">{{ $decode_logo->description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Pointers </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-2 fw-normal">Old Image</th>
                                                <th class="col-2 fw-normal">Image</th>
                                                <th class="col-2 fw-normal">Image Alt</th>
                                                <th class="col-2 fw-normal">Heading</th>
                                                <th class="col-4 fw-normal">Description</th>
                                                <th><span role="button" class="ms-5" id="addclone"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone">

                                                @isset($decode_logo->pointers)
                                                    @foreach ($decode_logo->pointers as $value)
                                                    @php
                                                    //echo"<pre>";print_r($value->image_alt);echo"</pre>";
                                                    //dd($decode_logo);
                                                    @endphp
                                                    <tr>
                                                        <td>
                                                            <img style="width: 200px;"class="IndexImg" src="{{url('/')}}/{{ $value->image }}" alt="image" />
                                                        </td>
                                                        <td>
                                                            <input type="file" @if (!isset($value->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="second_section_image[]" />
                                                            <input type="hidden" value="{{ $value->image }}" class="form-control" name="second_section_old_image[]" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name="second_section_image_alt[]" value="{{$value->image_alt}}" class="form-control" placeholder="Enter Image Alt" data-bvalidator="required">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="second_section_heading[]" value="{{$value->heading}}" class="form-control" placeholder="Enter Heading" data-bvalidator="required">
                                                        </td>
                                                        <td>
                                                            <textarea rows="7" class="form-control" id="editor" name="second_section_description[]" placeholder="Enter Description" required="">{{ $value->description }}</textarea>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="removeclone btn btn-sm ">
                                                                <i class="bi bi-trash text-danger fs-3"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>






                                </div>

                                <hr/>

                                <div class="card-body">
                                    <h5 class="card-title">Charge Process Section</h5><br/>
                                    @php
                                    $decode_data = json_decode($data->charge_process_section);
                                    //dd($decode_logo);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="charge_process_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->text }}" name="charge_process_section_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->link }}" name="charge_process_section_button_link" placeholder="Enter Button Link" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Process </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-6 fw-normal">Heading</th>
                                                <th class="col-6 fw-normal">Description</th>
                                                <th><span role="button" class="ms-5" id="addclone1"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone1">

                                                @isset($decode_logo->pointers)
                                                    @foreach ($decode_data->pointers as $value)
                                                    @php
                                                    //echo"<pre>";print_r($value->image_alt);echo"</pre>";
                                                    //dd($decode_logo);
                                                    @endphp
                                                    <tr>
                                                       <td>
                                                            <input type="text" name="charge_process_section_pointer_heading[]" value="{{$value->heading}}" class="form-control" placeholder="Enter Heading" data-bvalidator="required" />
                                                        </td>
                                                        <td>
                                                            <textarea rows="7" class="form-control" name="charge_process_section_pointer_description[]" placeholder="Enter Description" required="">{{ $value->description }}</textarea>
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
                                    <br/>

                                </div>

                                <hr/>

                                <div class="card-body">
                                    <h5 class="card-title">Career Development Section</h5><br/>
                                    @php
                                    $decode_data = json_decode($data->career_development_program_section);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="career_development_program_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Description *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor2" name="career_development_program_section_description" placeholder="Enter Description" required="">{{ $decode_logo->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->text }}" name="career_development_program_section_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->link }}" name="career_development_program_section_button_link" placeholder="Enter Button Link" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Program </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-3 fw-normal">Heading</th>
                                                <th class="col-3 fw-normal">Description</th>
                                                <th class="col-3 fw-normal">Goal</th>
                                                <th class="col-3 fw-normal">Time</th>
                                                <th><span role="button" class="ms-5" id="addclone2"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone2">

                                                @isset($decode_logo->pointers)
                                                    @foreach ($decode_data->pointers as $value)
                                                    @php
                                                    //echo"<pre>";print_r($value->image_alt);echo"</pre>";
                                                    //dd($decode_logo);
                                                    @endphp
                                                    <tr>
                                                       <td>
                                                            <input type="text" name="career_development_program_section_pointer_heading[]" value="{{$value->heading}}" class="form-control" placeholder="Enter heading" data-bvalidator="required" />
                                                        </td>
                                                        <td>
                                                            <textarea rows="4" class="form-control" name="career_development_program_section_pointer_description[]" placeholder="Enter Description" required="">{{ $value->description }}</textarea>
                                                        </td>
                                                        <td>
                                                            <textarea rows="4" class="form-control" name="career_development_program_section_pointer_goal[]" placeholder="Enter Goal" required="">{{ $value->goal }}</textarea>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="career_development_program_section_pointer_time[]" value="{{$value->time}}" class="form-control" placeholder="Enter Time" data-bvalidator="required" />
                                                        </td>
                                                        <td>
                                                            <button type="button" class="removeclone2 btn btn-sm ">
                                                                <i class="bi bi-trash text-danger fs-3"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Benefits Section</h5><br/>
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

                                                @isset($decode_logo->pointers)
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
                                    <br/>
                                </div>
                                <hr/>
                                <div class="card-body">
                                    <h5 class="card-title">Insights and Tips Section *</h5><br/>
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
                                        <div class="col-2"></div><div class="col-10">
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

