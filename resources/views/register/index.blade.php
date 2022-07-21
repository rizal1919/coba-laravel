@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center" style='height: 500px;'>
        <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
        <form>
            
            <h1 class="h3 mb-4 fw-normal text-center"><i class="fa-brands fa-bilibili mx-2"></i>Registration Form</h1>
            <div class="form-floating">
                <input type="text" name="name" autocomplete="off" class="form-control rounded-top" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="username" autocomplete="off" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" autocomplete="off" class="form-control" id="email" placeholder="email@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" autocomplete="off" class="form-control rounded-bottom" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign up</button>
            
        </form>
        <p class="text-center mt-2">Already Registered? <a href="/login">Sign In</a></p>
        </main>
        </div>
    </div>
@endsection