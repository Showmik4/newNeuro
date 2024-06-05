<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Department;
use App\Models\LatestNews;
use App\Models\OurGoals;
use App\Models\Package;
use App\Models\Page;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $work=Department::all();
        $latestNews=LatestNews::all();
       
        return view('frontend.pages.index',compact('work','latestNews'));
    }

    public function about()
    {
        $document = Setting::query()->first();
        $latestAllNews=LatestNews::all();
        $team=Team::all();
        $ourGoals=OurGoals::all();
        return view('frontend.pages.about', compact('document','latestAllNews','team','ourGoals'));
    }

    public function services($id)
    {
        $service=Service::query()->where('deptId',$id)->get();
        return view('frontend.pages.services',compact('service'));
    }

    public function casestudy()
    {
        $caseStudy=CaseStudy::all();
        return view('frontend.pages.casestudy',compact('caseStudy'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    // public function page($pageId)
    // {
    //     $page = Page::query()->where('pageId', $pageId)->first();
    //     return view('pages.page', compact('page'));
    // }

    public function pricing()
    {
        return view('frontend.pages.pricing');
    }

    public function store_contact(Request $request)
    {    
    $validated = $this->validate($request, [
        'name' => 'nullable',
        'email' => 'nullable',
        'subject' => 'nullable',
        'message' => 'nullable',      
    ]); 
    $contact =Contact::query()->create([
        'name' =>$validated['name'],
        'email' =>$validated['email'],
        'subject' =>$validated['subject'],
        'message' => $validated['message'],      
    ]);   
    Session::flash('success', 'Message Send Successfully!');
    return redirect()->back();   
}
}
