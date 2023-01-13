@extends('front_layout.master')
@section('content')

    <div>
        @foreach($auther as $a)
            <li> {{ $a->name }} </li>
            <li> {{ $a->email }} </li>
        @endforeach
    </div>
    {{ route('authors.create') }}
@endsection