@extends('layouts.main')

@section('isiWeb')
@if (session()->has('success'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
@elseif (session()->has('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
    </div>
@endif
<link rel="stylesheet" href="css/Sign-Up.css" />
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap.css" />

    {{-- @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success')}}
    </div>
@elseif(Session::has('failed'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('failed')}}
    </div>
@endif --}}

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

    <form action="/home-sign-in" method="post">
        @csrf
        <div class="container1">
            <div class="controlcontainer1">
                <div class="controlnamadepanbelakang">
                    <div class="namadepan">
                        <h1 style="font-size: medium;">First Name :</h1>
                        {{-- <input type="text" name="name" class="form-control @error('name') is-invalid
                        @enderror" autofocus required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror --}}
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                                    {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                    </div>
                    <div class="namabelakang">
                        <h1 style="font-size: medium;">Last Name :</h1>
                        <input type="text" name="lastname" value="{{ old('lastname') }}">
                    </div>
                </div>
                <div class="datainputsignup">
                    <h1 style="font-size: medium;">E-mail :</h1>
                    {{-- <input type="email" name="name" class="@error('email') is-invalid
                    @enderror" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror --}}
                    <input type="text" name="email" class="form-control" value="{{old('email')}}" />
                                    {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="datainputsignup">
                    <h1 style="font-size: medium;">Password :</h1>
                    {{-- <input type="password" name="password" class="@error('password') is-invalid
                    @enderror" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror --}}
                    <input type="password" name="password" class="form-control" value="{{old('password')}}" />
                                    {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="datainputsignup">
                    <h1 style="font-size: medium;">Re-enter Password :</h1>
                    {{-- <input type="password" name="reenter" class="@error('reenter') is-invalid
                    @enderror" required>
                    @error('reenter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror --}}
                    <input type="password" name="reenter" class="form-control" value="{{old('reenter')}}" />
                                    {!!$errors->first("reenter", "<span class='text-danger'>:message</span>")!!}
                </div>
            </div>
        <div class="buttoncontrol">
            <button>
            <a style="color: black">Sign Up</a>
            </button>
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
  </body>

   
@endsection
