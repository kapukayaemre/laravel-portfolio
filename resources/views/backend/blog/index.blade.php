@extends("layouts.admin")
@section("title")
    Blog İçerikler
@endsection

@section("css")
    <link href="{{ asset("assets/assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css"/>
@endsection

@section("content")
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Tüm Blog İçerikleri</h3>
            </div>
            <div class="d-flex justify-content-end py-6 px-2">
                <a href="{{ route("admin.blog.create") }}" class="btn btn-sm btn-primary">Yeni Ekle</a>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div class="card-body">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>#</th>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Kategori</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>Güncelleme Tarihi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!! isset($blog) ? '<img src="' . asset($blog->image) . '" alt="" height="50">' : "" !!}</td>
                        <td>{{ isset($blog) ? $blog->title : "" }}</td>
                        <td>{!! isset($blog) ? $blog->description : "" !!}</td>
                        <td>{{ isset($blog) ? $blog->category->name : "" }}</td>
                        <td>{{ isset($blog) ? \Carbon\Carbon::parse($blog->created_at)->format("d-m-Y H:i") : "" }}</td>
                        <td>{{ isset($blog) ? \Carbon\Carbon::parse($blog->updated_at)->format("d-m-Y H:i") : "" }}</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route("admin.blog.edit" , $blog->id)  }}" class="btn btn-warning btn-sm mx-1"><i class="fa fa-edit"></i> <strong>Güncelle</strong></a>
                            <a href="{{ route("admin.blog.destroy", $blog->id) }}" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i> <strong>Sil</strong></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--end::Content-->
    </div>
@endsection

@section("js")
    <script src="{{ asset("assets/assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
    <script>
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endsection
