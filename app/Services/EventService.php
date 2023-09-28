<?php

namespace App\Services;

use App\Models\Event;

use App\Services\ClientService;
use Illuminate\Database\Eloquent\Collection;

class EventService
{
    static function getClients(): Collection
    {
        return ClientService::allClients();
    }
}