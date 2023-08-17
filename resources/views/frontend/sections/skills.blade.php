<section class="skills-area section-padding-top" id="skills-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3 class="title">{{ isset($skills) ? $skills->title : "Skills"}}</h3>
                            <div class="desc">
                                <p>{!! isset($skills) ? $skills->sub_title : "Skills Description" !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row skills">
                    @foreach($skillItems as $skillItem)
                        <div class="col-sm-6">
                            <div class="bar_group wow fadeInUp" data-wow-delay="0.3s" data-max="100">
                                <div class="title">{{ isset($skillItem) ? $skillItem->name : "" }}</div>
                                <div class="bar_group__bar thick elastic" data-value="{{ isset($skillItem) ? $skillItem->percent : "" }}" data-color="{{ isset($skillItem) ? $skillItem->color : "" }}"
                                     data-tooltip="true" data-show-values="false" data-unit="%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image text-right wow fadeInRight">
                    <img src="{{ isset($skills) ? asset($skills->image) : asset("frontend/assets/images/skill.jpg") }}" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
