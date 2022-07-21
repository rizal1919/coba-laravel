@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center" style='height: 500px;'>
        <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
        <form>
            
            <h1 class="h3 mb-4 fw-normal text-center"><i class="fa-brands fa-bilibili mx-2"></i>Please login</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            
        </form>
        <p class="text-center mt-2">Not Registered? <a href="/register">Sign Up</a></p>
        </main>
        </div>
    </div>
@endsection