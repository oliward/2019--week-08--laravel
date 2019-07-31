<?php

namespace App\Mailer;

interface MailerInterface
{
    public function to($to);
    public function from($from);
    public function subject($subject);
    public function send();
}