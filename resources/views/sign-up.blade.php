@extends('layouts.main')
<link rel="stylesheet" href="css/Sign-Up.css" />
<link rel="stylesheet" href="css/template.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('isiWeb')
@if (session()->has('SignUpError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('SignUpError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">

        </button>
    </div>
@endif
    <div
      class="masuk"
      style="
        width: 300px;
        margin: auto;
        font-family: 'Outfit', sans-serif;
        font-size: large;
        margin-top: 50px;
        margin-bottom: 25px;
        text-align: center;
      "
    >
      <h1>Sign Up</h1>
    </div>
    <div class="container1">
        <form action="/sign-up" method="post">
            @csrf
            <div class="controlcontainer1">
                <div class="controlnamadepanbelakang">
                  <div class="namadepan">
                    <h1 style="font-size: medium;">First Name :</h1>
                    <input type="text" name="firstname" placeholder="First Name" class="form-control @error('firstname') is-invalid @enderror" required value="{{ old('firstname') }}">
                    @error('firstname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="namabelakang">
                    <h1 style="font-size: medium;">Last Name :</h1>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control @error('lastname') is-invalid @enderror" required value="{{ old('lastname') }}">
                    @error('lastname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="datainputsignup">
                  <h1 style="font-size: medium;">E-mail :</h1>
                  <input type="email" name="email" placeholder="e.x : name@gmail.com" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback" style="padding-bottom : 10px">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="datainputsignup">
                  <h1 style="font-size: medium;">Password :</h1>
                  <input type="password" placeholder="min. 5 characters" name="password" id="inputPassword5" class="form-control @error('password') is-invalid @enderror" required aria-describedby="passwordHelpBlock">
                  @error('password')
                    <div class="invalid-feedback" style="padding-bottom : 10px">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="datainputsignup">
                  <h1 style="font-size: medium;">Re-enter Password :</h1>
                  <input type="password" placeholder="min. 5 characters" name="reenterpassword" id="inputPassword6" class="form-control @error('reenterpassword') is-invalid @enderror" required>
                  @error('reenterpassword')
                    <div class="invalid-feedback" style="padding-bottom : 10px">
                        {{ $message }}
                    </div>
                @enderror
                </div>
              </div>
              <div class="buttoncontrol" style="padding-top:40px">
                <button type="submit">Sign Up!</button>
              </div>
        </form>


      <div class="ke-signin">
        <a
          href="/sign-in"
          style="
            font-family: 'Outfit', sans-serif;
            color: black;
            font-size: x-small;
          "
          >Already have an account?</a
        >
      </div>
    </div>
@endsection

