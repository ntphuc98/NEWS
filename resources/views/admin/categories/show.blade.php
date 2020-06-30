@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">
                                    {{ session('message') }}
                            </div>
                        @endif
                        <form action="{{ route('admin.categories.update', ['id' => $category->id]) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" value="{{ $category->name }}"/>
                            </div>
                            <div class="form-group">
                                <label>Category Link</label>
                                <input class="form-control" name="link" placeholder="Please Enter Category Link" value="{{ $category->link }}"/>
                            </div>
                            <div class="form-group">
                                <label>Created At</label>
                                <input class="form-control" disabled value="{{ $category->created_at }}"/>
                            </div>
                            <div class="form-group">
                                <label>Updated At</label>
                                <input class="form-control" disabled value="{{ $category->updated_at }}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @endsection