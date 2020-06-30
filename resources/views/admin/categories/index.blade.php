@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
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
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->link}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <form method="POST" action="{{ route('admin.categories.delete', ['id' => $category->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"> Delete</button>
                                    </form>
                                    </td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.categories.show', ['id' => $category->id]) }}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection