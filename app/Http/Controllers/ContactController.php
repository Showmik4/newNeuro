<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function show()
    {
        return view('Backend.contact.index');
    }

    public function list()
    {
        $contacts = Contact::all();

        return datatables()->of($contacts)
            ->setRowAttr([
                'align' => 'center',
            ])->make(true);
    }
 
}
