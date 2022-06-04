@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Problems</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Problems</li>
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
                        <a href="{{route('problem.create')}}" class="btn btn-block btn-primary">Create problem</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                            <thead>
                            <tr align="center">
                                <th class="col-1">ID</th>
                                <th>Problem</th>
                                <th class="col-1">Deadline</th>
                                <th class="col-1">Action</th>
                                <th class="col-1">Created at</th>
                                <th class="col-1">Updated at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($problems as $problem)
                                <tr class="odd">
                                    <td align="center" class="dtr-control">{{$problem->id}}</td>
                                    <td>{{$problem->name}}</td>
                                    <td>{{$problem->deadline}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('problem.show', $problem->id)}}" class="mr-3">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{route('problem.edit', $problem->id)}}" class="mr-3 text-success">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <form action="{{route('problem.delete', $problem->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td align="center">{{$problem->created_at}}</td>
                                    <td align="center">{{$problem->updated_at}}</td>
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
