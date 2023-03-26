<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $contact = new Contact();
        $contact-> first_name = $request -> input('first_name');
        $contact-> last_name = $request -> input('last_name');
        $contact-> email = $request -> input('email');
        $contact-> subject = $request -> input('subject');
        $contact-> message = $request -> input('message');
        $contact-> isAnswered = false;
        $contact-> isRead = false;
        $contact-> save();

        return redirect()-> route('home')-> with('success',  trans('contacts.alert_success'));
    }

    public function allData(){
        $contact = new Contact;
        return view('messages-all',
            ['data_read' => $contact-> where('isRead', '=', true)-> orderBy('created_at', 'desc')-> get() ,
             'data_no_read' => $contact-> where('isRead', '=', false)-> orderBy('created_at', 'desc')-> get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        $data = $contact-> find($id);
        $data-> isRead = true;
        $data-> save();

        return view('one-message', ['data'=> $data]);
    }

    public function deleteMessage($id)
    {
        $contact = Contact:: find($id)-> delete();

        return redirect()-> route('messages-all',)-> with('success', trans('messages.alert_message_delete'));

    }
}
