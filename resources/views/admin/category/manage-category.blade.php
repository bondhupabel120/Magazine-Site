@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td>{{ $category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <a href="{{ route('edit-category', ['id'=>$category->id]) }}">Edit</a>
                                <a href="#" id="{{ $category->id }}" class="delete-btn">Delete</a>
                                <form id="deleteCategoryForm{{ $category->id }}" action="{{ route('delete-category') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $category->id }}" name="id"/>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
