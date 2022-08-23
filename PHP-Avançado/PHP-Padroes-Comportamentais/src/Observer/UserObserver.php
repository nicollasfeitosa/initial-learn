<?php

namespace SON\Observer;

class UserObserver implements \SplObserver
{
    private $changedUsers = [];
    private $emails = [];

    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;

        if (in_array($subject->getEmail(), $this->emails))
        {
            throw new \Exception("Duplicated value {$subject->getEmail()}");
        }
        $this->emails[] = $subject->getEmail();
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
