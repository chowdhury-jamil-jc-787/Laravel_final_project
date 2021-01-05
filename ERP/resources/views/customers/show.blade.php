@extends('customers.layout')
@section('content')
<div class="wrapperdiv">
    @if($customer)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card" style="width: 20rem;">
        <img src="{{ asset('uploads/'.$customer->poster ) }}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">{{ $customer->cname }}</h5>
        <p class="card-text">{{ $customer->cemail }} | {{ $customer->cpass }}</p>
        </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
    @endif
</div>
@endsection