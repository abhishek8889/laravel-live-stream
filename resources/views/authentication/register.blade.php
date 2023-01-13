@extends('front_layout.master')
@section('content')
<div style="margin-top:100px;">
<div class="col-lg-6 m-auto">
<form action="registerProc" method="POST">
  @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" class="form-control" name="name"/>
    <label class="form-label" for="form2Example2" >Name</label>
    @error('name')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email"/>
    <label class="form-label" for="form2Example1">Email address</label>
    @error('email')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
    @error('password')
    <div class="text text-danger">{{ $message }}</div>
    @enderror
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

</form>
</div>
</div>
@endsection