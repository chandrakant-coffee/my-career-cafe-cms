<x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Category Listing</h1>
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
                            <h3 class="card-label">Category</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('blogcategory.create') }}" class="btn btn-sm btn-light-primary" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Add">
                                <i class="bi bi-plus-lg fs-7"></i>
                                Add New</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="basic-datatable" class="table align-middle table-row-dashed fs-6 gy-5" width="100%">
                            <thead class="fw-bold">
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        {{ $value->catTitle }}
                                    </td>
                                    <td style="display:flex;">

                                        <a href="{{ route('blogcategory.edit', $value->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Edit">
                                            <i class="bi bi-vector-pen fs-3"></i>
                                        </a>
                                        <form action="{{ route('blogcategory.destroy', $value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm ConfirmDelete" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Delete">
                                                <i class="bi bi-trash fs-3"></i>
                                            </button>
                                        </form>
                                    </td>
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