<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
    protected $fillable = ['title', 'body', 'date', 'hash',];

    public function getRouteKeyName()
    {
        return 'hash';
    }
}
