@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <form id="postForm" class="form" action="{{ route('freebie.create') }}" method="POST" enctype="multipart/form-data" onsubmit="return checkPost()">
                    @csrf
                    <div class="card-body">
                        <div class="mb-15">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Name:</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Please input name" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Category:</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <select class="form-control selectpicker" name="category" required autofocus>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>    
                                            @endforeach
                                        @else
                                            <option value="">No Category</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Link:</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Please input link" name="link" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Image:</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <!-- Upload image input-->
                                    <div class="input-group mb-3 px-2 py-2 bg-white shadow-sm">
                                        <input id="upload" type="file" class="form-control border-0" name="image" accept=".jpg, .jpeg, .png" required autofocus>
                                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose File</label>
                                        <div class="input-group-append">
                                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                                <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                                <small class="text-uppercase font-weight-bold text-muted">Choose</small></label>
                                        </div>
                                    </div>

                                    <!-- Uploaded image area-->
                                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Description:</label>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <textarea class="form-control ckeditor" name="content" id="content"></textarea>
                                    <span class="err-msg mt-2 text-danger">Please input the description.</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            
            </div>
            
        </div>
    </div>
</div>
@endsection
