<x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Enroll Leads</h1>
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">Leads</h3>
                        </div>

                    </div>
                    <div class="card-body table-responsive">
                        <table id="basic-datatable" class="table align-middle table-row-dashed fs-6 gy-5" width="100%">
                            <thead class="fw-bold">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Degree</th>
                                    <th>Year of Completion</th>
                                    <th>Program</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td> {{ $value->name }} </td>
                                    <td> {{ $value->email }} </td>
                                    <td> {{ $value->mobile }} </td>
                                    <td> {{ $value->degree }} </td>
                                    <td> {{ $value->year_of_completion }} </td>
                                    <td> {{ $value->program }} </td>
                                    <td> {{ $value->created_at->format('d M Y') }} </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {!! $data->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
