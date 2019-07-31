<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\MailingList;
use App\Mailer\Mail;

$list = new MailingList();
$list->subject("Wombat Wisdom")
     ->message("Welcome to Wombat Wisdom")
     ->addEmail("bob@bob.com")
     ->addEmail("yoko@ono.com");

$list->sendWith(new Mail());