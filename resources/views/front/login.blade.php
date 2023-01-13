@extends('front_layout.master')
@section('content')
<div class="card p-5">
    <form action="login" method="POST">
        @csrf
        <label for="">Name</label> <br>
        <input type="text" name="name">
        <br>
        <label for="">Email</label><br>
        <input type="text" name="email">
        <br>
        <label for="">Password</label><br>
        <input type="text" name="password">
        <input type="submit" value="register">
    </form>
    </div>
@endsection