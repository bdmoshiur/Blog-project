@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Category</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category List</a></li>
          <li class="breadcrumb-item active">Update Category</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center justify-content-between">
                      <h3 class="card-title">Update Category - {{ $category->name }}</h3>
                      <a href="{{ route('category.create',) }}" class="btn btn-primary">Go Back to Category List</a>
                  </div>
                </div>
                <div class="card-body p-0">
                   <div class="row">
                       <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <form action="{{ route('category.update',[$category->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                @include('includes.errors')
                              <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                               <textarea name="description" class="form-control" id="description">{{ $category->description }}</textarea>
                              </div>
                            </div>
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary btn-block">Update Category</button>
                            </div>
                          </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>



@endsection
