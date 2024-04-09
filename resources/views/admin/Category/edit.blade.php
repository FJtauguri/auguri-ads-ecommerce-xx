@extends('layouts.admin')

@section('content')

    <div class="container-fluid d-flex align-items-center" style="height: 70vh; background-color: #fff!important;">
        <div class="container d-flex justify-content-center align-content-center align-items-center">
            <div class="container w-50 h-100 p-3 border">
                <form action="{{ route('admin.category.update' , $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="productcategory">Product Category</label>
                            <input type="text" name="productcategory" id="productcategory" class="form-control" value="{{ $data->product_category }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="{{ $data->image }}">
                        </div>
                        <div class="col-12 mb-3 mt-5 d-flex flex-end">
                            <button type="submit" class="btn-sm form-control btn-primary">Save</button>
                        </div>
                        <div class="col-12 mb-3 d-flex flex-end align-content-center justify-content-center align-items-center text-center">
                            <a href="{{ url('admin/category/create') }}" class="btn-sm form-control btn-danger">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
