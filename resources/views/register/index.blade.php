@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center" style='height: 500px;'>
        <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
        <form action="/register" method="POST">
            @csrf
            <h1 class="h3 mb-4 fw-normal text-center"><i class="fa-brands fa-bilibili mx-2"></i>Registration Form</h1>
            <div class="form-floating">
                <input type="text" name="name" class="@error('name') is-invalid @enderror form-control rounded-top" id="name" value="{{ old('name') }}" placeholder="name" required>
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="@error('username') is-invalid @enderror form-control" id="username" placeholder="username" value="{{ old('username') }}" required>
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="email" placeholder="email@example.com" value="{{ old('email') }}"  required>
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" id="myInput" name="password" autocomplete="off" class="@error('password') is-invalid @enderror form-control rounded-bottom" id="password" placeholder="password" required>
                <label for="password">Password</label>
                <div class="my-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                    <label class="form-check-label" for="exampleCheck1">Show password</label>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign up</button>
            
        </form>
        <p class="text-center mt-3">Already Registered? <a class="text-decoration-none" href="/login">Sign In</a></p>
        </main>
        </div>
    </div>
@endsection
@push('js')
<script>
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>
@endpush