<section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Lets Work Together</h3>
                    <div class="desc">
                        <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse.
                            Quae quasi
                            odio enim.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" id="form-name" class="input-box"
                                       placeholder="Adınız">
                                <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="email" id="form-email" class="input-box"
                                       placeholder="Email Adresiniz">
                                <label for="form-email" class="icon lb-email"><i
                                        class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="subject" id="form-subject" class="input-box"
                                       placeholder="Konu">
                                <label for="form-subject" class="icon lb-subject"><i
                                        class="fal fa-check-square"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea class="input-box" id="form-message" placeholder="Mesajınız" cols="30" rows="4" name="message"></textarea>
                                <label for="form-message" class="icon lb-message">
                                    <i class="fal fa-edit"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" type="submit" id="btnSubmit">Gönder <span class="dir-part"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Contact-Form / -->
            </div>
        </div>
    </div>
</section>
@push("scripts")
    <script>
        $(document).ready(function () {
            $(document).on("submit", "#contact-form", function (event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route("home.contact") }}",
                    data: $(this).serialize(),
                    beforeSend: function ()
                    {
                        $("#btnSubmit").prop("disabled", true);
                        $("#btnSubmit").text('Bekleyiniz...');
                    },
                    success: function (response)
                    {
                        if(response.status === "success")
                        {
                            toastr.success(response.message)
                            $("#btnSubmit").prop("disabled", false);
                            $("#btnSubmit").text('Gönder');
                            $("#contact-form").trigger("reset");
                        }
                    },
                    error: function (response)
                    {
                        if(response.status === 422)
                        {
                            let errorMessages = $.parseJSON(response.responseText)

                            $.each(errorMessages.errors, function (key, val) {
                                toastr.error(val[0])
                            })

                            $("#btnSubmit").prop("disabled", false);
                            $("#btnSubmit").text('Gönder');
                        }
                    }
                })
            });
        });
    </script>
@endpush
