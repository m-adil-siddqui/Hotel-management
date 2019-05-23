<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\Room;
use App\Customer;
use App\Reservation;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $payment = Payment::all();
       return view('admin.payment', compact('payment'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function profit()
    {
        $profit = Payment::all();
        return view('admin.profit', compact('profit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  Reservation::where('id', $request->id)->update(array('status' => $request->status));
        $reser = Reservation::findOrFail($request->id);
        
        $room = Room::where([
            ['bed',$request->bed],
            ['troom', $request->room]
        ])->update(['customer_id' => $request->cid, 'place' => 'Booked']);


        if($reser && $room)
        {
            $reser->status = $request->status;
            $reser->save();

            $created = Payment::create([
               'customer_id' => $request->cid,
               'reservation_id' => $request->id,
               'room_price' => $request->rprice,
               'meal_price' => $request->mprice,
               'bed_price' => $request->bprice,
               'total_price' => $request->tamount 
           ]);
        
           return redirect()->route('home')->with('message', 'Room has been confirmed');
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }
    

    public function print($id)
    {
        $payment = Payment::find($id);
        return view('admin.print', compact('payment'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
