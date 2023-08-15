<section class="about-area section-padding-top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <figure class="about-image">
                    <img src="{{ isset($about) ? asset($about->image) : asset("frontend/assets/images/about-image.png") }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{ isset($about) ? $about->title : "About Me" }}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>{!! isset($about) ? $about->description : "About Me Description" !!}</p>
                    </div>
                    <a href="{{ route("admin.resume.download") }}" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Download Resume</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
