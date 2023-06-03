@extends('admin.layouts.layout')
@section('title')
    Hero
@endsection
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
                                    <input
                                        type="text"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        aria-describedby="solidBoderedInputExample"
                                        placeholder="Title"
                                        name="title"
                                        id="title"
                                        value="{{ old('title', $hero->title) }}"
                                    >

                                    <label for="sub_title" class="form-label m-t-sm">Subtitle</label>
                                    <textarea
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        name="sub_title"
                                        id="sub_title"
                                        cols="30"
                                        rows="5"
                                        placeholder="Subtitle"
                                        >{{ old('sub_title', $hero->sub_title) }}</textarea>

                                    <label for="button_text" class="form-label m-t-sm">Button Text</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        aria-describedby="solidBoderedInputExample"
                                        placeholder="Title"
                                        name="button_text"
                                        id="button_text"
                                        value="{{ $hero->button_text }}"
                                    >

                                    <label for="button_url" class="form-label m-t-sm">Button URL</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        aria-describedby="solidBoderedInputExample"
                                        placeholder="Title"
                                        name="button_url"
                                        id="button_url"
                                        value="{{ old('button_url', $hero->button_url) }}"
                                    >

                                    <label for="image" class="form-label m-t-sm">Background Image</label>
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control"
                                        accept="image/png, image/jpeg, image/jpg"
                                    >
                                    <div class="form-text m-b-sm"> The image size must be lower than 5mb</div>

                                    <hr>
                                    <img width="200px" id="showImage" class="rounded avatar-lg" src="{{ $hero->image ? $hero->image : url('uploads/no_image.jpg') }}">

                                    <div class="col-6 mx-auto mt-2">
                                        <button type="submit" class="btn btn-success btn-rounded btn-style-light w-100">
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
@section('js')
    {{-- Display updated images --}}
    <script>
        $(document).ready(function (){
            $('#image').change(function (e){
                let reader = new FileReader();
                reader.onload = function (e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
