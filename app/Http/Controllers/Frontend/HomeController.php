<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogSetting;
use App\Models\Category;
use App\Models\Experience;
use App\Models\FeedBack;
use App\Models\FeedBackSetting;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\SkillItem;
use App\Models\SkillSectionSetting;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::all();
        $about = About::first();
        $portfolioSectionTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skills = SkillSectionSetting::first();
        $skillItems = SkillItem::all();
        $experiences = Experience::first();
        $feedBacks = FeedBack::all();
        $feedBackSettings = FeedBackSetting::first();
        $blogs = Blog::latest()->take(5)->get();
        $blogSettings = BlogSetting::first();
        return view("frontend.home", compact(
            "hero",
            "typerTitles",
            "services",
            "about",
            "portfolioSectionTitle",
            "portfolioCategories",
            "portfolioItems",
            "skills",
            "skillItems",
            "experiences",
            "feedBacks",
            "feedBackSettings",
            "blogs",
            "blogSettings"
        ));
    }

    public function showPortfolio($id)
    {
        $portfolioDetails = PortfolioItem::findOrFail($id);
        return view("frontend.portfolio-details", compact("portfolioDetails"));
    }

    public function showBlog($id)
    {
        $blogDetails = Blog::findOrFail($id);
        $previousPost = Blog::where("id", "<", $blogDetails->id)->orderBy("id", "DESC")->first();
        $nextPost = Blog::where("id", ">", $blogDetails->id)->orderBy("id", "ASC")->first();
        return view("frontend.blog-details", compact("blogDetails", "previousPost", "nextPost"));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(9);
        return view("frontend.blog", compact("blogs"));
    }

    public function contact(ContactFormRequest $request)
    {
        Mail::send(new ContactMail($request->all()));
        return response([
            "status" => "success",
            "message" => "Mail Başarıyla Gönderildi"
        ]);
    }
}
