<section class="service-area section-padding-top" id="about-page">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 {{ $loop->index > 2 ? "mt-4" : "" }}">
                    <div class="single-service">
                        <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{ isset($service) ? $service->name : "No Title" }}</h3>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            <p>{!! isset($service) ? $service->description : "No Description" !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
