<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
	public $fullname;
	public $email;
	public $cands;
	public $newsletter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$email,$cands,$newsletter)
    {
        $this->fullname = $fullname;
		$this->email = $email;
		$this->cands = $cands;
		$this->newsletter = $newsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->view('contactusemailcontent',compact("fullname","email","newsletter")); //actual blade file containing the mail contents
		//'url' => route('activateUser',['token'=>$this->user->confirmation_token])
		 return $this->view('contactusemailcontent')
                    ->subject('Contact us email from your web site') // <- just add this line
                    ->with([
                        'fullname' => $this->fullname,
						'email' => $this->email,
						'cands'=>$this->cands,
						'newsletter' => $this->newsletter
                    ]);
    }
}