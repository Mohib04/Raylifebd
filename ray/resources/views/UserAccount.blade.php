@extends('layouts.master')

@section('bodySection')
    <div class="container">

        <form action="{{ route('UserAccount') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Lastname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>


@endsection
