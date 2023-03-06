@extends('layouts.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
           <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('general.add_blog_category')</h4> <br><br>
                             <form method="post" id="myForm" action="{{ route('blog_category.store') }}" >
                                 @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">@lang('general.blog_category_all')</label>
                                    <div class="form-group col-sm-10">
                                        <input name="title" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Category">
                            </form>
                     </div>
                </div>
           </div>
        </div>
    </div>
</div>

    @endsection
