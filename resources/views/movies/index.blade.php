@extends('movies.layout')

@section('content')

<div class="wrapperdiv">

  @if ($message = Session::get('success'))


  <div class="alert alert-success text-center">

    {{ $message }}

  </div>

  @endif
  
<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Release Year</th>
      </tr>
    </thead>
    @if ($movies)
    <tbody>
      @foreach ($movies as $movie)
      <tr>
      <td class="align-middle"> <img src="{{ asset('uploads/'.$movie->poster) }}" class="img-thumbnail"> </td>
      <td class="align-middle"> {{ $movie->title }} </td>
      <td class="align-middle">{{ $movie->genre }}</td>
      <td class="align-middle">{{ $movie->release_year }}</td>
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