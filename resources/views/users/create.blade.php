 <x-app-layout>
    @section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add User</h1>
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
                           
                            <form action="{{ route('users.store') }}" autocomplete="off" method="POST" class="form" id="FormId" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">First Name *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" name="fname" placeholder="Enter First Name"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Last Name *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required" class="form-control" name="lname" placeholder="Enter Last Name"/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Email *</label>
                                                <div class="col-10">
                                                    <input type="text" data-bvalidator="required,email" class="form-control" name="email" placeholder="Enter Email"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">New Password *</label>
                                                <div class="col-10">
                                                    <input id="new_pass1" type="password" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Min 8 characters including a number, letters a-z, A-Z" class="form-control" name="password" placeholder="Enter New Password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Confirm Password *</label>
                                                <div class="col-10">
                                                    <input type="password" data-bvalidator="equal[new_pass1],required" class="form-control" name="password" data-bvalidator-msg-equal="Please enter the same password again" placeholder="Enter Confirm Password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Role *</label>
                                                <div class="col-10">
                                                    <select class="form-control" required name="role">
                                                        <option disabled selected>--Select Role--</option>
                                                        @foreach($RoleList as $value)
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-2"></div><div class="col-10">
                                            <button type="submit" class="btn btn-success mr-2" name="submitButton">Submit</button>
                                            <a href="{{ route('users.index') }}" class="btn btn-light-danger">Cancel</a>
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
    <script type="text/javascript">
    
    function passwordFormat(password){
        regex = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/); // number, a-z, A-Z, min 8 chars
        if(regex.test(password))
            return true;
        return false;
    }
    
</script>
@endsection
</x-app-layout>