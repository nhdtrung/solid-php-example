<?php

/**
 * Dependency Inversion Principle Violation
 */
class Mailer
{
}

// In this case, the SendWelcomeMessage class depends on Mailer
// That means that if we would change the mailer service in use 
// we need to rewrite this class and violate the Open-Close Principle.
class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

/**
 * Refactored
 *
 * I want to send mail with any mail server I want
 * The solution is to develop an abstraction of mailer sender
 */
interface mailerInterface
{
    public function send();
}

class SMTPMailer implements mailerInterface
{
    public function send()
    {
    }
}

class GridMailer implements mailerInterface
{
    public function send()
    {
    }
}

class SendMessage
{
    private $mailer;

    public function __construct(mailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}

