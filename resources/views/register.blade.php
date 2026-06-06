@extends('template.main')
@section('content')
@if($errors->any())
 
    @foreach($errors->all() as $error)
         <div class="alert-danger">{{$error}}</div>
    @endforeach

@endif

<div class="container box mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4">Request Form</h2>

           
            <form method="POST" action="{{route('user.submit')}}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middleName" class="form-control" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>


                <div class="mb-3">
                    <label class="form-label">User Types</label>
                <select class="form-select" aria-label="Default select example" name="userType" class="form-select mt-3">
                        <option value="" selected>Select User Type</option>
                    @foreach($user_types ?? [] as $user_type)
                        <option value="{{$user_type->id}}">{{$user_type->display_name}}</option>
                    @endforeach
                </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>

        </div>
    </div>
</div>

<br>
<br>
<br>

    <div class="tables">
        <table class="table table-hover">
            <thead class="table-danger">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email Type</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->lname . ', ' . $user->fname . ' '. $user->mname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        @if($user->user_type == 'Administrator' || $user->user_type == 'Super Admin')
                            <a href="{{ route('formEdit', $user->id) }}" class="bi bi-pencil-square">Edit</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('title','Request Form')
