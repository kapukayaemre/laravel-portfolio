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
                        <h2 class="card-title text-center">All Titles</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.typer-title.create') }}" class="btn btn-success btn-style-light"><i class="material-icons">add</i> &nbsp; Yeni</a>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
