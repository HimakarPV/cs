<?php
namespace cs\Logic\Mailers;

use Illuminate\Support\Facades\Mail;

abstract class Mailer{

	public function sendTo($email, $subject, $fromEmail, $view, $data=[]){

		Mail::send($view, $data, function($message) use($email, $subject, $fromEmail){
			$message->from($fromEmail, 'roopam2194@gmail.com');
			$message->to($email)->subject($subject);
		});
	}
}