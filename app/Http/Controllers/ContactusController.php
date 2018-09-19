<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
//use App\Game;
 //use App\Mail\SendMailable;
class ContactusController extends Controller
{
   public function index()
    {
        return view('contactusform');
    }
    
	public function process()
    {
        /* var_dump(request('title'));
        var_dump(request('publisher'));
        var_dump(request('releasedate'));
        var_dump(request('image')); */
		
		//https://vegibit.com/how-to-set-up-form-submission-in-laravel/
		//display in a view
		/* $title= request('title');
        $publisher = request('publisher');
        $releasedate = request('releasedate');
		$vehicle = request('vehicle1');
		$gender = request('gender');
        //$game->image = request()->file('image')->store('public/images');
		return view('games.gamesformresults',compact("title","publisher","releasedate","vehicle","gender")); */
		
		//Send email - WORKS
		/* $fullname = request('fullname');
        $email = request('email');
		$cands=request("commentssuggestions");
		$newsletter = request('newsletter');
		\Mail::to('towel.emporium.dev@gmail.com')->send(new SendMailable($fullname,$email,$cands,$newsletter));
		return view('Thankyou'); */	
		
		//Possibilities - 'fullname' => 'required|unique:games
		$this->validate(request(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'commentssuggestions' => 'required',
        ]);
		
		$gmailcredu="towel.emporium.dev@gmail.com";
		$gmailcredp="towelempo";
		$fullname=request('fullname');
		$email = request('email');
		$cands=request("commentssuggestions");
		$newsletter = request('newsletter');
		if($newsletter==1)
			$newsletter="Yes";
		else
			$newsletter="No";
		
		//This way will work for the purpose but the page will look messed up.  Instead, see
		//"@include" in contactusemailsend blade view
		// return view('contactusemailsend',compact("fullname","email","cands","newsletter","gmailcredu","gmailcredp"))
		// .view("Thankyou");
		return view('contactusemailsend',compact("fullname","email","cands","newsletter","gmailcredu","gmailcredp"));
	}
	
}