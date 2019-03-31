<?php
/**
 * Created by PhpStorm.
 * User: Haris
 * Date: 3/29/2019
 * Time: 11:46 AM
 */
namespace Zalluq\Contactus\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zalluq\Contactus\Models\Contact;
use Zalluq\Contactus\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contactus::contactus');
    }
    public function send(Request $request)
    {
        $data = $request->all();
        Mail::to(config('contactus.'.$data['type'].'.email'))->send(new ContactMailable($request->all()));
//        Mail::to('mage.store11@gmail.com')->send(new ContactMailable($request->all()));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
