<?php

/**
 * Interface Segregation Principle Violation
 */

// This interface do more things
interface Workable
{
    public function canCode();

    public function code();

    public function test();
}

class Programmer implements Workable
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

// Tester do not need to know how to code
class Tester implements Workable
{
    public function canCode()
    {
        return false;
    }

    public function code()
    {
        throw new Exception('Opps! I can not code');
    }

    public function test()
    {
        return 'testing in test server';
    }
}

// Project manager do not need to know test right?
class ProjectManagement
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}

/**
 * Refactor
 *
 * Separate code and test to 2 interfaces
 * codeable and testable
 */
interface Codeable
{
    public function code();
}

interface Testable
{
    public function test();
}

/**
 * Depend on object, implements the right interface
 *
 * Program can codeable and testabe
 * Tester can testable
 * ProjectManager ...
 */
class Programmer implements Codeable, Testable
{
    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Testable
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Codeable $member)
    {
        $member->code();
    }
}

