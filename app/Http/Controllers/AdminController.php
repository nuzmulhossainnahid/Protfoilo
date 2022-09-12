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
use Carbon\Carbon;
use Illuminate\Http\Request;
use League\CommonMark\Parser\Block\SkipLinesStartingWithLettersParser;
use function Sodium\compare;

class AdminController extends Controller
{


//    Slider
   public function adminSliderImage()
   {   $name = Header::all()->first();
       $image = AboutMe::all()->first();

       $date = Carbon::now()->addHour(6)->format("d-m-Y");
       $data = SliderImage::all();
       return view('admin.SliderImage.adminSliderImage',compact(
           'data','name','image','date'));
   }
   public function adminSliderImageAdd()
   {
       $name = Header::all()->first();
       $image = AboutMe::all()->first();

       $date = Carbon::now()->addHour(6)->format("d-m-Y");
       return view('admin.SliderImage.adminSliderImageAdd',compact('name','image','date'));
   }
   public function addSliderImage(Request $request)

   {
       $data = new SliderImage();
       if($request->file('image')){
           $file= $request->file('image');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('SliderImage'), $filename);
           $data['sliderImage']= $filename;
       }
       $data->save();
       return redirect('adminSliderImage');
   }
   public function deleteSlider($id)
   {
       $name = Header::all()->first();
       $image = AboutMe::all()->first();

       $date = Carbon::now()->addHour(6)->format("d-m-Y");
       $data = SliderImage::find($id);
       $data->delete();
       return redirect('adminSliderImage',compact('name','image','date'));
   }
   public function changeSlider($id)
   {
       $name = Header::all()->first();
       $image = AboutMe::all()->first();

       $date = Carbon::now()->addHour(6)->format("d-m-Y");
       $data = SliderImage::find($id);
       return view('admin.SliderImage.changeSlider',compact('data','name','image','date'));
   }
   public function changeImageFrom(Request $request,$id)
   {
       $data = SliderImage::find($id);
       if($request->file('image')){
           $file= $request->file('image');
           $filename= date('YmdHi').$file->getClientOriginalName();
           $file-> move(public_path('SliderImage'), $filename);
           $data['sliderImage']= $filename;
       }
       $data->save();
       return redirect('adminSliderImage');

   }

//   Header

    public function addHeaderAdmin()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.header.addHeaderAdmin',compact('name','image','date'));
    }
    public function addHeader(Request $request)
    {
        $data = new Header();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('HeaderImage'), $filename);
            $data['headerImage']= $filename;
        }

        $data->name = $request->name;
        $data->designation  = $request->designation;
        $data->save();
        return redirect('headerView');
    }
    public function headerView()
    {
        $name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Header::all();
        return view('admin.header.headerView',compact('data','name','image','date'));
    }
    public function deleteHeader($id)
    {
        $data = Header::find($id);
        $data->delete();
        return redirect('headerView');
    }
    public function changeHeader($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Header::find($id);
        return view('admin.header.changeHeader',compact('data','name','image','date'));
    }

    public function changeHeaderFrom(Request $request,$id)
    {
        $data = Header::find($id);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('HeaderImage'), $filename);
            $data['headerImage']= $filename;
        }

        $data->name = $request->name;
        $data->designation  = $request->designation;
        $data->save();
        return redirect('headerView');
    }

//    About

    public function addAbout()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.about.addAbout',compact('name','image','date'));
    }

    public function addAboutFrom(Request $request)
    {
        $data = new AboutMe();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('AboutImage'), $filename);
            $data['aboutImage']= $filename;
        }

        $data->discription = $request->discription;
        $data->save();
        return redirect('viewAboutMe');
    }
    public function viewAboutMe()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = AboutMe::all();
        $skill = skill::all();
        return view('admin.about.viewAboutMe',compact('data','skill','name','image','date'));
    }
    public function deleteAbout($id)
    {
        $data = AboutMe::find($id);
        $data->delete();
        return redirect('viewAboutMe');
    }
    public function changeAbout($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = AboutMe::find($id);
        return view('admin.about.changeAbout',compact('data','name','image','date'));
    }

    public function changeAboutFrom(Request $request,$id)
    {
        $data = AboutMe::find($id);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('AboutImage'), $filename);
            $data['aboutImage']= $filename;
        }


        $data->discription = $request->discription;
        $data->save();
        return redirect('viewAboutMe');
    }
    public function addSkill()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.about.addSkill',compact('name','image','date'));
    }
    public function addSkillFrom(Request $request)
    {
        $data = new skill();
        $data->skillName = $request->skillName;
        $data->percentage = $request->percentage;
        $data->save();
        return redirect('addSkill');
    }
    public function deleteSkill($id)
    {
        $data = skill::find($id);
        $data->delete();
        return redirect('viewAboutMe');
    }
    public function editSkill($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = skill::find($id);
        return view('admin.about.editSkill',compact('data','name','image','date'));
    }

    public function editSkillFrom(Request $request,$id)
    {
        $data = skill::find($id);

        $data->skillName = $request->skillName;
        $data->percentage = $request->percentage;
        $data->save();
        return redirect('viewAboutMe');
    }

//    educationAdd
public function educationAdd()
{   $name = Header::all()->first();
    $image = AboutMe::all()->first();

    $date = Carbon::now()->addHour(6)->format("d-m-Y");
    return view('admin.education.educationAdd',compact('name','image','date'));
}
public function addEducationFrom(Request $request)
{
    $data = new Education();
    $data->degreeName = $request->degreeName;
    $data->discription = $request->discription;
    $data->startingDate = $request->startingDate;
    $data->endingDate = $request->endingDate;
    $data->save();
    return redirect('educationAdd');
}

public function educationView()
{$name = Header::all()->first();
    $image = AboutMe::all()->first();

    $date = Carbon::now()->addHour(6)->format("d-m-Y");
    $data = Education::all();
    return view('admin.education.educationView',compact('data','name','image','date'));
}

public function deleteEducation($id)

{
    $data = Education::find($id);
    $data->delete();
    return redirect('educationView');

}
public function changeEducation($id)
{$name = Header::all()->first();
    $image = AboutMe::all()->first();

    $date = Carbon::now()->addHour(6)->format("d-m-Y");
    $data = Education::find($id);
    return view('admin.education.changeEducation',compact('data','name','image','date'));
}
public function editEducationFrom(Request $request,$id)
{
    $data = Education::find($id);
    $data->degreeName = $request->degreeName;
    $data->discription = $request->discription;
    $data->startingDate = $request->startingDate;
    $data->endingDate = $request->endingDate;
    $data->save();
    return redirect('educationView');

}
//Experience
public function experienceAdd()
{$name = Header::all()->first();
    $image = AboutMe::all()->first();

    $date = Carbon::now()->addHour(6)->format("d-m-Y");
    return view('admin.experience.experienceAdd',compact('name','image','date'));
}
public function addExperienceFrom(Request $request)
{
$data = new Experience();
$data->degreeName = $request->degreeName;
$data->address = $request->address;
$data->post = $request->post;
$data->discription = $request->discription;
$data->startingDate = $request->startingDate;
$data->endingDate = $request->endingDate;
$data->save();
return redirect('experienceView');

}

public function experienceView()
{$name = Header::all()->first();
    $image = AboutMe::all()->first();

    $date = Carbon::now()->addHour(6)->format("d-m-Y");
    $data = Experience::all();
    return view('admin.experience.experienceView',compact('data','name','image','date'));
}

public function deleteExperience($id)
{
    $data = Experience::find($id);
    $data->delete();
    return redirect('experienceView');
}

    public function changeExperience($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Experience::find($id);
        return view('admin.experience.changeExperience',compact('data','name','image','date'));
    }
    public function editExperienceFrom(Request $request,$id)
    {
        $data = Experience::find($id);
        $data->degreeName = $request->degreeName;
        $data->address = $request->address;
        $data->post = $request->post;
        $data->discription = $request->discription;
        $data->startingDate = $request->startingDate;
        $data->endingDate = $request->endingDate;
        $data->save();
        return redirect('experienceView');

    }
//    Services


    public function servicesAdd()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.services.servicesAdd',compact('name','image','date'));
    }
    public function addServicesFrom(Request $request)
    {

        $data = new Service();
        $data->nameOfServices = $request->nameOfServices;
        $data->discription = $request->discription;
        $data->save();
        return redirect('ServiceView');

    }

    public function ServiceView()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Service::all();
        return view('admin.services.ServiceView',compact('data','name','image','date'));
    }

    public function deleteService($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect('ServiceView');
    }

    public function changeService($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Service::find($id);
        return view('admin.services.changeService',compact('data','name','image','date'));
    }
    public function editServicesFrom(Request $request,$id)
    {
        $data = Service::find($id);
        $data->nameOfServices = $request->nameOfServices;
        $data->discription = $request->discription;
        $data->save();
        return redirect('ServiceView');

    }
//    Portfolio



    public function portfolioAdd()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.portfolio.portfolioAdd',compact('name','image','date'));
    }
    public function addPortfolio(Request $request)
    {

        $data = new Portfolio();
        $data->projectName = $request->projectName;
        $data->projectCategory = $request->projectCategory;
        $data->projectLink = $request->projectLink;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('PortfolioImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect('portfolioView');

    }

    public function portfolioView()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Portfolio::all();
        return view('admin.portfolio.portfolioView',compact('data','name','image','date'));
    }

    public function deletePortfolio($id)
    {
        $data = Portfolio::find($id);
        $data->delete();
        return redirect('portfolioView');
    }

    public function changePortfolio($id)
    {   $name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Portfolio::find($id);
        return view('admin.portfolio.changePortfolio',compact('data','name','image','date'));
    }
    public function editPortfolio(Request $request,$id)
    {
        $data = Portfolio::find($id);
        $data->projectName = $request->projectName;
        $data->projectCategory = $request->projectCategory;
        $data->projectLink = $request->projectLink;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('PortfolioImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect('portfolioView');

    }

//Contact
    public function contactAdd()
    {   $name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        return view('admin.contact.contactAdd',compact('name','image','date'));
    }
    public function addContactFrom(Request $request)
    {
        $data = new Contact();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkIn = $request->linkIn;
        $data->instagram = $request->instagram;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect('contactView');

    }

    public function contactView()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Contact::all();
        return view('admin.contact.contactView',compact('data','name','image','date'));
    }

    public function deleteContact($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return redirect('contactView');
    }

    public function changeContact($id)
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Contact::find($id);
        return view('admin.contact.changeContact',compact('data','name','image','date'));
    }
    public function editContactFrom(Request $request,$id)
    {
        $data = Contact::find($id);

        $data->name = $request->name;
        $data->position = $request->position;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkIn = $request->linkIn;
        $data->instagram = $request->instagram;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect('contactView');

    }

    public function ReceivedMessageView()
    {$name = Header::all()->first();
        $image = AboutMe::all()->first();

        $date = Carbon::now()->addHour(6)->format("d-m-Y");
        $data = Message::all();
        return view('admin.message.ReceivedMessageView',compact('data','name','image','date'));
    }

}
