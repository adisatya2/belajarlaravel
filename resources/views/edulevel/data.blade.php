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

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>
                        Data Jenjang
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('edulevels/add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Description</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($edulevels as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->desc }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div> <!-- .content -->

@endsection