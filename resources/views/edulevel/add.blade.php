@extends('main')

@section('title','Edulevel')

@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edulevel</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Edulevel</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="content mt-3">
    <div class="animated mt-3">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Jenjang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('edulevels') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-plus"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>

    </div>

</div> <!-- .content -->

@endsection