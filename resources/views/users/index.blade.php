<x-app-layout>

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">User</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                </div>
                <!--end::Page title-->
                    <!--begin::Actions-->
                    {{-- <div class="d-flex align-items-center py-1">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-outline btn-sm btn-outline-dashed btn-outline-info btn-active-light-info" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="bi bi-funnel-fill text-info"></i>
                            <!--end::Svg Icon-->Filter</a>

                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484c2076b3a">
                                <!--begin::Form-->
                                <form action="{{route('users.index')}}" method="GET">
                                    <span class="d-flex justify-content-end mt-2 me-2" data-kt-menu-dismiss="true"><i class="bi bi-x-square fs-4"></i></span>
                                    <div class="px-7 py-5">
                                        <div class="mb-2">
                                            <label class="form-label fw-bold">Name:</label>
                                            <div>
                                                <input type="text" name="search_name" autocomplete="off" value="{{Request::get('search_name')}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label fw-bold">Email:</label>
                                            <div>
                                                <input type="text" name="search_email" autocomplete="off" value="{{Request::get('search_email')}}" class="form-control">
                                            </div>
                                        </div>
                                       
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <a href="{{route('users.index')}}" class="btn btn-sm btn-light-danger me-2">Reset</a>
                                            <button type="submit" class="btn btn-sm btn-primary" >Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                    
                    </div> --}}
                    <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">User Info</h3>
                        </div>
                         <div class="card-toolbar">
                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-light-primary" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Add User">
                                <i class="bi bi-plus-lg fs-7"></i>
                               Add New</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="basic-datatable" class="table align-middle table-row-dashed fs-6 gy-5" 
                            width="100%">
                            <thead class="fw-bold">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                 <tr class="fs-6 fw-normal @if ($value->is_deleted==1) text-danger  @endif"  id="{{$value->id}}">
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        {{ $value->fname }} {{ $value->lname }}
                                        @if (isset($value->email_verified_at))
                                            <span class="text-info fs-8" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="@ {{Helper::datetimeFormat($value->email_verified_at) }}"><i class="bi bi-patch-check-fill fs-5"></i></span>
                                        @else
                                            <span class="text-danger fs-8 VerifyUser" role="button" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Verify"></i><i class="bi bi-patch-check"></i>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $value->email }}
                                        @if ($value->is_deleted==1)
                                            <span class="text-muted fs-8 d-block">User Deleted</span>
                                        @endif
                                    </td>
                                    @if ($value->roles->first())
                                    <td>{{ $value->roles->first()->name }}</td>
                                    @else
                                    <td>NA</td>
                                    @endif
                                    <td style="display:flex;">
                                        @if (isset($value->status) && $value->status==1)
                                            <a href="{{ route('ChangeStatus',$value->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Block">
                                                <i class="bi bi-check2 fs-3"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('ChangeStatus',$value->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Unblock">
                                                <i class="bi bi-x fs-3 text-danger"></i>
                                            </a>
                                        @endif
                                       
                                            <a href="{{ route('users.edit',$value->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Edit">
                                                <i class="bi bi-vector-pen fs-3"></i>
                                            </a>
                                        @if ($value->is_deleted==0)
                                            <form action="{{ route('users.destroy',$value->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm ConfirmDelete" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Delete">
                                                    <i class="bi bi-trash fs-3"></i>
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('users.destroy',$value->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-info btn-sm RestoreDelete" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Restore">
                                                    <i class="bi bi-recycle fs-3"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                     {!! $data->appends(Request::all())->links() !!}          
                    </div>
                </div>
            </div>
        </div>
    </div>            
@endsection
</x-app-layout>

