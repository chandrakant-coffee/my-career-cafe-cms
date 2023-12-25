<x-app-layout>
    @section('content')
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="toolbar" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
                        <!--end::Title-->
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start mx-4"></span>
                        <!--end::Separator-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Container-->
            </div>
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                  
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
    @endsection
</x-app-layout>

