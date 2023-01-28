@extends('layouts.app')

@section('title', 'Login Page')

@section('content')

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">

            {{-- error show --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger ">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif --}}

            <br />
            <h1>Registration  Form</h1>
            <br />
            <form action="{{ route('register') }}" method="post">
                @csrf
                <!-- Email input -->

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Name</label>
                    <input type="text" name="name" id="form2Example1" class="form-control" value="{{ old('name') }}" />

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" id="form2Example1" class="form-control" />

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input name="password" type="password" value="{{ old('password') }}" id="form2Example2" class="form-control" />

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Confirm Password</label>
                    <input name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" id="form2Example2" class="form-control" />

                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>



                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="{{ route('login') }}">Login</a></p>
                    <div>
                        <a class="btn btn-primary" href="{{ route('home') }}">Go Website</a>
                    </div>




                </div>
            </form>
        </div>

    </div>

@endsection
