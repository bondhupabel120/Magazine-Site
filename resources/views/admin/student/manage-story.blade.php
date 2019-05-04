@extends('admin.master')

@section('title')
    Manage Story
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
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($stories as $story)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $story->name }}</td>
                                <td>{{ $story->department }}</td>
                                <td>{{ $story->student_id }}</td>
                                <td><img src="{{ asset($story->image) }}" alt="" style="height: 80px;width: 100px;" class="rounded img-fluid"></td>
                                <td>{{ $story->heading }}</td>
                                <td>{{ $story->description }}</td>
                                <td>{{ $story->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($story->publication_status == 1)
                                        <a href="{{ route('unpublished-story', ['id'=>$story->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-story', ['id'=>$story->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td class="bg-success">
                                    <a href="" id="{{ $story->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteJokeForm'+'{{ $story->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteJokeForm{{ $story->id }}" action="{{ route('delete-story') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $story->id }}" name="id"/>
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
