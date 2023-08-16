@extends("layouts.front")

@section("title")
    Portfolio Details
@endsection

@section("css")
@endsection

@section("content")
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h2 class="title">Portfolio Details</h2>
                </div>
                <div class="col-sm-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio-Area-Start -->
    <section class="portfolio-details section-padding" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">{{ isset($portfolioDetails) ? $portfolioDetails->title : "9 Things I Love About Shaving My Head During." }}</h2>
                    <figure class="image-block">
                        <img src="{{ isset($portfolioDetails) ? asset($portfolioDetails->image) : asset("frontend/assets/images/portfolio-block.jpg") }}" alt="" class="img-fix">
                    </figure>
                    <div class="portflio-info">
                        <div class="single-info">
                            <h4 class="title">Müşteri</h4>
                            <p>{{ isset($portfolioDetails) ? $portfolioDetails->client : "" }}</p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Tarih</h4>
                            <p>{{ isset($portfolioDetails) ? \Illuminate\Support\Carbon::parse($portfolioDetails->created_at)->translatedFormat("d - F, Y") : "" }}</p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Web Sitesi</h4>
                            <a href="{{ isset($portfolioDetails) ? $portfolioDetails->website : "" }}">{{ isset($portfolioDetails) ? $portfolioDetails->website : "" }}</a>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Kategori</h4>
                            <p>{{ isset($portfolioDetails) ? $portfolioDetails->category->name : "" }}</p>
                        </div>
                    </div>
                    <div class="description">
                        {!! isset($portfolioDetails) ? $portfolioDetails->description : "" !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->

@endsection

@section("js")
@endsection
