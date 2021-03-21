@extends('admin.admin_master')
@section('admin_title', 'NASIM NEWS | SUBCATEGORY CREATE')
@section('admin_main_section')

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home >> Subcategory >> Create</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->
    <div class="row" style="min-height: 437px;">
        <div class="col-md-8">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i> @isset($subcategory)Subcategory Update @else Subcategory Create @endisset</h3>

                </div>
                <div class="box-content">
                    <form action="{{isset($subcategory) ? route('subcategory.update',$subcategory->id) : route('subcategory.store') }}" class="form-horizontal" id="validation-form" method="post">
                        @csrf
                        @isset($subcategory)
                        @method('PATCH')
                        @endisset
                            
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label">Category</label>
                            <div class="col-sm-9 col-lg-9 controls">
                               <select name="category_id" class="form-control chosen"
                                  tabindex="-1" id="selS0V">
                                  <option disabled selected > -- Category Select -- </option>
                                  @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->category_en}} | {{$category->category_bn}}</option>
                                  @endforeach
                                     
                               </select>
                               @error('category_id')
                               <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="subcategory_en">Category English<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="subcategory_en" id="subcategory_en" value="{{ isset($subcategory)?$subcategory->subcategory_en:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('subcategory_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="subcategory_bn">Category Bangla<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="subcategory_bn" id="subcategory_bn" value="{{ isset($subcategory)?$subcategory->subcategory_bn:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('subcategory_bn')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-3">
                                <input type="submit" class="btn btn-primary" value="{{isset($subcategory)?'Update':'Create'}}">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
