@extends('admin.master')

@section('title')
    Manage Comment
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Comment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>News Title</th>
                            <th>Visitor Name</th>
                            <th>Comment</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($comments as $comment)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $comment->news_title }}</td>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($comment->publication_status == 1)
                                        <a href="{{ route('unpublished-comment', ['id'=>$comment->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-comment', ['id'=>$comment->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td class="bg-success">
                                    <a href="" id="{{ $comment->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteCommentForm'+'{{ $comment->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteCommentForm{{ $comment->id }}" action="{{ route('delete-comment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $comment->id }}" name="id"/>
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
