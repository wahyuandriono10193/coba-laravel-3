@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration form</h1>
            <form action="/register" method="post">
              @csrf
              {{-- name --}}
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" name = "name" required value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                @error('name') 
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              {{-- username --}}
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="user name" name = "username" required value="{{ old('username') }}">
                <label for="floatingInput">User Name</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>   
              {{-- email --}}
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="email@example.com" name ="email" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')   
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              {{-- password --}}
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                <label for="floatingPassword">Password</label>
                @error('password')    
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">All ready registered? <a href="/login">Login</a></small>
          </main> 
    </div>
</div>
@endsection