@extends('layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit company</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit company</li>
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
                    <form action="{{route('company.update', $company->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Company name</label>
                            <input type="text" name="name" class="form-control" value="{{$company->name}}">
                            @error('name')
                            <div class="text-danger">Это обязательное поле</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company description</label>
                            <textarea name="description" class="form-control" rows="3">{{$company->description}}</textarea>
                        </div>
                        <div class="col-4">
                            <input type="submit" class="btn btn-block btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
