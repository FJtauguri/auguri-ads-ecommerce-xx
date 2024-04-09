@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
            <a href="{{ url('admin/category') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-back fa-sm text-white-50"></i>
                <   Back
            </a>
        </div>

        {{-- Content row --}}
        <div class="row">
            <div class="col-xl-12 col-lg-12">
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
                        <form method="post" action="{{ route('admin/category/see') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="item">Item</label>
                                    <input type="text" name="item" id="item" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" id="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <hr class="sidebar-divider mt-5">

                            <div class="mb-3">
                                <p class="h5">
                                    SEO
                                </p>
                            </div>

                            <div class="card-body mb-3 seo">
                                <div class="mb-3">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea type="text" name="meta_description" id="meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                            {{-- buttons --}}
                            <div class="row d-flex justify-content-end">
                                <div class="mb3 col-1 col-sm-2 col-md-2">
                                    <button type="submit" class="btn-sm form-control btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
