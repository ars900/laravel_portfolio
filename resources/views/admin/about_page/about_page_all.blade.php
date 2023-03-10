@extends('layouts.app')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('general.about_page')</h4>
                        <form method="POST" action="{{ route('about.update', $aboutPage) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.title')</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text" value="{{ $aboutPage->title }}"  id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.short_title')</label>
                                    <div class="col-sm-10">
                                        <input name="short_title" class="form-control" type="text" value="{{ $aboutPage->short_title }}"  id="example-text-input">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.short_description')</label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="description"  class="form-control" rows="5">{{ $aboutPage->description }} </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.about_image')</label>
                                    <div class="col-sm-10">
                                        <input name="image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                      <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutPage->image))? url( $aboutPage->image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">
                        </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>



@endsection
