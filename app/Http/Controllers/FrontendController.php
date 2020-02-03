<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Seo;
use App\Team;
use App\Service;
use App\Faq;
use App\Blog;
use App\Gallery;
use App\Image;
class FrontendController extends Controller
{
    public function home()
    {
    	$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
    	$seo = Seo::where('name','Home')->get()->first();
    	$about = About::get()->first();
    	$ser = Service::where('status','active')->orderBy('id','Desc')->take(3)->get();
    	$blog = Blog::where('status','active')->orderBy('id','Desc')->take(3)->get();
    	$team = Team::where('status','active')->take(4)->get();
    	return view('frontend.home.home',compact('about','seo','ser','blog','team','ga'));
	}


	public function about(){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
		$seo  = Seo::where('name','About')->get()->first();
		$team = Team::where('status','active')->get()->all();
		return view('frontend.aboutus.aboutus',compact('about','seo','team','ga'));
	}

	public function service(){
		$about = About::get()->first();
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$service = Service::where('status','active')->orderBy('id','Desc')->get();
		$seo = Seo::where('name','Service')->get()->first();
    	return view('frontend.service.service',compact('service','seo','about','ga'));
	}

	public function servicedetails($slug){
		$about = About::get()->first();
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$servicedetail = Service::where('slug',$slug)->get()->first();
		$ser = Service::where('slug','!=',$servicedetail['slug'])->get();
    	return view('frontend.service.moredetail',compact('servicedetail','ser','about','ga'));
	}

	public function faq(){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
		$faq = Faq::where('status','active')->get()->all();
		$seo = Seo::where('name','FAQ')->get()->first();
    	return view('frontend.FAQ.faq',compact('faq','seo','about','ga'));
	}

	public function gallery(){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
		$gal = Gallery::where('status','active')->orderBy('id','Desc')->get();
		$seo =  Seo::where('name','Gallery')->get()->first();
    	return view('frontend.gallery.gallery',compact('gal','seo','about','ga'));

	}

	public function picture($id){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
		$img = Image::where('gallery_id',$id)->orderBy('id','Desc')->get();
    	return view('frontend.Gallery.picture',compact('img','about','ga'));


	}

	public function blog(){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
		$blog = Blog::where('status','active')->orderBy('id','Desc')->get();
		$seo = Seo::where('name','Blog')->get()->first();
    return view('frontend.Blog.blog',compact('seo','blog','about','ga'));
		}

	public function blogdetails($slug){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
	$blogdetail = Blog::where('slug',$slug)->get()->first();	
    return view('frontend.blog.blogdetail',compact('blogdetail','about','ga'));
		}

		public function contact(){
			$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
			$about = About::get()->first();
			return view('frontend.contactus.contactus',compact('about','ga'));
		}

	public function err(){
		$ga = Gallery::where('status','active')->orderby('id','Desc')->take(6)->get();
		$about = About::get()->first();
    return view('frontend.error.error',compact('about','ga'));
	}			


}