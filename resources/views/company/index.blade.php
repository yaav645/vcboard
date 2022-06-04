@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Companies</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Companies</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('company.create')}}" class="btn btn-block btn-primary">Create company</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                            <thead>
                            <tr align="center">
                                <th class="col-1">ID</th>
                                <th>Company</th>
                                <th>Description</th>
                                <th class="col-1">Action</th>
                                <th class="col-1">Created at</th>
                                <th class="col-1">Updated at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr class="odd">
                                    <td align="center" class="dtr-control">{{$company->id}}</td>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->description}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('company.show', $company->id)}}" class="mr-3">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{route('company.edit', $company->id)}}" class="mr-3 text-success">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <form action="{{route('company.delete', $company->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td align="center">{{$company->created_at}}</td>
                                    <td align="center">{{$company->updated_at}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
