<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
//use App\Game;
 
class ContactController extends Controller
{
    public function index()
    {
         return view('contactus');
    }
    
     /* public function show(Game $id)
    {
        return view('games.show', ['game' => $id]);
    }  */
    
    public function create()
    {
        //return 'it works';
		  return view('games.create');
    }
	
	public function processcontact()
    {
        /* var_dump(request('title'));
        var_dump(request('publisher'));
        var_dump(request('releasedate'));
        var_dump(request('image')); */
		
		//https://vegibit.com/how-to-set-up-form-submission-in-laravel/
		
		$fullname= request('fullname');
        $email = request('email');
        $newsletter = request('newsletter');
		$commentssuggestions=request("commentssuggestions");
        //$game->image = request()->file('image')->store('public/images');
		return view('Thankyou',compact("fullname","email","newsletter","commentssuggestions"));
		
    }
}