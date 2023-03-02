@extends('layouts.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('general.add_multi_image')</h4> <br><br>
                        <form method="post" action="{{ route('multi_image.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.multi_image_all')</label>
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.multi_image_all')</label>
                                <div class="col-sm-10">
                                    <input name="multi_image[]" class="form-control" type="file" id="image" multiple="" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{  url('upload/no_image.jpg') }}" alt="Card image cap">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Multi Image">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
