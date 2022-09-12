<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Header;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\skill;
use App\Models\SliderImage;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '1')
            {
                $name = Header::all()->first();
                $image = AboutMe::all()->first();

                $date = Carbon::now()->addHour(6)->format("d-m-Y");

                return view('admin.home',compact('name','image','date'));
            }

            else
            {

                return 'You are not A Person';
            }
        }

        else
        {
//            Slider
            $slider = SliderImage::all()->first();

//            Header
            $header = Header::all()->first();
//            About
            $about = AboutMe::all()->first();
//            Skill
            $skill = skill::all();
//            Education
            $education = Education::all();
//            Experience
            $experience = Experience::all();
//            Services
            $service = Service::all();
//            Portfolio
            $portfolio = Portfolio::all();
//            Contact
            $contact = Contact::all()->first();


            return view('user.home',compact('slider','header','about','skill','education',
                'experience','service','portfolio','contact'));
        }

    }

    public function messageUser(Request $request)
    {
       $data = new Message();
       $data->senderName = $request->senderName;
       $data->email = $request->email;
       $data->subject = $request->subject;
       $data->message = $request->message;
       $data->save();
       return redirect('/');
    }

    public function downloadPDF()
    {
        //            Slider
        $slider = SliderImage::all()->first();

//            Header
        $header = Header::all()->first();
//            About
        $about = AboutMe::all()->first();
//            Skill
        $skill = skill::all();
//            Education
        $education = Education::all();
//            Experience
        $experience = Experience::all();
//            Services
        $service = Service::all();
//            Portfolio
        $portfolio = Portfolio::all();
//            Contact
        $contact = Contact::all()->first();

        $pdf = PDF::loadview('user.download.myPDF', compact('slider','header','about','skill','education',
            'experience','service','portfolio','contact'));

        return $pdf->download('Resume.pdf');
    }


}
