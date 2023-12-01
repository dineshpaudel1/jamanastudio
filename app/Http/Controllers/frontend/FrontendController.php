<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioImage;
use App\Models\Setting;
use App\Models\SocialService;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontendPage(){
        $data['settings']=Setting::where('status',1)->first();
        $data['social_medias']=SocialService::where('status',1)->orderBy('created_at','desc')->first();
        $data['teams']=Team::where('status',1)->orderBy('rank','asc')->take(9)->get();
        $data['portfolio_images']=PortfolioImage::where('status',1)->orderBy('rank','asc')->take(6)->get();
        return view('frontend',compact('data'));
    }
}
