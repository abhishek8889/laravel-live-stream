@extends('front_layout.master')
@section('content')

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

<div class="container card"> 
    <div class="p-5">
        <h3> card details</h3> 
        <div class="pt-5" id="card-element"></div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_PUB_KEY') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');
</script>
@endsection