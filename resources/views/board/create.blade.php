@extends('layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create VCBoard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create VCBoard</li>
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
                    <form action="{{route('board.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Board name</label>
                            <input type="text" name="name" class="form-control" placeholder="Board name">
                            @error('name')
                                <div class="text-danger">Это обязательное поле</div>
                            @enderror
                        </div>
                        <div class="w-50">
                            <input type="submit" class="btn btn-block btn-primary" value="Add VCBoard">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
