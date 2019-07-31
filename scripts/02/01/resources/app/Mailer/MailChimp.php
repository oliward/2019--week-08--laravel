<?php

namespace App\Mailer;

class MailChimp
{
    private $to;
    private $from;
    private $subject;

    public function to($to)
    {
        $this->to = $to;
        return $this;
    }

    public function from($from)
    {
        $this->from = $from;
        return $this;
    }

    public function subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }


    public function send()
    {
        dump("Sending to {$this->to} with MailChimp");
    }
}
