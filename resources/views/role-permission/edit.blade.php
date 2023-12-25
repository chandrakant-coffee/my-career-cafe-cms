<x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Permission</h1>
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
                               <form action="{{route('role-permission.update',$Roles->id)}}" method="POST" class="form" id="FormId">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right fs-6 col-sm-12">Roles Name *</label>
                                                <div class="col-lg-10 col-md-10 col-sm-12">
                                                    <input type="text" name="RoleName" required class="form-control" value="{{ $Roles->name }}" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                    <!--begin::Table body-->
                                                    <tbody class="text-gray-600 fw-bold">
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td class="text-gray-800">Administrator Access
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
                                                            <td>
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                    <input class="form-check-input" type="checkbox" value="" id="RoleSelectAll" />
                                                                    <span class="form-check-label" for="RoleSelectAll">Select all</span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </td>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        @foreach ($AllPermission as $value)
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class="text-gray-800">
                                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <span class="form-check-label me-2">{{$value->controller}}</span>
                                                                        <input class="form-check-input SelectRoleRow {{$value->controller}}" type="checkbox"/>
                                                                    </label>
                                                                </td>
                                                                <!--end::Label-->
                                                                <!--begin::Input group-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        @foreach (json_decode($value->permission) as $item)
                                                                        @if (strpos($item->name, ".") !== false)
                                                                            @php
                                                                                $Split = explode(".", $item->name);
                                                                            @endphp
                                                                        @endif
                                                                       
                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input CheckAll {{$value->controller}}" type="checkbox"  @if (in_array($item->id, $PermissionArray)) checked @endif value="{{$item->id}}" name="permission[]" />
                                                                            <span class="form-check-label">@if (strpos($item->name, ".") !== false){{ ucfirst($Split[1])}}@else{{ ucfirst($item->name)}} @endif</span>
                                                                        </label>
                                                                        @endforeach
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Input group-->
                                                            </tr>
                                             
                                                        @endforeach
                                                        <!--end::Table row-->
                                                      
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div><div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2" name="submitButton">Submit</button>
                                            <a href="{{ route('role-permission.index') }}" class="btn btn-light-danger">Cancel</a>
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