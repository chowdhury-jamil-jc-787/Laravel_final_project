@extends('customers.layout')
@section('content')
<div class="wrapperdiv">

@if($messge = Session::get('success'))
<div class="alert alert-success text-center">{{ $messge }}</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @if($movies)
  <tbody>
      @foreach($movies as $movie)
    <tr>
      <td class="align-middle"><img src="{{ asset('uploads/'.$movie->poster ) }} " class="img-thumbnail" /></td>
      <td class="align-middle">{{ $movie->cname }}</td>
      <td class="align-middle">{{ $movie->cemail }}</td>
      <td class="align-middle">{{ $movie->cpass }}</td>
      <td class="align-middle">
        <form action="{{ route('customers.destroy', $movie->id) }}" method="post">
        <a href="{{ route('customers.show', $movie->id)}} " class="btn btn-info">Show</a>
        <a href="{{ route('customers.edit', $movie->id)}}" class="btn btn-primary">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
  @endif
</table>
<div class="d-flex">
    <div class="mx-auto">
        {!! $movies->links() !!}
    </div>
</div>
</div>
@endsection