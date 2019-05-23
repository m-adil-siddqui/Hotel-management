<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserInfo;
use App\Reservation;
use App\Customer;
use App\Room;
use App\Payment;
use App\Contact;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $customers = Customer::all();
       $reservation = Reservation::all(); 
       $contacts = Contact::all();
       $count = Reservation::where('status', 'Not confirm')->count();
       return view('admin.home', compact('customers', 'reservation', 'count','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserInfo $request)
    {
        if($request->code != $request->code1){
            return back()->with('error', 'Please enter valid code');
        }
        else{

            $date1 = date_create($request->cin);
            $date2 = date_create($request->cout);
            $ndays = date_diff($date2, $date1);
          //  dd($ndays->days);
         
            $customer = Customer::create([
              'title' => $request->title,
              'fname' => $request->fname,
              'lname' => $request->lname,
              'email' => $request->email,
              'nationality' => $request->nation,
              'country' => $request->country,
              'phone' => $request->phone
            ]);

            $created = Reservation::create([
              'customer_id' => $customer->id,
              'room' => $request->troom,
              'bed' => $request->tbed,
              'num_room' => $request->nroom,
              'meal' => $request->meal,
              'cin' => $request->cin,
              'cout' => $request->cout,
              'num_days' => $ndays->days,
              'status' => 'Not confirm'
            ]);

            if($created){
                return back()->with('message', 'Your Info have been added');
            }
            else{
                return back()->with('message', 'Something went wrong');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        $rooms = Room::all();
        $payments = Payment::all(); 
        return view('admin.room',compact('reservation','rooms','payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }
    

    public function showConfirmedUser($id)
    { 
      $reser = Reservation::find($id);
      return view('admin.show', compact('reser'));
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
    }
}
