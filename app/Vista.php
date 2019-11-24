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

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function rsvpYes()
    {
        $this->rsvp_yes++;
        $this->save();
    }

    public function rsvpNo()
    {
        $this->rsvp_no++;
        $this->save();
    }
}
