@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Create User</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">User</a>
                        </li>
                        <li class="active">
                            Create
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">User Form</h4>

                    <form role="form" method="post" action="{!! @url('user') !!}">

                        @include('users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection