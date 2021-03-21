@extends('admin.admin_master')
@section('admin_title', 'NASIM NEWS | CATEGORY CREATE')
@section('admin_main_section')

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home >> Category >> Update</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->
    <div class="row" style="min-height: 437px;">
        <div class="col-md-8">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i> @isset($category)Category Update @else Category Create @endisset</h3>

                </div>
                <div class="box-content">
                    <form action="{{isset($category) ? route('category.update',$category->id) : route('category.store') }}" class="form-horizontal" id="validation-form" method="post">
                        @csrf
                        @isset($category)
                        @method('PATCH')
                        @endisset
                            
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="category_en">Category English<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="category_en" id="category_en" value="{{ isset($category)?$category->category_en:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('category_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="category_bn">Category Bangla<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="category_bn" id="category_bn" value="{{ isset($category)?$category->category_bn:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('category_bn')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-3">
                                <input type="submit" class="btn btn-primary" value="{{isset($category)?'Update':'Create'}}">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
