<?php
/**
 * Dependency Inversion Principle Violation
 */

class Mailer {}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

// Refactored
interface iMailer
{
    public function send();
}

class SMTPMailer implements iMailer
{
    public function send()
    {

    }
}

class SendGridMailer implements iMailer
{
    public function send()
    {

    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

