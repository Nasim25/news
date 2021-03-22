@extends('admin.admin_master')
@section('admin_title', 'NASIM NEWS | SUBDISTRICT')
@section('admin_main_section')

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-table"></i>Sub-district List</h3>
                    <div class="box-tool">
                        <a href="{{ route('sub-district.create') }}" class="btn btn-md" style="background-color: black;"><i
                                class="fa fa-plus"></i> Add Subdistrict</a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="btn-toolbar pull-right clearfix">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i
                                    class="fa fa-plus"></i></a>
                            <a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i
                                    class="fa fa-edit"></i></a>
                            <a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i
                                    class="fa fa-trash-o"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
                            <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i
                                    class="fa fa-file-text-o"></i></a>
                            <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i
                                    class="fa fa-table"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
                        </div>
                    </div>
                    <br /><br />
                    <div class="clearfix"></div>
                    <div class="table-responsive" style="border:0">
                        <table class="table table-advance" id="table1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>English</th>
                                    <th>Bangla</th>
                                    <th>District</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subdistricts as $key => $subdistrict)
                                    <tr class="table-flag-blue">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $subdistrict->subdistrict_en }}</td>
                                        <td>{{ $subdistrict->subdistrict_bn }}</td>
                                        <td>{{ $subdistrict->district->district_en }}</td>
                                        <td>
                                            <a href="{{route('sub-district.edit',$subdistrict->id)}}"><i class="fas fa-edit text-primary"></i></a>
                                            <a href="#" onclick="return confirm('Are you sure to delete')"><i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
