@extends("layouts.front")

@section("title")
    Blog Detaylar
@endsection

@section("css")
@endsection

@section("content")
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h2 class="title">Blog Detaylar</h2>
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
    <section class="blog-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">{{ isset($blogDetails) ? $blogDetails->title : "" }}</h2>
                    <div class="blog-meta">
                        <div class="single-meta">
                            <div class="meta-title">Paylaşım Tarihi</div>
                            <h4 class="meta-value">
                                <a href="javascript:void(0)">{{ isset($blogDetails) ? \Carbon\Carbon::parse($blogDetails->created_at)->translatedFormat("d F Y") : "" }}</a>
                            </h4>
                        </div>
                        <div class="single-meta">
                            <div class="meta-title">Tag</div>
                            <h4 class="meta-value">
                                <a href="javascript:void(0)">{{ isset($blogDetails) ? $blogDetails->category->name : "" }}</a>
                            </h4>
                        </div>
                    </div>
                    <figure class="image-block">
                        <img class="img-fix" src="{{ isset($blogDetails) ? asset($blogDetails->image) : "" }}" alt="">
                    </figure>
                    <div class="description">
                        {!! $blogDetails->description !!}
                    </div>
                    <div class="single-navigation">
                        <a href="{{ isset($previousPost) ? route("home.show-blog", $previousPost->id) : "javascript:void(0)" }}" class="nav-link">
                            <span class="icon"><i class="fal fa-angle-left"></i></span>
                            <span class="text">{{ isset($previousPost) ? $previousPost->title : "İlk Blogtasınız" }}</span>
                        </a>
                        <a href="{{ isset($nextPost) ? route("home.show-blog", $nextPost->id) : "javascript:void(0)" }}" class="nav-link">
                            <span class="text">{{ isset($nextPost) ? $nextPost->title : "Son Blogtasınız" }}</span>
                            <span class="icon"><i class="fal fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection

@section("js")
@endsection
