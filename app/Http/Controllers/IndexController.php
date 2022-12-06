<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $phones = ['+380506742223'];
    private $email = 'dosashi@gmail.com';
    private $address = 'вул.Кропивницького,1А';

    private $token = "5692864738:AAHhSKfQUSppjkAHd3ikhmh9YlI-FkB2UCA";
    private $ids = ['384118324','2065216585'];

    public function index() {
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('index',compact('services','phones','email','address','seoDescription'));
    }
    public function contact() {
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('contact',compact('services','phones','email','address','seoDescription'));
    }
    public function about() {
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('about',compact('services','phones','email','address','seoDescription'));
    }
    public function services() {
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('services',compact('services','phones','email','address','seoDescription'));
    }
    public function advice() {
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        $seoDescription = $this->getSeoDesc($services);
        return view('advice',compact('services','phones','email','address','seoDescription'));
    }
    public function service($slug_url) {
        $phones = $slug_url == 'pereshivka'?['+380507768199','+380974990668']:$this->phones;
        $email = $this->email;
        $address = $this->address;
        $service = Service::where('slug_url',$slug_url)->first();
        if(!$service){
            abort(404);
        }
        $services = Service::get();
        $seoDescription = "Надаємо широкий спектр послуг: $service->seo_desc";
        return view('service',compact('services','service','phones','email','address','seoDescription'));
    }
    public function advicePost(Request $request) {
        $name = $request->name;
        $phone = $request->phone;
        $service = Service::find($request->service);
        $serviceName = $service?$service->name:'невибрано';
        $customer = new Customer();
        $customer->name = $name;
        $customer->phone = $phone;
        $customer->service_name = $serviceName;
        $customer->save();
        $message = $request->message;
        $text = "Ім'я: $name\nТелефон: $phone\nПослуга: $serviceName\nДодатковий коментар: $message";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('advice-success', compact('phones','email','address','services'));
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
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('contact-success', compact('phones','email','address','services'));
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
        $phones = $this->phones;
        $email = $this->email;
        $address = $this->address;
        $services = Service::get();
        return view('newsletter-success', compact('phones','email','address','services'));
    }
    private function getSeoDesc($services){
        $desc = 'Надаємо широкий спектр послуг: ';
        foreach ($services as $service){
            $desc .= $service->seo_desc.', ';
        }
        $desc .= 'та багато іншого.';
        return $desc;
    }
}
