<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;

class personController extends Controller
{
    //

    public function index()
    {
        //
        $people = Person::all();
        return view('admin.person.index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.person.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $person = new Person();

        $this->validate($request,[
            'email' => 'required|unique:people|max:255|min:5|email',

        ]);

        $person->firstname = $request->firstname;
        $person->lastname = $request->lastname;
        $person->address1 = $request->address1;
        $person->address2 = $request->address2;
        $person->phone = $request->phone;
        $person->email = $request->email;
        $person->city = $request->city;
        $person->country = $request->country;
        $person->postalcode = $request->postalcode;
        $person->notes = $request->notes;
        $person->save();

        foreach ($request->img as $image){

            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/person/'),$filename);
            $photos = $person->photos()->create([
                'person_id' =>$person->id,
                'photo' => $filename
            ]);
        }

        return redirect('/admin/person')->withFlashMessage('person Added !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $person = Person::find($id);
        return view('admin.person.show',compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $person = Person::find($id);
        return view('admin.person.edit',compact('person'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $person = Person::find($id);

        $person->firstname = $request->firstname;
        $person->lastname = $request->lastname;
        $person->address1 = $request->address1;
        $person->address2 = $request->address2;
        $person->phone = $request->phone;
        $person->email = $request->email;
        $person->city = $request->city;
        $person->country = $request->country;
        $person->postalcode = $request->postalcode;
        $person->notes = $request->notes;
        $person->save();

        return redirect('/admin/person')->withFlashMessage('person Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $person = Person::find($id);
        foreach ($person->photos as $photo) {
            unLink(base_path() . '/public/uploads/person/' . $photo->photo);
        }

        //delete DB record
        $person->photos()->delete();
        $person->delete();
        return redirect()->back()->withFlashMessage('person Deleted !!');

    }
}
