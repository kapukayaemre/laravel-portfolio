@extends('admin.layouts.layout')
@section('title')
    Hizmetler
@endsection
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Hizmet Düzenle</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="submitForm">
                            @csrf
                            <p class="card-description text-center">Buradan yeni bir hizmet ekleyebilirsiniz.</p>
                            <div class="example-container">
                                <div class="example-content">
                                    <label for="name" class="form-label m-t-sm">Hizmet Adı</label>
                                    <input
                                        type="text"
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        aria-describedby="solidBoderedInputExample"
                                        placeholder="Hizmet Adı"
                                        name="name"
                                        id="name"
                                        value="{{ old('name', $service->name) }}"
                                    >

                                    <label for="title" class="form-label m-t-sm">Hizmet Açıklaması</label>
                                    <textarea
                                        class="form-control form-control-solid-bordered m-b-sm"
                                        name="description"
                                        id="description"
                                        cols="30"
                                        rows="10">{{ $service->description }}</textarea>


                                    <div class="col-6 mx-auto mt-2">
                                        <button type="submit" class="btn btn-success btn-rounded btn-style-light w-100">
                                            Güncelle
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>


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
                                        <p class="text-center">Mevcut Butonları Kullanarak Sonraki İşleminizi Gerçekleştirebilirsiniz </p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <a href="" class="btn btn-success btn-style-light btn-lg" data-bs-dismiss="modal"><i class="material-icons">add</i>Yeni Ekle</a>
                                        <a href="{{ route('admin.service.index') }}" class="btn btn-primary btn-style-light btn-lg"><i class="material-icons">list</i>Listeye Git</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- Display updated images --}}
    <script>

        let name = $("#name");
        let description = $("#description");

        $(document).ready(function (){

            $("#submitForm").submit(function (event) {
                event.preventDefault();

                if(name.val() === "" || name.val() === null)
                {
                    iziToast.destroy();

                    iziToast.warning({
                        titleColor: 'red',
                        messageColor: 'black',
                        messageSize : '20px',
                        titleSize: '20px',
                        title: 'Uyarı',
                        message: 'Hizmet Adı Alanı Doldurulmalıdır',
                        position: 'topCenter',

                    });
                }
                else if(description.val() === "" || description.val() === null)
                {
                    iziToast.destroy();

                    iziToast.warning({
                        titleColor: 'red',
                        messageColor: 'black',
                        messageSize : '20px',
                        titleSize: '20px',
                        title: 'Uyarı',
                        message: 'Hizmet Açıklaması Alanı Doldurulmalıdır',
                        position: 'topCenter',

                    });
                }
                else
                {
                    $.ajax({
                        type: 'POST',
                        method: 'PUT',
                        url: '{{ route("admin.service.update", $service->id) }}',
                        data: $('#submitForm').serialize(),
                        success: function (response) {
                            /** Controller tarafından dönen response a göre alert tetiklenir */
                            if(response.status === "success") {
                                iziToast.success({
                                    titleColor: 'Green',
                                    messageColor: 'black',
                                    messageSize : '20px',
                                    titleSize: '20px',
                                    title: 'Başarılı',
                                    message: 'Güncelleme İşlemi Başarılı',
                                    position: 'topCenter',
                                });

                                $("#triggerModal").click();
                                clearInputs();
                            }
                            else {
                                iziToast.warning({
                                    titleColor: 'red',
                                    messageColor: 'black',
                                    messageSize : '20px',
                                    titleSize: '20px',
                                    title: 'Uyarı',
                                    message: 'İşlem Başarısız Sonuçlandı',
                                    position: 'topCenter',
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log('Hata oluştu. Status kodu: ' + xhr.status);
                        }
                    });
                }
            })
        });

        /** Inputları boşaltan fonksiyon */
        function clearInputs() {
            $("input:not([type='radio'])").val("");
        }
    </script>
@endsection
