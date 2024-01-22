@extends('admin.admin_master')


@section('admin')
    <form class="p-3 py-5" action="/update-password" method="POST">



        @csrf




        <div class="mt-5">
            @if (count($errors))
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger alert-dismissible fade show">
                        {{ $error }}
                    </p>
                @endforeach
            @endif
        </div>




        <div class="d-flex justify-content-between align-items-center mb-3">


            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            </div>
            <h6 class="text-right">Edit Profile Page</h6>


        </div>
        <div class="row mt-2">
            <div class="col-md-12"><input type="password" class="form-control" placeholder="Enter Old Password"
                    name="oldPassword" value=""></div>

        </div>
        <div class="row mt-3">
            <div class="col-md-12"><input type="password" class="form-control" placeholder="Enter New Password"
                    name="newPassword" value=""></div>

        </div>
        <div class="row mt-3">
            <div class="col-md-12"><input type="password" class="form-control" placeholder="Enter Old Password"
                    name="confirm_password" value=""></div>
        </div>

        <div class="mt-5 text-right"><button class="btn btn-info profile-button" type="submit">Update
                Profile</button></div>
    </form>
@endsection
