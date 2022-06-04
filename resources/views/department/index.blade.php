@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Departments</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Departments</li>
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
                        <a href="{{route('department.create')}}" class="btn btn-block btn-primary">Create department</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                            <thead>
                            <tr align="center">
                                <th class="col-1">ID</th>
                                <th>Department</th>
                                <th class="col-1">Action</th>
                                <th class="col-1">Created at</th>
                                <th class="col-1">Updated at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr class="odd">
                                    <td align="center" class="dtr-control">{{$department->id}}</td>
                                    <td>{{$department->name}}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('department.show', $department->id)}}" class="mr-3">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{route('department.edit', $department->id)}}" class="mr-3 text-success">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <form action="{{route('department.delete', $department->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td align="center">{{$department->created_at}}</td>
                                    <td align="center">{{$department->updated_at}}</td>
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
