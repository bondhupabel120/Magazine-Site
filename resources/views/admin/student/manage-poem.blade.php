@extends('admin.master')

@section('title')
    Manage Poem
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Poem
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>ID</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($peoms as $peom)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $peom->name }}</td>
                                <td>{{ $peom->department }}</td>
                                <td>{{ $peom->student_id }}</td>
                                <td>{{ $peom->heading }}</td>
                                <td>{{ $peom->description }}</td>
                                <td>{{ $peom->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($peom->publication_status == 1)
                                        <a href="{{ route('unpublished-poem', ['id'=>$peom->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-poem', ['id'=>$peom->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td class="bg-success">
                                    <a href="" id="{{ $peom->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deletePoemForm'+'{{ $peom->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deletePoemForm{{ $peom->id }}" action="{{ route('delete-poem') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $peom->id }}" name="id"/>
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
