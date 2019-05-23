<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));

       // return view('admin.rooms.create', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rule = [
            'troom' => 'required|string',
            'bed' => 'required|string'
        ];

        $msg = [
           'troom.required' => 'Please select room type',
           'bed.required' => 'Please select bed type'
        ];

       // $errors = $this->validate($request,$rule, $msg);
       $check = Room::where([
                 ['troom', $request->troom],
                 ['bed', $request->bed]
             ])->first();

        if($check){
           $rooms = Room::all();
           return view('admin.rooms.index', compact('rooms'),['message' => 'Record already exist!!!']);
        // return view('protected.standardUser.includes.documents')->with('documents', $documents)->with('successMsg','Property is updated .');
        }
        $store = Room::create([
          'troom' => $request->troom,
          'bed' => $request->bed,
          'place' => 'Free'
           ]);
            $rooms = Room::all();
           
            //return response()->json($rooms);
           return view('admin.rooms.index', compact('rooms'));
           
        
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
       
        $delete = Room::find($id);
        $delete->delete();
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }
}
