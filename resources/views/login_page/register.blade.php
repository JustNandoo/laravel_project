<!-- register.blade.php -->
@extends("layouts.main")

@section('content')

<div class="d-flex align-items-center justify-content-center py-4 w-50 m-auto">
    <main class="form-signin w-100 m-auto bg-light p-4 rounded shadow">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-center mb-4">
            <h1 class="h3 mb-3 fw-normal">Register Your Account</h1>
        </div>

        <form method="POST" action="register/store">
            @csrf

            <!-- Form Inputs -->
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control form-control-lg" id="floatingName" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control form-control-lg" id="floatingEmail" placeholder="Email">
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>

            <!-- Register Button -->
            <button class="btn btn-primary w-100 py-2" type="submit">Register Account</button>

            <!-- Login Link -->
            <p class="mt-4 text-center">
                Already have an account? <a href="/login" class="text-decoration-none">Login</a>
            </p>
        </form>
    </main>
</div>

@endsection
