<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ClientService
{
    static function allClients(): Collection
    {
        return Client::all();
    }
}