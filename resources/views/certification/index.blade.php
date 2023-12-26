<x-app-layout>

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Certification Page</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-custom example example-compact">

                               <form action="{{ route('certification.update',$id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h5 class="card-title">Banner Section</h5><br/>
                                    @php
                                    $decode_logo = json_decode($data->banner_section);
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
                                    <h5 class="card-title">Content Section</h5><br/>
                                    @php
                                    $decode_data = json_decode($data->content_section);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="content_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Sub Heading *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor" name="content_section_sub_heading" placeholder="Enter Sub Heading" required="">{{ $decode_data->sub_heading }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Content *</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor1" name="content_section_content" placeholder="Enter Content" required="">{{ $decode_data->content }}</textarea>
                                        </div>
                                    </div>

                                    @isset($decode_data->image)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Bottom Image </label>
                                                <div class="col-10">
                                                    <img class="IndexImg" src="{{url('/')}}/{{ $decode_data->image->path }}" alt="Banner Image" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Image *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($decode_data->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="content_section_bottom_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Image Alt *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->image->alt }}" name="content_section_bottom_image_alt" placeholder="Enter Alt Text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->bottom_heading }}" name="content_section_bottom_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Content *</label>
                                            <div class="col-10">
                                               <textarea class="form-control CkeditorClass" id="editor2" name="content_section_bottom_content" placeholder="Enter Content" required="">{{ $decode_data->bottom_content }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Text *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->text }}" name="content_section_bottom_button_text" placeholder="Enter Button Text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Button Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->button->link }}" name="content_section_bottom_button_link" placeholder="Enter Button Link" />
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <hr/>

                                <div class="card-body">
                                    <h5 class="card-title">Immersive Learning Section</h5><br/>
                                    @php
                                    $decode_data = json_decode($data->immersive_learning_section);
                                    @endphp

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->heading }}" name="immersive_learning_section_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>

                                    @isset($decode_data->image)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label"> Current Image </label>
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
                                                <input type="file" @if (!isset($decode_data->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="immersive_learning_section_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image Alt *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->image->alt }}" name="immersive_learning_section_image_alt" placeholder="Enter Alt Text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Heading *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_data->bottom_heading }}" name="immersive_learning_section_bottom_heading" placeholder="Enter Heading" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Bottom Content *</label>
                                            <div class="col-10">
                                               <textarea class="form-control CkeditorClass" id="editor3" name="immersive_learning_section_bottom_content" placeholder="Enter Content" required="">{{ $decode_data->bottom_content }}</textarea>
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

