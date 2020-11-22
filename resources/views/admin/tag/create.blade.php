@extends('layouts.admin')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Tag</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Tag List</a></li>
          <li class="breadcrumb-item active">Create Tag</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center justify-content-between">
                      <h3 class="card-title">Create Tag</h3>
                      <a href="{{ route('tag.index') }}" class="btn btn-primary">Go Back to tag List</a>
                  </div>
                </div>
                <div class="card-body p-0">
                   <div class="row">
                       <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <form action="{{ route('tag.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @include('includes.errors')
                              <div class="form-group">
                                <label for="name">Tag Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                              </div>
                              <div class="form-group">
                                <label for="description">Tag Description</label>
                               <textarea name="description" class="form-control" id="description"></textarea>
                              </div>
                            </div>
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary btn-block">Create Tag</button>
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
