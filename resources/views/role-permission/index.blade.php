<x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Role-Permissions</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <div class="card-title">
                            <h3 class="card-label">Roles-List</h3>
                        </div>
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="{{route('role-permission.create')}}" class="btn btn-light-primary ms-2">+ Add Role</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start fw-bold">
                                    <th class="min-w-125px">Role</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-normal">
                                @foreach ($Role as $value)
                                <tr>
                                    <!--begin::Name=-->
                                    <td>{{$value->name}}</td>
                                    <!--end::Name=-->
                                    <!--begin::Action=-->
                                    <td style="display:flex;">
                                        <!--begin::Update-->
                                        <a href="{{ route('role-permission.edit',$value->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Edit">
                                            <i class="bi bi-vector-pen fs-3"></i>
                                        </a>
                                        <!--end::Update-->
                                        <!--begin::Delete-->
                                        <form action="{{ route('role-permission.destroy',$value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm ConfirmDelete" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Delete">
                                                <i class="bi bi-trash fs-3"></i>
                                            </button>
                                        </form>
                                        <!--end::Delete-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <!--end::Table body-->
                        </table>
                     {!! $Role->appends(Request::all())->links() !!}          

                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    @endsection
</x-app-layout>