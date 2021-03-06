@extends('movies.layout')

@section('content')

<div class="wrapperdiv">
    <div class="formcontainer">

      @if ($errors->any())

      <div class="alert alert-danger">
          <strong>Oops! You have not filled all the inputs.</strong>
          <ul>
              @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

              @endforeach
          </ul>
      </div>

      @endif

    <form action="{{ route( 'movies.update', $movie->id ) }}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')

       <div class="form-group">
        <label for="title"> <b>Title</b></label>
        <input type="text" class="form-control" name="title" id="title">
      </div>

      <div class="form-group">
        <label for="genre"> <b>Genre</b></label>
        <div class="col-sm-20">
            <select name="genre" id="genre" class="form-control">
                <option value="">Select Genre</option>
                @if ($genres)

                @foreach ($genres as $genre)

                <option value="{{($genre)}}">{{($genre)}}</option>

                @endforeach

                @endif



            </select>

        </div>
      </div>

      <div class="form-group">
        <label for="release_year"> <b>Release Year</b></label>
        <input type="text" class="form-control" name="release_year" id="release_year">
      </div>


      <div class="form-group">
        <label for="poster"> <b>Poster</b></label>
        <input type="file" class="form-control-file" name="poster" id="poster">
      </div>

      <div class="form-group">
        <button class="btn btn-primary" id="submit" type="submit" name="submit">Add Movie</button>
      </div>




    </form>
    </div>
</div>

@endsection