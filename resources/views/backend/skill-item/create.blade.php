@extends("layouts.admin")
@section("title")
    Yetenek Oluştur
@endsection

@section("css")
@endsection

@section("content")
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details" aria-expanded="true"
             aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Yeni Yetenek Oluştur</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form action="{{ route("admin.skills-items.store") }}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6 offset-1">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Yetenek Adı</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text"
                                   name="name"
                                   class="form-control form-control-lg form-control-solid"
                                   placeholder="Yetenek Adı"
                                   value="{{ old("name") }}"
                            >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6 offset-1">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Yetenek Yüzde(%)</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="number"
                                   name="percent"
                                   class="form-control form-control-lg form-control-solid"
                                   placeholder="Yetenek Yüzde(%)"
                                   value="{{ old("percent") }}"
                            >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6 offset-1">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Yetenek Bar Rengi</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row fv-plugins-icon-container">
                            <input type="color"
                                   name="color"
                                   class="form-control form-control-lg form-control-solid"
                                   placeholder="Yetenek Bar Rengi"
                                   value="{{ old("color") }}"
                            >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Sıfırla</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Kaydet
                    </button>
                </div>
                <!--end::Actions-->
                <input type="hidden">
                <div></div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section("js")
    <script src="{{ asset("assets/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js") }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#sub_title'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
