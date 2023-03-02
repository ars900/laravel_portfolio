@extends('layouts.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">@lang('general.add_contact_message')</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('general.add_contact_message')</h4>
                        <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.contact_name')</label>
                                <div class="col-sm-6">
                                    <input name="name" class="form-control" type="text" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.contact_email')</label>
                                <div class="col-sm-6">
                                    <input name="email"  class="form-control" type="text" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.contact_subject')</label>
                                <div class="col-sm-6">
                                    <input name="subject"  class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.contact_phone')</label>
                                <div class="col-sm-6">
                                    <input name="phone" class="form-control" type="text" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.contact_message')</label>
                                <div class="col-sm-6">
                                    <input name="message" class="form-control" type="text" id="image">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
