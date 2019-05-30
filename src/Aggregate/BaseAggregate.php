<?php

declare(strict_types=1);

namespace Cafe\Aggregate;

class BaseAggregate
{
    private $recordedEvents;

    public function recordEvent($event) : void
    {
        $this->recordedEvents[] = $event;
    }

    public function getRecordedEvents() : array
    {
        return $this->recordedEvents;
    }
}