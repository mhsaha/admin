<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Logo;
use App\Models\Model\Slider;
use App\Models\Model\Contact;
use App\Models\Model\Mission;
use App\Models\Model\Vision;
use App\Models\Model\NewsEvent;
use App\Models\Model\Service;
use App\Models\Model\About;
use App\Models\Model\communucate;
use Mail;

class Youtube extends Controller
{
    public function index()

    {

        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        $data['vision'] = Vision::first();
        $data['news_event'] = NewsEvent::orderBy('id', 'desc')->get();
        $data['services'] = Service::all();
        return view('frontend.layouts.home', $data);
    }

    public function aboutUs()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        return view('frontend.single_page.about-us', $data);
    }

    public function contactUs()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('frontend.single_page.contact-us', $data);
    }

    public function newsDetails($id)
    {
        $data['logo'] = Logo::first();
        $data['news'] = NewsEvent::find($id);
        $data['contact'] = Contact::first();
        return view('frontend.single_page.news-event-details', $data);
    }
    public function mission()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        return view('frontend.single_page.mission', $data);
    }
    public function vision()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['vision'] = Vision::first();
        return view('frontend.single_page.vision', $data);
    }
    public function news_event()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['news_event'] = NewsEvent::orderBy('id', 'desc')->get();
        return view('frontend.single_page.news_event', $data);
    }
    public function store(Request $request)
    {
        $contact = new communucate();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile_no = $request->mobile_no;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $contact->save();

        $data = array(
            'name'   => $request->name,
            'email'  => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'message' => $request->message,
        );

        Mail::send('frontend.emails.contact', $data,  function ($message) use ($data) {
            $message->from('mhsaha16@gmail.com', 'popular soft Bd');
            $message->to($data['email']);
            $message->subject('Thanks for contact us');
        });



        return redirect()->back()->with('success', 'Your message successfully sent');
    }


    public function viewCommunicate()
    {
        dd('ok');
    }
}
