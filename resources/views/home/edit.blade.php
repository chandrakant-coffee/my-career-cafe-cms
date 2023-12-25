 <x-app-layout>
     @section('content')
     <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
         <div class="toolbar" id="kt_toolbar">
             <!--begin::Container-->
             <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                 <!--begin::Page title-->
                 <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                     <!--begin::Title-->
                     <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Home</h1>
                     <!--end::Title-->
                     <!--begin::Separator-->
                     <span class="h-20px border-gray-200 border-start mx-4"></span>
                     <!--end::Separator-->
                 </div>
                 <!--end::Page title-->
             </div>
             <!--end::Container-->
         </div>
         <div class="d-flex flex-column-fluid">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">

                         <div class="card card-custom example example-compact">
                             {{-- <div class="card-header">
                                <h3 class="card-title">Edit Home</h3>
                            </div> --}}

                             <form action="{{ route('home.update',$data->id) }}" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')

                                 <div class="card-body">
                                     <!-- Section one Start -->
                                     <div class="mb-3">
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section One Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec1Title" value="{{ $data->sec1Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section One Sub Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec1SubTitle" value="{{ $data->sec1SubTitle }}" placeholder="Enter Sub Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section One Description *</label>
                                                 <div class="col-10">
                                                     <textarea name="sec1Desc" data-bvalidator="required" class="form-control" id="" cols="30" rows="5" placeholder="Enter Description" >{{$data->sec1Desc}}</textarea>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section One Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec1LInk" value="{{ $data->sec1LInk }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section One Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec1Image) ? '' : 'required' }}" class="form-control" name="sec1Image" value="{{ $data->sec1Image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec1Image)
                                                         <img src="{{ asset($data->sec1Image) }}" alt="Current Image" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Section one End -->
                                         <!-- Section two start -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Two Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec2Title" value="{{ $data->sec2Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Two Description *</label>
                                                 <div class="col-10">
                                                     <textarea name="sec2Desc" data-bvalidator="required" class="form-control" id="" cols="30" rows="5" placeholder="Enter Description">{{$data->sec2Desc}}</textarea>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Two Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec2Link" value="{{ $data->sec2Link }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Two Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec2Image) ? '' : 'required' }}" class="form-control" name="sec2Image" value="{{ $data->sec2Image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec2Image)
                                                         <img src="{{ asset($data->sec2Image) }}" alt="Current Image" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Section Two End  -->
                                         <!-- Section Three start  -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Three Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec3Title" value="{{ $data->sec3Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <span class="fw-bold fs-3">Section Three Add More*</span>
                                         <div class="form-group">
                                             <table class="addPadding">
                                                 <thead>
                                                     <th class="col-2 fw-normal">Image</th>
                                                     <th class="col-2 fw-normal">Title</th>
                                                     <th class="col-2 fw-normal">Description</th>
                                                     <th class="col-2 fw-normal">Order By</th>
                                                     <th class="col-1">
                                                         <span role="button" class="ms-5" id="addclone">
                                                             <i class="bi bi-plus-square fs-3 text-primary"></i>
                                                         </span>
                                                     </th>
                                                 </thead>
                                                 <tbody id="tableclone">
                                                     @if(isset($sec3AddMore))
                                                     @foreach($sec3AddMore as $value)
                                                     <tr>
                                                         <td>
                                                             <input type="file" name="sec3Images[]" value="{{ $value->sec3Images }}" class="form-control" data-bvalidator="{{ isset($value->sec3Images) ? '' : 'required' }}">
                                                             @if($value->sec3Images)
                                                             <img src="{{ asset($value->sec3Images) }}" alt="Current Image" style="height: 100px; width: 150px;">
                                                             @endif
                                                             <input type="hidden" name="old_img[]" id="" value="{{ $value->sec3Images }}">
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec3Titles[]" value="{{ $value->sec3Titles }}" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                         </td>
                                                         <td>
                                                             <textarea name="sec3Descriptions[]" value="" class=" form-control" placeholder="Enter Description" data-bvalidator="maxlen[500],required" rows="1">{{ $value->sec3Descriptions }}</textarea>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec3OrderBy[]" value="{{ $value->sec3OrderBy }}" class=" form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
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
                                                             <input type="file" name="sec3Images[]" class="form-control" required>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec3Titles[]" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                         </td>
                                                         <td>
                                                             <textarea name="sec3Descriptions[]" class="form-control" placeholder="Enter Description" data-bvalidator="maxlen[500],required" rows="1"></textarea>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec3OrderBy[]" class="form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
                                                         </td>
                                                         <td>
                                                             <button type="button" class="removeclone btn btn-sm ">
                                                                 <i class="bi bi-trash text-danger fs-3"></i>
                                                             </button>
                                                         </td>
                                                     </tr>
                                                     @endif
                                                 </tbody>
                                             </table>
                                         </div>
                                         <!-- Section Three End  -->
                                         <!-- Section Four start  -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Four Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec4Title" value="{{ $data->sec4Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Four Description *</label>
                                                 <div class="col-10">
                                                     <textarea name="sec4Desc" data-bvalidator="required" class="form-control" id="" cols="30" rows="5" placeholder="Enter Description">{{$data->sec4Desc}}</textarea>

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Four Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec4Link" value="{{ $data->sec4Link }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Four Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec4Image) ? '' : 'required' }}" class="form-control" name="sec4Image" value="{{ $data->sec4Image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec4Image)
                                                         <img src="{{ asset($data->sec4Image) }}" alt="Current Image" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Section Four End  -->
                                         <!-- Section Five start  -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Five Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec5Title" value="{{ $data->sec5Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Five Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec5Image) ? '' : 'required' }}" class="form-control" name="sec5Image" value="{{ $data->sec5Image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec5Image)
                                                         <img src="{{ asset($data->sec5Image) }}" alt="Current Image" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <span class="fw-bold fs-3">Section Five Add More*</span>
                                         <div class="form-group">
                                             <table class="addPadding">
                                                 <thead>
                                                     <th class="col-2 fw-normal">Image</th>
                                                     <th class="col-2 fw-normal">Title</th>
                                                     <th class="col-2 fw-normal">Description</th>
                                                     <th class="col-2 fw-normal">Order By</th>
                                                     <th class="col-1">
                                                         <span role="button" class="ms-5" id="addcloneSec5">
                                                             <i class="bi bi-plus-square fs-3 text-primary"></i>
                                                         </span>
                                                     </th>
                                                 </thead>
                                                 <tbody id="tablecloneSec5">

                                                     @if(isset($sec5AddMore))
                                                     @foreach($sec5AddMore as $value)
                                                     <tr>
                                                         <td>
                                                             <input type="file" name="sec5Images[]" value="{{ $value->sec5Images }}" class="form-control" data-bvalidator="{{ isset($value->sec5Images) ? '' : 'required' }}">
                                                             @if($value->sec5Images)
                                                             <img src="{{ asset($value->sec5Images) }}" alt="Current Image" style="height: 100px; width: 150px;">
                                                             @endif
                                                             <input type="hidden" name="old_img_sec5[]" id="" value="{{ $value->sec5Images }}">
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec5Titles[]" value="{{ $value->sec5Titles }}" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                         </td>
                                                         <td>
                                                             <textarea name="sec5Descriptions[]" value="" class=" form-control" placeholder="Enter Description" data-bvalidator="maxlen[500],required" rows="1">{{ $value->sec5Descriptions }}</textarea>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec5OrderBy[]" value="{{ $value->sec5OrderBy }}" class=" form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
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
                                                             <input type="file" name="sec5Images[]" class="form-control" required>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec5Titles[]" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                         </td>
                                                         <td>
                                                             <textarea name="sec5Descriptions[]" class="form-control" placeholder="Enter Description" data-bvalidator="maxlen[500],required" rows="1"></textarea>
                                                         </td>
                                                         <td>
                                                             <input type="text" name="sec5OrderBy[]" class="form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
                                                         </td>
                                                         <td>
                                                             <button type="button" class="removeclone btn btn-sm ">
                                                                 <i class="bi bi-trash text-danger fs-3"></i>
                                                             </button>
                                                         </td>
                                                     </tr>
                                                     @endif
                                                 </tbody>
                                             </table>
                                         </div>
                                         <!-- Section Five End  -->
                                         <!-- Section Six Start -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Six Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec6Title" value="{{ $data->sec6Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Six Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec6image) ? '' : 'required' }}" class="form-control" name="sec6image" value="{{ $data->sec6image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec6image)
                                                         <img src="{{ asset($data->sec6image) }}" alt="Section Six" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Six Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec6Link" value="{{ $data->sec6Link }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Section Six End -->
                                         <!-- Section Seven Start -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Seven Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec7Title" value="{{ $data->sec7Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Seven Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec7link" value="{{ $data->sec7link }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Section Seven End -->
                                         <!-- Section Eight Start -->
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Eight Title *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec8Title" value="{{ $data->sec8Title }}" placeholder="Enter Title" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Eight Description *</label>
                                                 <div class="col-10">
                                                     <textarea name="sec8Desc" data-bvalidator="required" class="form-control" id="" cols="30" rows="5" placeholder="Enter Description">{{$data->sec8Desc}}</textarea>

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Eight Link *</label>
                                                 <div class="col-10">
                                                     <input type="text" data-bvalidator="required" class="form-control" name="sec8LInk" value="{{ $data->sec8LInk }}" placeholder="Enter Link" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="mb-4">
                                             <div class="form-group row">
                                                 <label class="col-2 col-form-label">Section Eight Image *</label>
                                                 <div class="col-10">
                                                     <input type="file" data-bvalidator="{{ isset($data->sec8Image) ? '' : 'required' }}" class="form-control" name="sec8Image" value="{{ $data->sec8Image }}" placeholder="Select Image" />
                                                     <div class="form-group">
                                                         <label for="image">Current Image</label>
                                                         @if($data->sec8Image)
                                                         <img src="{{ asset($data->sec8Image) }}" alt="Current Image" style="height: 150px; width: 200px;">
                                                         @endif
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Section Eight End -->
                                     <!-- Section Nine Start -->
                                     <div class="mb-4">
                                         <div class="form-group row">
                                             <label class="col-2 col-form-label">Section Nine Title *</label>
                                             <div class="col-10">
                                                 <input type="text" data-bvalidator="required" class="form-control" name="sec9Title" value="{{ $data->sec9Title }}" placeholder="Enter Title" />
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Section Nine End -->
                                     <span class="fw-bold fs-3">Section Ten Add More*</span>
                                     <div class="form-group">
                                         <table class="addPadding">
                                             <thead>
                                                 <th class="col-2 fw-normal">Title</th>
                                                 <th class="col-2 fw-normal">Enter Record In Digits</th>
                                                 <th class="col-2 fw-normal">Order By</th>
                                                 <th class="col-1">
                                                     <span role="button" class="ms-5" id="addcloneSec10">
                                                         <i class="bi bi-plus-square fs-3 text-primary"></i>
                                                     </span>
                                                 </th>
                                             </thead>
                                             <tbody id="tablecloneSec10">
                                                 @if(isset($sec10AddMore))
                                                 @foreach($sec10AddMore as $value)
                                                 <tr>
                                                     <td>
                                                         <input type="text" name="title[]" value="{{ $value->title }}" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                     </td>
                                                     <td>
                                                         <input type="text" name="recordInDigit[]" value="{{ $value->recordInDigit }}" class=" form-control" placeholder="Enter Record In Digits" data-bvalidator="maxlen[9],required">
                                                     </td>
                                                     <td>
                                                         <input type="text" name="sec10OrderBy[]" value="{{ $value->sec10OrderBy }}" class=" form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
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
                                                         <input type="text" name="title[]" class="form-control" placeholder="Enter Title" data-bvalidator="maxlen[99],required">
                                                     </td>
                                                     <td>
                                                         <textarea name="recordInDigit[]" class="form-control" placeholder="Enter Description" data-bvalidator="maxlen[500],required" rows="1"></textarea>
                                                     </td>
                                                     <td>
                                                         <input type="text" name="sec10OrderBy[]" class="form-control" placeholder="Enter Order no" data-bvalidator="maxlen[9],number,required">
                                                     </td>
                                                     <td>
                                                         <button type="button" class="removeclone btn btn-sm ">
                                                             <i class="bi bi-trash text-danger fs-3"></i>
                                                         </button>
                                                     </td>
                                                 </tr>
                                                 @endif
                                             </tbody>
                                         </table>
                                     </div>
                                     <span class="fw-bold fs-3">SEO Tags</span>
                                        <div class="separator border-dark mb-5"></div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Page Title</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->page_title}}" class="form-control" name="page_title" placeholder="Enter Page Title"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Meta Title</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->meta_title}}" class="form-control" name="meta_title" placeholder="Enter Meta Title"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Meta Keywords</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->meta_keyword}}" class="form-control" name="meta_keyword" placeholder="Enter Meta Keywords"/>
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
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->url_schema}}" class="form-control" name="url_schema" placeholder="Enter Url Schema"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Canonical Rel</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->canonical_rel}}" class="form-control" name="canonical_rel" placeholder="Enter Canonical Rel"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Canonical Tag</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="maxlen[49]" value="{{$data->canonical_tag}}" class="form-control" name="canonical_tag" placeholder="Enter Canonical Tag"/>
                                                </div>
                                            </div>
                                        </div>
                                 </div>

                                 <!-- Section Ten Start -->

                                 <!-- Section Ten End -->
                                 <div class="card-footer">
                                     <div class="row">
                                         <div class="col-2"></div>
                                         <div class="col-10">
                                             <button type="submit" class="btn btn-success mr-2" name="submitButton">Update</button>
                                             <a href="{{ route('home.index') }}" class="btn btn-light-danger">Cancel</a>
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