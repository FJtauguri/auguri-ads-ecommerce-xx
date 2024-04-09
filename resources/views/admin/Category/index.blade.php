@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
            <a href="{{ url('admin/category/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Add Category
            </a>
        </div>

        {{-- Content row --}}
        <div class="row">
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
                                <a onclick="return confirm('Delete the Data')" class="btn btn-danger"
                                    href="{{ url('admin/category/index', $data->id) }}">Delete</a>
                                <a class="btn btn-warning" href="{{ url('admin/category/edit', $data->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
