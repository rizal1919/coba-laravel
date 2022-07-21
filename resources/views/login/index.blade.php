@extends('layouts.main')

@section('container')
        @if( session('success') )
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
            <div class="alert alert-dismissable alert-success">
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('success') }}</strong> User account has been successfully saved and please login.
            </div>
            <!-- <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    Oke Aja !!
                </strong>
            </div> -->
        <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Saved Failed!</strong> User account unsuccessfully saved.
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->

        @endif
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
        <p class="text-center mt-3">Not Registered? <a href="/register" class="text-decoration-none">Sign Up</a></p>
        </main>
        </div>
    </div>
@endsection