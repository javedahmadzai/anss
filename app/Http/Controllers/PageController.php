<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;
use App\Appointment;
use App\Manager;
use App\Image;
use DB;

class PageController extends Controller
{
    /**
     * Home
     */
    public function index()
    {
        $news = News::latest()->limit(3)->get() ?? null;
        $events = Event::latest()->limit(3)->get() ?? null;

        return view('pages.index', [
            'latest_news' => $news
        ]);
    }

    /**
     * About
     */
    public function about()
    {
        return view('pages.about.index');
    }

    public function whoWeAre()
    {
        return view('pages.about.who-we-are');
    }

    public function strategicPlans()
    {
        return view('pages.about.strategic-plans');
    }

    public function boardOfDirectors()
    {
        return view('pages.about.board-of-directors');
    }

    /**
     * Services
     */
    public function services()
    {
        return view('pages.services.index');
    }

    public function immigrationAndSettlement()
    {
        return view('pages.services.immigration-and-settlement');
    }

    public function culturalEnvironmentalAndEducational()
    {
        return view('pages.services.cultural-environmental-and-educational');
    }

    public function networkingAndCommunityBasedResearch()
    {
        return view('pages.services.networking-and-community-based-research');
    }

    /**
     * Events
     */
    public function events()
    {
        return view('pages.events.index');
    }

    public function upcomingEvents()
    {
        return view('pages.events.upcoming-events', ['events' => Event::all()]);
    }

    public function pastEvents()
    {
        return view('pages.events.past-events', ['events' => Event::all()]);
    }

    /**
     * Latest News
     */
    public function latestNews($id = null)
    {
        if($id === null) {
            return view('pages.news.index', ['articles' => News::all()]);
        }

        return view('pages.news.news-page', ['article' => News::find($id)]);
    }

    /**
     * Gallery
     */
    public function gallery()
    {
        return view('pages.gallery.index', ['images' => Image::all()]);
    }

    /**
     * Appointments
     */
    public function appointments()
    {
        return view('pages.appointments.index', ['appointments' => Appointment::availableAppointments()]);
    }

    /**
     * Donate
     */
    public function donate()
    {
        return view('pages.donate.index');
    }

    /**
     * Contact
     */
    public function contact()
    {
        return view('pages.contact.index');
    }
}
