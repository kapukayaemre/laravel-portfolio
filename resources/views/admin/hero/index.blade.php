@extends('admin.layouts.layout')
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Hero Section</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <p class="card-description text-center">You can manage hero section on this page</p>
                            <div class="example-container">
                                <div class="example-content">
                                    <label for="title" class="form-label m-t-sm">Title</label>
                                    <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" placeholder="Title" name="title" id="title">

                                    <label for="sub_title" class="form-label m-t-sm">Subtitle</label>
                                    <textarea class="form-control form-control-solid-bordered m-b-sm" name="sub_title" id="sub_title" cols="30" rows="5" placeholder="Subtitle" style="resize: none"></textarea>

                                    <label for="button_text" class="form-label m-t-sm">Button Text</label>
                                    <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" placeholder="Title" name="button_text" id="button_text">

                                    <label for="button_url" class="form-label m-t-sm">Button URL</label>
                                    <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" placeholder="Title" name="button_url" id="button_url">

                                    <label for="image" class="form-label m-t-sm">Background Image</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg, image/jpg">
                                    <div class="form-text m-b-sm"> The image size must be lower than 5mb</div>


                                    <div class="col-6 mx-auto mt-2">
                                        <button type="submit" class="btn btn-success btn-rounded w-100">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
