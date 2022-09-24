<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $phone = '+380981234567';
    private $email = 'carstudion@gmail.com';
    private $address = 'вул.Кропивницького,1А';

    private $token = "5692864738:AAHhSKfQUSppjkAHd3ikhmh9YlI-FkB2UCA";
    private $ids = ['384118324'];

    public function index() {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('index',compact('services','phone','email','address','seoDescription'));
    }
    public function contact() {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('contact',compact('services','phone','email','address','seoDescription'));
    }
    public function about() {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('about',compact('services','phone','email','address','seoDescription'));
    }
    public function services() {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('services',compact('services','phone','email','address','seoDescription'));
    }
    public function advice() {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('advice',compact('services','phone','email','address','seoDescription'));
    }
    public function service($slug_url) {
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $service = Service::where('slug_url',$slug_url)->first();
        if(!$service){
            abort(404);
        }
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('service',compact('services','service','phone','email','address','seoDescription'));
    }
    public function advicePost(Request $request) {
        $name = $request->name;
        $email = $request->phone;
        $service = Service::find($request->service);
        $serviceName = $service?$service->name:'невибрано';
        $message = $request->message;
        $text = "️Name: $name\nPhone: $email\nService: $serviceName\nMessage: $message";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('advice-success', compact('phone','email','address','services'));
    }
    public function contactPost(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $text = "️Name: $name\nEmail: $email\nMessage: $message";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('contact-success', compact('phone','email','address','services'));
    }
    public function newsletter(Request $request) {
        $text = "Newsletter: $request->email";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        $phone = $this->phone;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('newsletter-success', compact('phone','email','address','services'));
    }
    private function getSeoDesc($services){
        $desc = 'Надаємо широкий спектр послуг: ';
        foreach ($services as $service){
            $desc .= $service->title.', ';
        }
        $desc .= 'та багато іншого.';
        return $desc;
    }
}
