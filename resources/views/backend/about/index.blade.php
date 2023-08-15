@extends("layouts.admin")
@section("title")
    Hakkımda Bölümü
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
                <h3 class="fw-bolder m-0">Hakkımda Bölümü</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form action="{{ route("admin.about.update", 1) }}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label fw-bold fs-6">Hakkımda Fotoğraf</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline"
                                 data-kt-image-input="true"
                                 style="background-image: url({{ asset("assets/assets/media/avatars/blank.png") }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-400px h-200px"
                                     style="background-image: url({{ isset($about) ? asset($about->image): "" }});   background-size: contain; background-position: center; width: 100%; height: 300px">
                                </div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" value="{{ old("image") }}" accept=".png, .jpg, .jpeg">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Desteklenen Formatlar: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Başlık</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10 fv-row fv-plugins-icon-container">
                            <input type="text"
                                   name="title"
                                   class="form-control form-control-lg form-control-solid"
                                   placeholder="Ana Başlık"
                                   value="{{ old('title', isset($about) ? $about->title : "") }}"
                            >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">Açıklama</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10 fv-row fv-plugins-icon-container">
                            <textarea name="description" id="description">{{ old('description', isset($about) ? $about->description : "") }}</textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">CV Dosyası</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10 fv-row fv-plugins-icon-container d-flex">
                            @if($about->resume)
                                <div>
                                    <i class="fa fa-file-pdf me-4" style="font-size: 40px"></i>
                                </div>
                            @endif
                            <input type="file"
                                   name="resume"
                                   class="form-control form-control-lg form-control-solid"
                            >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                        <div class="form-text">Desteklenen Formatlar: pdf, csv, txt.</div>
                        <div class="form-text">Dosya boyutu en fazla 10 MB olmalıdır!</div>
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
            .create(document.querySelector('#description'))
            .then(editor => {
                // console.log(editor);
            })
            .catch(error => {
                // console.error(error);
            });
    </script>
@endsection
