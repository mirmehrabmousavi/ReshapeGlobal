<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function services()
    {
        return view('front.services');
    }

    public function estate()
    {
        $estates = Estate::latest()->paginate(5);
        return view('front.services.estate',compact('estates'));
    }

    public function showEstate($id,$title)
    {
        $estate = Estate::findOrFail($id);
        $estates = Estate::latest()->paginate(10);
        return view('front.services.estate-show',compact('estate','estates','title'));
    }

    public function brandRegistration()
    {
        return view('front.services.brand-registration');
    }

    public function companyRegistration()
    {
        return view('front.services.company-registration');
    }

    public function turkishCitizenship()
    {
        return view('front.services.turkish-citizenship');
    }

    public function legalConsultancy()
    {
        return view('front.services.legal-consultancy');
    }

    public function importExport()
    {
        return view('front.services.import-export');
    }

    public function ads()
    {
        return view('front.services.ads');
    }

    public function internationalTrading()
    {
        return view('front.services.international-trading');
    }

    public function programming()
    {
        return view('front.services.programming');
    }

    public function propertySales()
    {
        return view('front.services.property-sales');
    }

    public function counseling()
    {
        return view('front.counseling');
    }

    public function commercial()
    {
        return view('front.counseling.commercial');
    }

    public function legal()
    {
        return view('front.counseling.legal');
    }

    public function counselingAds()
    {
        return view('front.counseling.counseling-ads');
    }

    public function estateCounseling()
    {
        return view('front.counseling.estate-counseling');
    }

    public function events()
    {
        return view('front.events');
    }

    public function environment()
    {
        return view('front.environment');
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('front.blog',compact('blogs'));
    }

    public function showBlog($id,$title)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::latest()->paginate(10);
        return view('front.blog-show',compact('blog', 'blogs','title'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function team()
    {
        return view('front.team');
    }

    public function contact()
    {
        return view('front.contact');
    }

    function changeLang($langcode){

        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}
