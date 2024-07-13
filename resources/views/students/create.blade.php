@extends('layouts.AdminApp')

@section('content')

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Student Table</h5> <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="photo">Photo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*" />
                </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" />
              </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="rollno">Roll-no</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter your Roll-no" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="std">STD</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="std" name="std" placeholder="Enter your Standard" />
                </div>
            </div>
           
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="email">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="mobile">Mobile</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile" />
                </div>
            </div>
              
           
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    
@endsection