<?php namespace App\Http\Controllers;

use App\User;
use App\messege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
#Не прочитанные сообщения
	public function index()
	{
		$usr = Auth::user()->name;
		$messeges = messege::where('recipient', $usr)->where('status', false)->get();
		return view('home', compact('messeges'));
	}
#Прочитанные
	public function junk()
	{
		$usr = Auth::user()->name;
		$messeges = messege::where('recipient', $usr)->where('status', true)->get();
		return view('home', compact('messeges'));
	}
#Изменение статуса сообщения 
	public function read($id)
	{
		messege::find($id)->update(array('status' => true));;
		return redirect('/');
	}
#Отправка сообщения
	public function send()
	{
		return view('send');
	}

	public function sendto(Request $request)
	{
		$sender = Auth::user()->name;
		$user = $request->input('user_to');
		$message = $request->input('message');

		if (User::where('name', $user)->first())
		{
		messege::create(['sender' => $sender, 
		'recipient' => $user, 
		'messege' => $message,]);
		return redirect('send');
		}
		return view('errors.user_not_exist');
	}

}