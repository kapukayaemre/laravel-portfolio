<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ isset($feedBackSettings) ? $feedBackSettings->title : "" }}</h3>
                    <div class="desc">
                        <p>{!! isset($feedBackSettings) ? $feedBackSettings->sub_title : "" !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="testimonial-slider">
                    @foreach($feedBacks as $feedBack)
                        <div class="single-testimonial">
                            <div class="testimonial-header">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h5 class="title">{{ $feedBack->title }}</h5>
                                <h6 class="position">{!! $feedBack->position !!}</h6>
                            </div>
                            <div class="content">
                                {!! $feedBack->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
