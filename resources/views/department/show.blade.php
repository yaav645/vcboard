@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Department</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Department</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="col-12">
                    <form action="{{route('department.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Company name</label>
                            <div>
                            {{$department->name}}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('department.edit', $department->id)}}" class="btn btn-block btn-primary">Edit department</a>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
