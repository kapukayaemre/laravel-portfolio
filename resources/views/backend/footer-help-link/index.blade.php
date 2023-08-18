@extends("layouts.admin")
@section("title")
    Footer Yardım Linkleri
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
                <h3 class="fw-bolder m-0">Footer Yardım Linkleri</h3>
            </div>
            <div class="d-flex justify-content-end py-6 px-2">
                <a href="{{ route("admin.footer-help-links.create") }}" class="btn btn-sm btn-primary">Yeni Ekle</a>
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
                    <th>Link Adı</th>
                    <th>URL</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>Güncelleme Tarihi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($helpLinks as $helpLink)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!! isset($helpLink) ? $helpLink->name : "" !!}</td>
                        <td>{{ isset($helpLink) ? $helpLink->url : "" }}</td>
                        <td>{{ isset($helpLink) ? \Carbon\Carbon::parse($helpLink->created_at)->format("d-m-Y H:i") : "" }}</td>
                        <td>{{ isset($helpLink) ? \Carbon\Carbon::parse($helpLink->updated_at)->format("d-m-Y H:i") : "" }}</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route("admin.footer-help-links.edit" , $helpLink->id)  }}" class="btn btn-warning btn-sm mx-1"><i class="fa fa-edit"></i> <strong>Güncelle</strong></a>
                            <a href="{{ route("admin.footer-help-links.destroy", $helpLink->id) }}" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i> <strong>Sil</strong></a>
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
