@extends('layouts.admin')

@section('content')

    <div class="container-fluid" style="height: 70vh; background-color: #fff!important;">

        @if(session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
            <a href="{{ url('admin/category') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-back fa-sm text-white-50"></i>
                <   Back
            </a>
        </div>

        {{-- Content row --}}
        <div class="row container d-flex align-items-center align-content-center justify-content-center w-100">
            <div class="col-xl-8 col-lg-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ url('admin/category/create') }}" method="post" enctype="multipart/form-data" class="d-flex row col-12">
                            @csrf

                            <div class="mb-3 col-4">
                                <label for="productcategory">Product Category</label>
                                <input type="text" name="productcategory" id="productcategory" class="form-control"></input>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control"></input>
                            </div>
                            <div class="mb-3 col-4 d-flex flex-wrap align-content-end">
                                <button type="submit" class="btn-sm form-control btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container-fluid ">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Image</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach ($data as $data)
                          <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->product_category }}</td>
                            <td><img src="{{ asset($data->image) }}" alt="Product Image" style="height: 50px;">
                            </td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                <a onclick="return confirm('Delete the Data')" class="btn btn-danger" href="{{ url('admin/category/create',$data->id) }}">Delete</a>
                                <a class="btn btn-warning" href="{{ url('admin/category/edit',$data->id) }}">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </div>

@endsection
