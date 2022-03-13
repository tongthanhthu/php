<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;


class SendMailJod implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($request)
    {
       $demo = new \stdClass();
       $demo->name =$request->input('name');
       Mail::to($request->input('mail_address'))->send(new WelcomeEmail($demo));
    }
}
