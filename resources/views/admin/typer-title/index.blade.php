@extends('admin.layouts.layout')
@section('title')
    Typer Title
@endsection
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Tüm Başlıklar</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.typer-title.create') }}" class="btn btn-success btn-style-light"><i class="material-icons">add</i> &nbsp; Yeni</a>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ $dataTable->table() }}
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h3 class="text-center mt-4">Silme İşlemi Başarılı</h3><br>
                    <p class="text-center">Mevcut Butonları Kullanarak Sonraki İşleminizi Gerçekleştirebilirsiniz</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <a href="{{ route('admin.typer-title.index') }}" class="btn btn-success btn-style-light btn-lg"><i class="material-icons">list</i>Listeye Dön</a>
                    <a href="{{ route('admin.typer-title.create') }}" class="btn btn-primary btn-style-light btn-lg"><i class="material-icons">add</i>Yeni Ekle</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
