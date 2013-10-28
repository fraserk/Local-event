<?php

class EvntsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $evnts = Evnt::all();
        return View::make('evnts.index')->with('evnts',$evnts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $venue = Venue::lists('venue_name','id');
        return View::make('evnts.create')->with('venues', $venue);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
       
       $v = Validator::make(Evnt::$rules, Input::all());
       if ($v->fails())
       {
        return Redirect::route('evnts.create')->witherrors($v)->withinput();
       }   


       $user = Auth::user()->id; 
       $evnt = New Evnt(array(
        'name' => Input::get('name'),
        'user_id' => $user,
        'when' => Input::get('when'),
        'detail' => Input::get('detail'),
        //'flier' => $filename
        ));

        $venue = Venue::find(Input::get('venue'))->Evnts()->save($evnt); 
        return  Redirect::route('upload',$venue->id)->with('message','Event Added Successfully.  Great Job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $evnt = Evnt::find($id);

        return View::make('evnts.show')->with('evnt',$evnt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $evnt = Evnt::find($id);
        return View::make('evnts.edit')->with('evnt',$evnt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        $id = Input::get('id');

        $evnt = Evnt::find($id)->first();

        $evnt->name = Input::get('name');
        $evnt->venue = Input::get('venue');
        $evnt->when = Input::get('when');
        $evnt->detail = Input::get('detail');

        $evnt->save();

        return Redirect::route('evnts.show', $id)->with('message','Event updated...');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $evnt = Evnt::find($id);
        $evnt->delete();

        return Redirect::route('evnts.index')->with('message','Event soft Deleted...');
    }

    public function GetUpload($id)
    {
        $evnt = Evnt::find($id);
        return View::make('evnts.upload',compact('evnt'));
    }

    public function PostUpload()
    {
        
        
        
        $evnt_id = Input::get('evnt_id');
        if (Input::hasfile('flier'))
        {
            $extension = Input::file('flier')->getClientOriginalExtension();
            $filename = Str_random(8) .'.' . $extension;
            $evnt = Evnt::find($evnt_id);
            $evnt->flier = $filename;
            $evnt->save();  
            $destinationpath = 'uploads/'.$evnt->id ;           
            Input::file('flier')->move($destinationpath,$filename);
            return 'file upload';
        }
    }

}