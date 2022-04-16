<?php

class Mailer {
    
    const sentFrom = 'peaceplayers@gmail.com';
    public $sendTo;
    public $subject; 
    public $message;
    public $headers;
    public $errors = [];
    
    public function __construct ($sendTo, $subject, $message) {
        $this->sentFrom = self::sentFrom;
        $this->sendTo = $sendto;
        $this->subject = $subject; 
        $this->message = $message;
    }

    public function setTo ($email, $name) {
        return $this->sendTo = $email;
    }

    public function getTo () {
        return $this->sendTo;
    }

    public function getFrom () {
        return $this->sentFrom;
    }

    public function setSubject ($subject) {
        return $this->subject = $subject;
    }

    public function getSubject () {
        return $this->subject;
    }

    public function setMessage ($message) {
        $this->message = $message;
        return $this;
    }

    public function getMessage () {
        return $this->message;
    }

    public function setHeader () {
        $headers = 'From: ' . $this->getFrom() . "\r\n" .
            'Reply-To: ' . $this->getFrom() . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->headers = $headers; 
        return $this;
    }

    public function send () {
        $to = $this->sendTo;
        $from = $this->sentFrom;
        $subject = $this->subject; 
        $message = $this->message;
        $headers = $this->headers;

        return mail($to, $subject, $message, $headers);

    }
}