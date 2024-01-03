<x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Blog</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom example example-compact">
                            <form action="{{ route('blog.update',$data->id) }}" autocomplete="off" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">


                                    @php
                                    $decode_data = json_decode($data->featureImg);
                                    @endphp
                                    @isset($data->featureImg)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Image </label>
                                                <div class="col-10">
                                                    <img class="IndexImg" src="{{url('/')}}/{{ $data->featureImg }}" alt="Banner featureImg" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Feature Image *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($data->featureImg)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="featureImg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Image Alt *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $data->image_alt }}" name="image_alt" placeholder="Enter Alt Text" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Blog Title *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $data->name }}" name="name" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Category *</label>
                                            <div class="col-10">
                                                <select class="form-control" required name="categoryID">
                                                    <option disabled selected>--Select Category--</option>
                                                    @foreach($categoryList as $value)
                                                    <option value="{{$value->id}}" @if($data->categoryID == $value->id) selected @endif>{{$value->catTitle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Description *</label>
                                            <div class="col-10">
                                                <textarea name="description" class="CkeditorClass" id="editor1">{{ $data->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2" name="submitButton">Submit</button>
                                            <a href="{{ route('blog.index') }}" class="btn btn-light-danger">Cancel</a>
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
        CKEDITOR.replace('editor');
    </script>
    @endsection

</x-app-layout>