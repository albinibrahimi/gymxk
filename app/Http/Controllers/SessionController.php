<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Part;
use App\Models\Muscle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $request->validate([
            'weight' => 'numeric|required',
            'reps' => 'numeric|required',
        ],[
            'weight.required' => 'Pesha është e domosdoshme.',
            'weight.numeric' => 'Pesha mund të jetë vetëm numër.',
            'reps.required' => 'Përsëritjet janë të domosdoshme.',
            'reps.numeric' => 'Përsëritjet mund të jenë vetëm numra.',
        ]
        
        );
        $date = date('d-m-y');
        $input = $request->all();
        $input['partid'] = $id;
        $input['date'] = $date;
        $input['userid'] = Auth::id();
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
        $sessions = Session::select('date')->where('userid', '=', Auth::id())->distinct('date')->paginate(6);
        ;

        return view('showsessions', compact('sessions'));
    }

    public function showsession($date)
    {
        $session = DB::table('sessions')
        ->join('parts', 'sessions.partid', '=', 'parts.id')
        ->select('sessions.*', 'parts.name','parts.image')
        ->where('date', '=', $date)
        ->where('userid','=',Auth::id())
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
