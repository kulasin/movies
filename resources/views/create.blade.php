@include('inc/header')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add new movie</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Add new movie</li>
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
            <div class="card-header">Add information about movie</div>

                <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Crime">Crime</option>
            <option value="Action">Action</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
    </div>

    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="number" class="form-control" id="rating" name="rating" min="0" max="10" step="0.1" placeholder="Enter rating">
    </div>

    <button type="submit" class="btn btn-outline-info"><i class="fa fa-save"></i> Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('inc/footer')


