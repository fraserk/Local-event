<?php

class EvntsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->beforefilter('auth', array('except'=>array('index','show')));
    }
    public function index()
    {
        $evnts = Evnt::with('venue')->paginate(20);
        return View::make('evnts.index')->with('evnts',$evnts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        //$myvenue = User::find($user)->venues()->lists('venue_name','id');
        $venue = User::find($user)->venues()->lists('venue_name','id');
        return View::make('evnts.create')->with('venues', $venue);
        //dd($myvenue);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {   
       $input = Input::all();
       
       $v = Validator::make($input,evnt::$rules);
       if ($v->fails())
       {
        return Redirect::route('evnts.create')->witherrors($v)->withinput();
       }   

       //$date = Input::get('year') .'/' . .'/' .Input::get('day') .' ' .Input::get('hour') .':'.Input::get('minute') .':' .'00';
       
       $dt = Carbon::create(Input::get('year'), Input::get('month'), Input::get('day') , Input::get('hour'), Input::get('minute'));
      // return dd($dt);
       $user = Auth::user()->id; 
       $evnt = New Evnt(array(
        'name' => Input::get('name'),
        'user_id' => $user,
        'when' => $dt,
        'detail' => Input::get('detail'),
        'admission' => Input::get('admission')
        //'flier' => $filename
        ));

        $venue = Venue::find(Input::get('venue'))->Evnts()->save($evnt); 
        return  Redirect::route('upload',$venue->slug)->with('message','Event Added Successfully.  Great Job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $evnt = Evnt::where('slug','=',$slug)->first();
        //return $evnt;
        return View::make('evnts.show',compact('evnt'));
       //return dd($evnt->when->diffforhumans());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $venue = Venue::lists('venue_name','id');
        $evnt = Evnt::where('slug','=',$slug)->first();

        return View::make('evnts.edit')->with('evnt',$evnt)->with('venues',$venue);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($slug)
    {
        //$id = Input::get('id');
         $input = Input::all();
       
       $v = Validator::make($input,evnt::$rules);
       if ($v->fails())
       {
        return Redirect::route('evnts.create')->witherrors($v)->withinput();
       } 
         $dt = Carbon::create(Input::get('year'), Input::get('month'), Input::get('day') , Input::get('hour'), Input::get('minute'));
        $evnt = Evnt::where('slug','=',$slug)->first();

        $evnt->name = Input::get('name');
        $evnt->venue_id = Input::get('venue');
        $evnt->when = $dt;
        $evnt->detail = Input::get('detail');

        $evnt->save();

        return Redirect::route('evnts.show', $slug)->with('message','Event updated...');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function remove($slug)
    {   
        $evnt = Evnt::where('slug','=',$slug)->first();
        //return Redirect::route('remove',compact('evnt'));
        return View::make('evnts.destroy',compact('evnt'));

    }
    public function destroy($slug)
    {
        $evnt = Evnt::where('slug','=',$slug)->first();
        $evnt->delete();

        return Redirect::route('dashboard')->with('message','Event Deleted...');
    }

    public function GetUpload($slug)
    {
        $evnt = Evnt::where('slug','=',$slug)->first();
        return View::make('evnts.upload',compact('evnt'));
    }

    public function PostUpload()
    {
        
        $input = Input::all();
        $rules = array( 'flier'=>'image|mimes:jpg,gif,png,jpeg|max:3000|required') ;
        $v = Validator::make($input, $rules);

        if ($v->fails())
        {

            return Redirect::route('upload',Input::get('evnt_id'))->witherrors($v);
        }
        
        $evnt_id = Input::get('evnt_id');
        if (Input::hasfile('flier'))
        {   
            $imgwidth = getimagesize(Input::file('flier'));
            $extension = Input::file('flier')->getClientOriginalExtension();
            $filename = Str_random(8) .'.' . $extension;
            $evnt = Evnt::where('slug','=',$evnt_id)->first();
            $evnt->flier = $filename;
            $evnt->save();  
            $destinationpath = 'uploads/'.$evnt->id ;
            Input::file('flier')->move($destinationpath,$filename);

            if($imgwidth[0] > '340') //resize image if its bigger than 350 px
            {
                //resize the image
                Image::make('uploads/'.$evnt->id .'/'.$evnt->flier)->resize(340, null, true)->save('uploads/'.$evnt->id .'/' .$evnt->flier);

            }           

            //create the thumbnail as usuall
            Image::make('uploads/'.$evnt->id .'/'.$evnt->flier)->resize(200, 135, true)->save('uploads/'.$evnt->id .'/' .'thumb_'.$evnt->flier);



            return Redirect::route('upload',$evnt->slug)->with('message','file uploaded');
        }
    }

}