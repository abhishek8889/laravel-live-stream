@extends('front_layout.master')
@section('content')
test 
<div class="container border card " style="margin-top:100px;">
@if(isset(auth()->user()->name))
    <div style="padding:50px;">
    {{  "welcome ".auth()->user()->name }}
    </div>
    <a href="{{ route('logout') }}" class="btn btn-secondary">Logout</a>
@else
    {{ "login" }}
    <a href="{{ route('login') }}"> Go for login -> </a>
@endif
</div>
@endsection