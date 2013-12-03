  <?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function missingMethod($parameters)
	{
	    return Redirect::route('home');
	}
	public function dashboard()
	{
       // return View::make('user.login');
		$id = Auth::user()->id;
		$evnts = User::find($id)->evnts()->paginate(15);
		 //dd($evnts);
		return View::make('user.dashboard')->with('evnts',$evnts);
	}

	public function login()
	{
        return View::make('user.login');
	}


	public function loginck()
	{
		
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username'=> $username,'password'=> $password)))
		{
			return Redirect::intended('dashboard');
		}

		return Redirect::route('login')->withInput()->with('message','Error: Username/Password incorrect');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('user.signup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, User::$rules);
		If ($v->fails())
		{
			return Redirect::route('user.create')->witherrors($v)->withInput();
		}
		$user = new User;
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::intended('/');


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return Redirect::route('login');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::route('login');

	}

}
