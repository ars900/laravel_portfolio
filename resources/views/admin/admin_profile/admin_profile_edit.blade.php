@extends('layouts.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile Page </h4>
                        <form method="post" action="{{ route('admin_user.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text" value="{{ $editData->name }}"  id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="text" value="{{ $editData->email }}"  id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">UserName</label>
                                <div class="col-sm-10">
                                    <input name="username" class="form-control" type="text" value="{{ $editData->username }}"  id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image </label>
                                <div class="col-sm-10">
                                    <input name="profile_image" class="form-control" type="file"  id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                 <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                 </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
