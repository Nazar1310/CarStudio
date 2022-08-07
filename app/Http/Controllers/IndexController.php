<?php

namespace App\Http\Controllers;


use App\Models\Service;

class IndexController extends Controller
{
    public function index() {
        $services = Service::get();
        return view('index',compact('services'));
    }
    public function contact() {
        $services = Service::get();
        return view('contact',compact('services'));
    }
    public function about() {
        $services = Service::get();
        return view('about',compact('services'));
    }
    public function services() {
        $services = Service::get();
        return view('services',compact('services'));
    }
    public function advice() {
        $services = Service::get();
        return view('advice',compact('services'));
    }
    public function service($slug_url) {
        $service = Service::where('slug_url',$slug_url)->first();
        if(!$service){
            abort(404);
        }
        $services = Service::get();
        return view('service',compact('services','service'));
    }
}
