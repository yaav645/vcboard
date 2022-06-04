@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Task</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Task</li>
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
                    <form action="{{route('task.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Task name</label>
                            <input type="text" name="name" class="form-control" placeholder="Task name">
                            @error('name')
                                <div class="text-danger">Это обязательное поле</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="date" name="deadline" class="" placeholder="Deadline">
                            @error('deadline')
                            <div class="text-danger">Это обязательное поле</div>
                            @enderror
                        </div>
                        <div class="w-50">
                            <input type="submit" class="btn btn-block btn-primary" value="Add task">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
