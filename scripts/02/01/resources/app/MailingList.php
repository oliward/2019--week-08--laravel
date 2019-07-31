<?php

namespace App;

class MailingList
{
    private $emails;
    private $subject;

    public function __construct()
    {
        $this->emails = collect();
    }

    public function subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function message($message)
    {
        $this->message = $message;
        return $this;
    }

    public function addEmail($email)
    {
        $this->emails->push($email);
        return $this;
    }

    public function sendWith($mailer)
    {
        $mailer->from("training@develop.me");
        $mailer->subject($this->subject);

        $this->emails->each(function ($email) use($mailer) {
            $mailer->to($email)->send();
        });
    }
}