@include('inc/header')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ __('Dashboard') }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">All movies</li>
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
            <div class="card-header">My followed movies</div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th></th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                    <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->rating }}</td>
                        <td style="width:160px; display:flex; text-align:center" class="project-actions text-right">

<a class="btn btn-info btn-sm" href="{{ route('view', $movie->slug) }}">
    <i class="fas fa-eye"></i> View
</a>



<form style="display:inline-block!important" action="{{ route('unfollow', $movie) }}" method="POST">
            @csrf
           
            <button type="submit"  class="btn btn-sm btn-outline-danger"><i class="fas fa-heart"></i> Unfollow</button>
        </form>
</td>
                    </tr>
                @endforeach
                
            </tbody>
           
        </table>
        <div style="text-align:right"> {{ $movies->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('inc/footer')


