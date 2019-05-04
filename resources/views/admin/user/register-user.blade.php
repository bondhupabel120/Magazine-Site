@extends('admin.master')

@section('title')
    Registered Uses
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 50px">
            <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registered User
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>

                                <td class="bg-success">
                                    <a href="" id="{{ $user->id }}" class="text-danger delete-btn" onclick="
                                            event.preventDefault();
                                            var check = confirm('Are you sure to delete this??');
                                            if(check){
                                            document.getElementById('deleteUserForm'+'{{ $user->id }}').submit();
                                            }
                                            ">Delete</a>

                                    <form id="deleteUserForm{{ $user->id }}" action="{{ route('delete-user') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="id"/>
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
