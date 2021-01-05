@extends('employees.layout')
@section('content')
<div class="wrapperdiv">
    @if($employee)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card" style="width: 20rem;">
        <img src="{{ asset('uploads/'.$employee->poster ) }}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">{{ $employee->ename }}</h5>
        <p class="card-text">{{ $employee->email }} | {{ $employee->epass }}</p>
        </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
    @endif
</div>
@endsection