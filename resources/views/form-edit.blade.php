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

            <h2 class="mb-4">Edit Form</h2>

           
            <form method="POST" action="{{route('user.submit')}}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" value="{{$user->fname}}" name="firstName" class="form-control" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Middle Name</label>
                    <input type="text" value="{{$user->mname}}" name="middleName" class="form-control" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" value="{{$user->lname}}" name="lastName" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" value="{{$user->email}}" name="email" class="form-control">
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
                    @if($user_type->id == $user->user_type_id)
                            <option value="{{$user_type->id}}" selected>{{$user_type->display_name}}</option>
                    @endif
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

@endsection

@section('title','Request Form')
