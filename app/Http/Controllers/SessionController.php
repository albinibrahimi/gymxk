<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Part;
use App\Models\Muscle;
use Illuminate\Http\Request;
use DB;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $choosenpart = Part::find($id);
        
        return view('addsession', compact('choosenpart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $date = date('d-m-y');
        $input = $request->all();
        $input['partid'] = $id;
        $input['date'] = $date;
        Session::create($input);


        return redirect()->route('index')
                        ->with('success','Part created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        //
    }

    public function showsessions()
    {
        $sessions = Session::all()->unique('date');

        return view('showsessions', compact('sessions'));
    }

    public function showsession($date)
    {
        $session = DB::table('sessions')
        ->join('parts', 'sessions.partid', '=', 'parts.id')
        ->select('sessions.*', 'parts.name','parts.image')
        ->where('date', '=', $date)
        ->get();

        return view('showsession', compact('session'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        //
    }
}
