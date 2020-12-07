@extends('movies.layout')

@section('content')

<div class="wrapperdiv">
    <div class="formcontainer">
    <form action="{{ route( 'movies.store' ) }}" method="POST" enctype="multipart/form-data">
       @csrf

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