<?php

namespace Maximof\Laravel8Calendar;

interface IdentifiableEvent extends Event
{

    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId();

}