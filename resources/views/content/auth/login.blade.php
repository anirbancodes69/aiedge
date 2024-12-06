@extends('layouts.main')

@section('content')
<div class="form">
    <form action="#" method="POST" class="form">
        @csrf
        <!-- Email -->
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ex: anirban@gmail.com" class="form-control"
                required>
        </div>

        <!-- Password -->
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Ex: ******" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="">Don't have an account?</label>
                    <p><a href="{{ route('auth.register_form') }}">Register Here</a></p>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection