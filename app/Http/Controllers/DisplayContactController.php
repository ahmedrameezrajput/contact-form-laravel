<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Http\Request;

class DisplayContactController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get()->map(function ($contact) {
            $contact->delete_url = route('contacts.delete', $contact->id);
            return $contact;
        });

        return view('database', ['contacts' => $contacts]);
    }

    public function destroy($id)
    {
        DB::table('contacts')->where('id', $id)->delete();

        if (DB::table('contacts')->count() === 0) {
            DB::table('contacts')->truncate();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('editContact', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect('/database');
    }
}
