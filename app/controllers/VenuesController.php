<?php

class VenuesController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function missingMethod($parameters)
    {
        return Redirect::to('/');
    }
    
    // public function index()
    // {
    //     //
    // }

    // *
    //  * Show the form for creating a new resource.
    //  *
    //  * @return Response
     
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = Auth::user()->id;
        $venue = New Venue(Input::except('Search'));   
        

        $message =User::find($user)->venues()->save($venue);
        return $message;

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function update($id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

}