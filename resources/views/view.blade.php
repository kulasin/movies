@include('inc/header')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('home') }}">All movies</a></li>
              <li class="breadcrumb-item active">{{ $movie->title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Information about {{ $movie->title }}</div>

                <div class="card-body">
                <form action="{{ route('view', $movie->id, Auth::user()->id) }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $movie->title }}" disabled>
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
            <option>{{ $movie->genre }}</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" disabled>{{ $movie->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="text" class="form-control" id="title" name="rating" placeholder="Enter title" value="{{ $movie->rating }}" disabled>
    </div>

    
</form>

@auth
    @if (auth()->user()->movies->contains($movie->id))
        <form action="{{ route('unfollow', $movie) }}" method="POST">
            @csrf
            <a class="btn btn-danger"><i class="fa fa-heart"></i> Following</a>
            <button type="submit"  class="btn btn-outline-danger">Unfollow</button>
        </form>
    @else
    <form action="{{ route('follow', $movie) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Follow this movie</button>
        </form>
    @endif
@endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('inc/footer')


