@extends('layouts.AdminApp')

@section('content')

@if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    
@endif
@if (session('primary'))
      <div class="alert alert-primary">{{ session('primary') }}</div>
    
@endif
@if (session('danger'))
      <div class="alert alert-danger">{{ session('danger') }}</div>
    
@endif

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
  </h4>
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Basic
      <a href="{{ url('/admin/students/create') }}" class="btn rounded-pill btn-primary float-end">
        <i class="bx bx-list-plus"></i>Add Student</a>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">

            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Rollno</th>
            <th>Std</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $stu)
        <tr>

             <th scope="row">{{ $stu->id }}</th>
             <td><img src="{{ asset('/students/photo/'.$stu->photo)}}" width="50px" height="50px"></img></td>
             <td>{{ $stu->name }}</td>
             <td>{{ $stu->rollno }}</td>
             <td>{{ $stu->std }}</td>
             <td>{{ $stu->email }}</td>
             <td>{{ $stu->mobile }}</td>
             <td>
                 <a href="/admin/students/update/{{ $stu->id }}" class="btn btn-sm btn-primary text-white">Update</a>
                 <a href="/admin/students/delete/{{ $stu->id }}" class="btn btn-sm btn-danger text-white">Delete</a>
             </td>
        </tr>    
        @endforeach
            
        </tbody>
        
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
    
@endsection