@extends('admin.master')

@section('title')
    Manage Contact
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Contact
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($contacts as $contact)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($contact->publication_status == 1)
                                        <a href="{{ route('unpublished-message', ['id'=>$contact->id]) }}">Unpublished</a>
                                    @else
                                        <a href="{{ route('published-message', ['id'=>$contact->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td class="bg-success">
                                    <a href="" id="{{ $contact->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteContactForm'+'{{ $contact->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteContactForm{{ $contact->id }}" action="{{ route('delete-contact') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $contact->id }}" name="id"/>
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
