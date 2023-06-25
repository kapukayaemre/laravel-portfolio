@extends('admin.layouts.layout')
@section('title')
    About
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset("assets/plugins/summernote/summernote-lite.min.css") }}">
@endsection
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Hakkımda Bölümü</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.about.update', 1) }}" method="POST" enctype="multipart/form-data" id="submitForm" class="row g-3 needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <p class="card-description text-center">Bu sayfada hakkımızda bölümünün bilgileri yer almaktadır.</p>
                            <div class="example-container">
                                <div class="example-content">
                                    <label for="title" class="form-label m-t-sm">Başlık</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        aria-describedby="solidBoderedInputExample"
                                        placeholder="Başlık"
                                        name="title"
                                        id="title"
                                        value="{{ old('title', $about->title) }}"
                                        required
                                    >
                                    <div class="valid-feedback">
                                        @if($errors->any())
                                            {{ $errors->first('title') }}
                                        @endif
                                    </div>

                                    <label for="summernote" class="form-label m-t-sm">İçerik</label>
                                    <textarea name="description" id="summernote" class="form-control form-control-solid-bordered m-b-sm descriptionField" required>{!! $about->description !!}</textarea>

                                    <label for="image" class="form-label m-t-sm">Resim</label>
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        accept="image/png, image/jpeg, image/jpg"
                                    >

                                    <img width="200px" id="showImage" class="rounded avatar-lg" src="{{ $about->image ?? url('uploads/no_image.jpg') }}">

                                    <label for="resume" class="form-label m-t-sm"></label>
                                    @if($about->resume)
                                        <div>
                                            <i class="material-icons" style="font-size: 50px">task</i>
                                        </div>
                                    @endif

                                    <label for="resume" class="form-label">CV Dosyası (PDF,Word,Excel)</label>
                                    <input
                                        type="file"
                                        name="resume"
                                        id="resume"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        accept="application/pdf, application/msword, text/plain"
                                    >

                                    <div class="col-6 mx-auto mt-2">
                                        <button type="submit" class="btn btn-success btn-rounded btn-style-light w-100">
                                            Güncelle
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal" id="triggerModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img width="200px" src="{{ asset('assets/images/icons/success.png') }}" alt="success"><br>
                    </div>
                    <h3 class="text-center mt-4">İşlem Başarılı</h3><br>
                    <p class="text-center">Mevcut Butonları Kullanarak Sonraki İşleminizi Gerçekleştirebilirsiniz</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <a href="{{ route('admin.about.index') }}" class="btn btn-success btn-style-light btn-lg"><i class="material-icons">list</i>Mevcutu Görüntüle</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-style-light btn-lg"><i class="material-icons">home</i>Anasayfa Dön</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/text-editor.js') }}"></script>


    {{-- Display updated images --}}
    <script>

        let title = $("#title");
        let description = $(".descriptionField");


        $(document).ready(function (){
            /*** uploaded image preview */
            $('#image').change(function (e){
                let reader = new FileReader();
                reader.onload = function (e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#submitForm").submit(function(event) {
                event.preventDefault();

                if (title.val() === "" || title.val() === null) {
                    iziToast.destroy();

                    iziToast.warning({
                        titleColor: 'red',
                        messageColor: 'black',
                        messageSize: '20px',
                        titleSize: '20px',
                        title: 'Uyarı',
                        message: 'Başlık Alanı Doldurulmalıdır',
                        position: 'topCenter',
                    });
                } else if (description.val() === "" || description.val() === null) {
                    iziToast.destroy();

                    iziToast.warning({
                        titleColor: 'red',
                        messageColor: 'black',
                        messageSize: '20px',
                        titleSize: '20px',
                        title: 'Uyarı',
                        message: 'İçerik Alanı Doldurulmalıdır',
                        position: 'topCenter',
                    });
                } else {
                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: '{{ route("admin.about.update", 1) }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            /** Controller tarafından dönen response a göre alert tetiklenir */
                            if (response.status === "success") {
                                iziToast.success({
                                    titleColor: 'Green',
                                    messageColor: 'black',
                                    messageSize: '20px',
                                    titleSize: '20px',
                                    title: 'Başarılı',
                                    message: 'Güncelleme İşlemi Başarılı',
                                    position: 'topCenter',
                                });

                                $("#triggerModal").click();
                                clearInputs();
                            } else {
                                iziToast.warning({
                                    titleColor: 'red',
                                    messageColor: 'black',
                                    messageSize: '20px',
                                    titleSize: '20px',
                                    title: 'Uyarı',
                                    message: 'İşlem Başarısız Sonuçlandı',
                                    position: 'topCenter',
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log('Hata oluştu. Status kodu: ' + xhr.status);
                        }
                    });
                }
            });


            /** Inputları boşaltan fonksiyon */
            function clearInputs() {
                $("input:not([type='radio'])").val("");
                $("#summernote").val("");
            }

        });
    </script>
@endsection
