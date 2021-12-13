@extends('layouts.backend')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
  <a href="products/create" class="btn btn-fill mb-3">Create new post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">User</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $admin_product)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $admin_product->name }}</td>
        <td>{{ $admin_product->price}}</td>
        <td>{{ $admin_product->category->name }}</td>
        <td>{{ $admin_product->author->name }}</td>
        <td class="text-center">
          <a href="admin-products/{{ $admin_product->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
          <form action="admin-products/{{ $admin_product->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure you want to delete this?')"><i class="bi bi-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection