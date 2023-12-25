<x-app-layout>

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Footer Settings</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-custom example example-compact">

                               <form action="{{ route('footer.update',$id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    @php
                                    $decode_logo = json_decode($data->logo);
                                    @endphp
                                    @isset($data->logo)
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Current Logo</label>
                                                <div class="col-10">

                                                    <img class="IndexImg" src="{{url('/')}}/{{ $decode_logo->image }}" alt="{{ $decode_logo->alt }}" srcset="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Logo *</label>
                                            <div class="col-10">
                                                <input type="file" @if (!isset($data->logo)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="logo_image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Logo Alt *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="maxlen[49],required" class="form-control" value="{{ $decode_logo->alt }}" name="logo_alt" placeholder="Enter Logo Alt" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Logo Link *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $decode_logo->link }}" name="logo_link" placeholder="Enter Logo Link" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <textarea class="form-control CkeditorClass" id="editor" name="description" placeholder="Enter Description" required="">{{ $data->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Menus </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-4 fw-normal">Title</th>
                                                <th class="col-4 fw-normal">Url</th>
                                                <th class="col-4 fw-normal">Column</th>
                                                <th><span role="button" class="ms-5" id="addclone"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone">

                                                @isset($data->menus)
                                                    @php
                                                    $decode_menus = json_decode($data->menus);
                                                    //echo"<pre>";print_r($decode_menus);echo"</pre>";
                                                    @endphp
                                                    @foreach ($decode_menus as $value)
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="title[]" class="form-control" placeholder="Enter Title" value="{{$value->title}}" data-bvalidator="maxlen[99],required">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="link[]" class="form-control"
                                                                placeholder="Enter Url" value="{{$value->link}}" data-bvalidator="maxlen[99],required">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="order[]" value="{{$value->order}}" class="form-control"
                                                                placeholder="Enter Column no" data-bvalidator="maxlen[9],number,required">
                                                        </td>
                                                        <td>
                                                            <button type="button" class="removeclone btn btn-sm ">
                                                                <i class="bi bi-trash text-danger fs-3"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="link[]" class="form-control"
                                                                placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="link[]" class="form-control"
                                                                placeholder="Enter Url" data-bvalidator="maxlen[99],required">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="order[]" class="form-control"
                                                                placeholder="Enter Column no" data-bvalidator="maxlen[9],number,required">
                                                        </td>
                                                        <td>
                                                            <button type="button" class="removeclone btn btn-sm ">
                                                                <i class="bi bi-trash text-danger fs-3"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endisset

                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>

                                    <div class="form-group row mb-5">
                                        <label class="col-2 col-form-label"><strong> Social Menus </strong></label>
                                    </div>
                                    <div class="form-group">
                                        <table class="addPadding">
                                            <thead>
                                                <th class="col-4 fw-normal">Old Image</th>
                                                <th class="col-4 fw-normal">Image</th>
                                                <th class="col-4 fw-normal">Url</th>
                                                <th><span role="button" class="ms-5" id="addclone1"><i class="bi bi-plus-square fs-3 text-primary"></i></span></th>
                                            </thead>
                                            <tbody id="tableclone1">

                                                @isset($data->social_menus)
                                                    @php
                                                    $decode_social_menus = json_decode($data->social_menus);
                                                    //echo"<pre>";print_r($decode_menus);echo"</pre>";
                                                    @endphp
                                                    @foreach ($decode_social_menus as $value)
                                                    <tr>
                                                        <td>
                                                            <img style="width: 30px;"class="IndexImg" src="{{url('/')}}/{{ $value->image }}" alt="Social link" />
                                                        </td>
                                                        <td>
                                                            <input type="file" @if (!isset($value->image)) data-bvalidator="required" @endif data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg" class="form-control" name="social_image[]" />
                                                            <input type="hidden" value="{{ $value->image }}" class="form-control" name="old_image[]" />
                                                        </td>
                                                        <td>
                                                            <input type="text" name="social_link[]" value="{{$value->link}}" class="form-control" placeholder="Enter Link" data-bvalidator="required">
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

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Phone No. *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $data->phone_no }}" name="phone_no" placeholder="Enter Phone No." />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Email Id *</label>
                                            <div class="col-10">
                                                <input type="text" data-bvalidator="required" class="form-control" value="{{ $data->email }}" name="email" placeholder="Enter Email id" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">Copyright *</label>
                                            <div class="col-10">
                                                <textarea class="form-control CkeditorClass" name="copyright" placeholder="Enter Copyright" required="">{{ $data->copyright }}</textarea>
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
@endsection
</x-app-layout>

