@extends('admin.admin_master')


@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container rounded bg-white mt-5">
        <form class="row" method="POST" action="{{ route('admin.update.editProfile') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        id="image_set" src="{{ asset('backend/admin/noProfile.jpeg') }}" width="90"><span
                        class="font-weight-bold">{{ $editAdmin->name }}
                    </span><span class="text-black-50">{{ $editAdmin->email }}</span><span>{{ $editAdmin->username }}</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        </div>
                        <h6 class="text-right">Edit Profile Page</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><input type="text" class="form-control" placeholder="first name" name="name"
                                value="{{ $editAdmin->name }}"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><input type="text" class="form-control" placeholder="Email" name="username"
                                value="{{ $editAdmin->username }}"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ $editAdmin->email }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                        </div>
                    </div>

                    <div class="mt-5 text-right"><button class="btn btn-info profile-button" type="submit">Update
                            Profile</button></div>
                </div>

            </div>

        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#inputGroupFile01").change(function(e) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $("#image_set").attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection
