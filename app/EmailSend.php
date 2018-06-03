<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSend extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_id', 'send_date'
    ];

    public function email()
    {
        return $this->belongsTo(Email::class);
    }
}
