@extends('admin.admin_master')
@section('admin_title', 'NASIM NEWS | SUBDISTRICT CREATE')
@section('admin_main_section')

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home >> Subdistrict >> Create</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->
    <div class="row" style="min-height: 437px;">
        <div class="col-md-8">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i> @isset($subdistrict)Sub-District Update @else Sub-District Create @endisset</h3>

                </div>
                <div class="box-content">
                    <form action="{{isset($subdistrict) ? route('sub-district.update',$subdistrict->id) : route('sub-district.store') }}" class="form-horizontal" id="validation-form" method="post">
                        @csrf
                        @isset($subdistrict)
                        @method('PATCH')
                        @endisset
                            
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label">District</label>
                            <div class="col-sm-9 col-lg-9 controls">
                               <select name="district_id" class="form-control chosen"
                                  tabindex="-1" id="selS0V">
                                  <option disabled selected > -- District Select -- </option>
                                  @foreach ($district as $districts)
                                      <option value="{{$districts->id}}">{{$districts->district_en}} | {{$districts->district_bn}}</option>
                                  @endforeach
                                     
                               </select>
                               @error('district_id')
                               <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="subdistrict_en">Sub-District English<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="subdistrict_en" id="subdistrict_en" value="{{ isset($subdistrict)?$subdistrict->subdistrict_en:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('subdistrict_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-3 control-label" for="subdistrict_bn">Sub-District Bangla<span class="text-danger"> *</span></label>
                            <div class="col-sm-9 col-lg-9 controls">
                                <input type="text" name="subdistrict_bn" id="subdistrict_bn" value="{{ isset($subdistrict)?$subdistrict->subdistrict_bn:'' }}" class="form-control"
                                    data-rule-required="true" data-rule-minlength="3" />
                                    @error('subdistrict_bn')
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
