@extends('layouts.main')

@section('container')
<div class="row justify-content-center pt-5">
  <div class="col-lg-5">
    <main class="form-registration mt-2">
      <h1 class="h3 mb-4 font-weight-bolder fs-2 text-center text-primary">Create Account</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already have an account? <a href="/login" class="text-secondary text-decoration-none">Login</a></small>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2021–2022</p>
    </main>
  </div>
</div>
@endsection