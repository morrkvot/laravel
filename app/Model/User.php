<?php

use Cog\Contracts\Love\Reacterable\Models\Reacterable as ReacterableContract;
use Cog\Laravel\Love\Reacterable\Models\Traits\Reacterable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements ReacterableContract
{
    use Reacterable;
}