<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catagory;
use App\Towel;

class HomeController extends Controller
{
	private $cattitle="";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','about',"contact"]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $cat="")
    {
		
		/*$categories = "something";
		return view('home',compact('categories'));
		
		$message="something";
		//either use like this or put "use Session;" on top and then use below without \
		\Session::flash('message', 'This is a message!'); 
		return view('home',compact('message'));*/
		
		//Getting information from "Catagories" table
		/* $catagories=Catagory::all()->where('catid', '=', 2);
		$count=count($catagories);
		return view('home',['catagory' => $catagories,'numcatagories' => $count]); */
		
		//Getting information from "Towels" table for given catagory
		//$towels=Towel::all()->where('catagoryid', '=', 1);
		if(isset($cat) && !empty($cat))
		{
			//return "You supplied a catagory";
			//This gets only specified columns
			
			$catagory=catagory::where('shortname','=',$cat)->get(['catid','categorytitle']);
			if(count($catagory)>=1)
			{
				$catid=$catagory[0]->catid;
				$cattitle=$catagory[0]->categorytitle;
				
				//dd($cattitle,$catid);
			}	
			else
			{
				//The catagory put in URL is invalid.  Display error
				/* $catid=1;
				$cattitle='Barber towels'; */
				//dd($cattitle,$catid);
				return view("shared.errorpage")->with(['error'=>'Invalid towel catagory',
				'detailed_message'=>'"' . $cat . '" that you typed in the URL is unavailable OR is an invalid one.']);
			}
		}
		else
		{
			//Didn't put catagory name in the URL.  Display "Barber towels" catagory.
			$catid=1;
			$cattitle='Barber towels';
			//dd($cattitle,$catid);
			
		}
			
			
		$towels=Towel::where('catagoryid','=',$catid)->paginate(5);
		$count=count($towels);
		
		
		return view('home',['catname'=>$cattitle,'towels' => $towels,'numtowels' => $count]);
		//$request->session()->flash('status', 'Task was successful!'); //undefinted var request				
		//this way works too
		//return view('home4',compact("catagories")); //to try
		//return $catagories; //dumps on the page
		
    }
	
	public function about()
{
 return view('about');
 }

 public function contact()
{
 return view('contact');
}
}
