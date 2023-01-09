<?php

namespace App\Http\Controllers;
use App\Models\Muscle;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MuscleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $muscles = Muscle::latest()->paginate(5);

            return view('index', compact('muscles'))
            ->with('i', (request()->input('page',1) -1) *5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Muscle::create($input);
      
        return redirect()->route('index')
                        ->with('success','Muscle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Muscle  $muscle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $muscle = Muscle::find($id);

        $parts = $muscle->parts;

        
        return view('show', compact('parts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muscle  $muscle
     * @return \Illuminate\Http\Response
     */
    public function edit(Muscle $muscle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muscle  $muscle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muscle $muscle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muscle  $muscle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muscle $muscle)
    {
        //
    }
}

