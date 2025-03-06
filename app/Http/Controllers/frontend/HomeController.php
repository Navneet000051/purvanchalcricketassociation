<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\UserMail;
use App\Models\amendment;
use App\Models\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\imageCaption;
use App\Models\News;
use App\Models\photo;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use App\Models\Unit;
use App\Models\Director;
use App\Models\MemberView;
use App\Helpers\VisitorHelper;



class HomeController extends Controller
{

    public function index()
    {
        $data['count'] = VisitorHelper::incrementVisitorCount();
      
        $data['news_data'] = News::where('status', 1)->orderBy('id','desc')->get();
        $data['unit_data'] = Unit::where('status', 1)->orderBy('id', 'asc')->get();
                $data['official_data'] = amendment::where('status', 1)->orderBy('id','asc')->get();
                     $number = MemberView::firstOrCreate([]);
        $minValue = 10032456;
        $maxValue = 2000000;
        $increaseValue = 1300;
    
        if ($number->current_number < $minValue) {
            $number->current_number = $minValue;
            $number->last_updated = Carbon::today()->toDateString();
        }else {
            $lastUpdated = $number->last_updated;
            $today = Carbon::today()->toDateString();
    
            if ($lastUpdated != $today) {
                $number->current_number += $increaseValue;
                $number->last_updated = $today;
    
                if ($number->current_number > $maxValue) {
                    $number->current_number = $maxValue;
                }
            }
        }
    $number->save();
        $data['memberview']=$number->current_number;
        return view('frontend.index',$data);
       
    }
    public function home()
    { 
         $data['count'] = VisitorHelper::incrementVisitorCount();
        $data['news_data'] = News::where('status', 1)->orderBy('id','desc')->get();
          
        $data['unit_data'] = Unit::where('status', 1)->orderBy('id', 'asc')->get();
         $data['official_data'] = amendment::where('status', 1)->orderBy('id','asc')->get();
                                              $number = MemberView::firstOrCreate([]);
     $minValue = 10032456;
        $maxValue = 2000000;
        $increaseValue = 1300;
    
        if ($number->current_number < $minValue) {
            $number->current_number = $minValue;
            $number->last_updated = Carbon::today()->toDateString();
        }else {
            $lastUpdated = $number->last_updated;
            $today = Carbon::today()->toDateString();
    
            if ($lastUpdated != $today) {
                $number->current_number += $increaseValue;
                $number->last_updated = $today;
    
                if ($number->current_number > $maxValue) {
                    $number->current_number = $maxValue;
                }
            }
        }
    $number->save();
        $data['memberview']=$number->current_number;
        return view('frontend.index',$data);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function aims_object()
    {
        return view('frontend.aims-object');
    }
    public function articles()
    {
        return view('frontend.articles');
    }
    public function blogs()
    {
        return view('frontend.blogs');
    }
    public function blog_details()
    {
        return view('frontend.blog-details');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function guidelines()
    {
        return view('frontend.guidelines');
    }
    public function matches()
    {
        return view('frontend.matches');
    }
    public function news_cutting()
    {
        $data['news_data'] = News::where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.news-cutting', $data);
    }
    public function news_videos()
    {

        // $data['video_data'] = Video::where('video', 2)->where('status',1)->get();
        $data['video_data'] = Video::where('video', 2)->where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.news-videos', $data);
    }
    public function pca_constitution()
    {
        return view('frontend.pca-constitution');
    }
    public function pca_mission()
    {
        return view('frontend.pca-mission');
    }
    public function pca_officials()
    {
         $data['directors_data'] = Director::where('status', 1)->orderBy('id', 'asc')->get();
        // $data['official_data']= amendment::where('status', 1)->get(); 
        $data['official_data'] = amendment::where('status', 1)->orderBy('id','asc')->get();
        return view('frontend.pca-officials',$data);
    }
    public function photos()
    {
        // $data['caption_data'] = imageCaption::where('status', 1)->get();
        $data['caption_data'] = imageCaption::where('status', 1)->orderBy('id','desc')->get();
        $data['photos_data'] = photo::get();
        return view('frontend.photos', $data);
    }
    public function players_details()
    {
        return view('frontend.player-details');
    }
    public function players()
    {
        return view('frontend.players');
    }
    public function rules_game()
    {
        return view('frontend.rules-of-the-game');
    }
    public function mens_team()
    {
        return view('frontend.sr-mens-team');
    }
    public function womens_team()
    {
        return view('frontend.sr-womens-team');
    }
    public function videos()
    {
        // $data['video_data'] = Video::where('video', 1)->where('status',1)->get();
        $data['video_data'] = Video::where('video', 1)->where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.videos', $data);
    }
    public function addMail(Request $request)
    {
        $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "email" => "required",
            "phone" => "required",
            "message" => "required",
        ]);
        $mail = new ContactMail();
        $mail['firstname'] = $request->input('firstname');
        $mail['lastname'] = $request->input('lastname');
        $mail['email'] = $request->input('email');
        $mail['phone'] = $request->input('phone');
        $mail['message'] = $request->input('message');
        $user = $mail->save();
        $email = $mail['email'];
        $body = [
               'firstname'=>$mail['firstname'],
                'email'=>$mail['email'],
                 'phone'=>$mail['phone'],
                   'message'=>$mail['message'],  
                   'lastname'=>$mail['lastname'],
                  
        ];

        if ($user) {

            Mail::to('tejaswanibfcsofttech@gmail.com')->send(new UserMail($body));
        }
        return redirect('contact')->with('success', "Thank You. We'll connect with you shortly.");
    }
    
    public function districts()
    {
        $data['unit_data'] = Unit::where('status', 1)->orderBy('id', 'asc')->get();
        return view('frontend.districts',$data);
    }
}//end of class
