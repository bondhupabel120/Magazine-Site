@extends('admin.master')

@section('title')
    Manage Jokes
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Jokes
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
                        @foreach($jokes as $joke)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $joke->name }}</td>
                                <td>{{ $joke->department }}</td>
                                <td>{{ $joke->student_id }}</td>
                                <td>{{ $joke->heading }}</td>
                                <td>{{ $joke->description }}</td>
                                <td>{{ $joke->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($joke->publication_status == 1)
                                        <a href="{{ route('unpublished-joke', ['id'=>$joke->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-joke', ['id'=>$joke->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td class="bg-success">
                                    <a href="" id="{{ $joke->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteJokeForm'+'{{ $joke->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteJokeForm{{ $joke->id }}" action="{{ route('delete-joke') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $joke->id }}" name="id"/>
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
