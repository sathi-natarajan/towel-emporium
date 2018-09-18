@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
					<h3>THANK YOU</h3>
				</div>

                <div class="card-body">
					<?php
						//require_once app_path() . '/vendor/autoload.php';
						//require_once __DIR__.'/vendor/autoload.php';
						try {
							// Create the SMTP Transport
							$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
								->setUsername($gmailcredu)
								->setPassword($gmailcredp)
								->setEncryption('tls'); //MUST.  Otherwise, Gmail will not accept mail
								//This is IN ADDITION TO allowing access to "unsafe apps" from your account in
								//gmail itself.
								
 
							// Create the Mailer using your created Transport
							$mailer = new Swift_Mailer($transport);
						 
							// Create a message
							$message = new Swift_Message();
						 
							// Set a "subject"
							$message->setSubject('Demo message using the SwiftMailer library.');
						 
							// Set the "From address"
							$message->setFrom([$gmailcredu => 'Towel Emporium']);
 
							// Set the "To address" [Use setTo method for multiple recipients, argument should be array]
							//$message->addTo($email,'{{$fullname}}');
							$message->addTo($gmailcredu,'{{$fullname}}');
						 
							// Add "CC" address [Use setCc method for multiple recipients, argument should be array]
							//$message->addCc('recipient@gmail.com', 'recipient name');
 
							// Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
							//$message->addBcc('recipient@gmail.com', 'recipient name');
						 
							// Add an "Attachment" (Also, the dynamic data can be attached)
							/* $attachment = Swift_Attachment::fromPath('example.xls');
							$attachment->setFilename('report.xls');
							$message->attach($attachment); */
						 
							// Add inline "Image"
							/* $inline_attachment = Swift_Image::fromPath('nature.jpg');
							$cid = $message->embed($inline_attachment); */
 
							// Set the plain-text "Body"
							/* $message->setBody("CONTENTS OF YOUR EMAIL:
								Full name: $fullname
								Email:  $email
								Comments and Suggestions:
										$cands
								Newsletter needed?: $newsletter
							"); */
							// Set a "Body"
							/* $message->addPart('This is the HTML version of the message.<br>Example of inline image:<br><img src="'.$cid.'" width="200" height="200"><br>Thanks,<br>Admin', 'text/html'); */
							
							$message->addPart("<p>CONTENTS OF YOUR EMAIL:</br/>
								Full name: $fullname<br/>
								Email:  $email<br/>
								Comments and Suggestions:<br/>
										$cands<br/>
								Newsletter needed?: $newsletter
							",'text/html');
							
							
 
							// Send the message
							$result = $mailer->send($message);
							?>
							<p>We thank you very much for sending us your valuable comments and/or suggestions.
								If you had checked "Need newsletter" checkbox on the form, we will be sure to subscribe you to our newsletter system and send you a note to your email address.</p>
							<?php
						} catch (Exception $e) {
						  echo $e->getMessage();
						}
					?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
