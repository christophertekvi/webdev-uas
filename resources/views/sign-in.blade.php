@extends('layouts.blmMasuk')

@section('isiWeb')
@if (session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('LoginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">

        </button>
    </div>
@endif
<link rel="stylesheet" href="css/Sign-In.css" />
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
    <div style="margin-top: 75px">
      <div class="masuk">
        <h1>Sign In</h1>
      </div>
    </div>
<form action="/home-sign-in" method="post">
    @csrf
    <div class="container">
      <div class="containercontroller">

            <div class="email">
                <h2 style="font-size: large;">E-mail :</h2>
                <input type="email" name="email" class="@error('email') is-invalid @enderror"autofocus required value="{{ old('email') }}"/>
                @error('email')
                    <div class="invalid-feedback" style="padding-bottom : 10px">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="password" style="margin-top: 10px">
                <h2 style="font-size: large;">Password :</h2>
                <input type="password" name="password" required/>
              </div>

      </div>
    </div>
    <div class="container2">
      <div class="buttonmasuk">
        <button type="submit">Sign In</button>
      </div>
    </div>
</form>
    <div class="ke-signup">
      <a
        href="/sign-up"
        style="
          font-family: 'Outfit', sans-serif;
          color: black;
          font-size: smaller;
        "
        >Don't have an account?</a
      >
    </div>
@endsection
