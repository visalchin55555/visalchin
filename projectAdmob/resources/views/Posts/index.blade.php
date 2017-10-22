@extends('master')
@section('css')
    <link href="{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Sweet Alert -->
    <link href="{{asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Post</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Post</a>
                        </li>

                        <li class="active">
                            View All Post
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card-box">

                    <a href="{!! @url('post/create') !!}" type="submit" class="btn btn-primary">Add New</a>

                </div>
                <div class="card-box table-responsive">
                    <table id="datatable-responsive"
                           class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <td>001</td>
                            <td>Animation Adobe Photoshop CC 2017</td>
                            <td>Admin</td>
                            <td>Technology</td>
                            <td>Adobe</td>
                            <td>20/10/17</td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>

    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.colVis.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

    <!-- Sweet-Alert  -->
    <script src="{{asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/user.js')}}"></script>
    <!-- init -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable-responsive').dataTable();
        });

    </script>
@endsection