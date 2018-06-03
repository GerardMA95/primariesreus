<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailType extends Model
{
    const EMAIL_QUESTION = 1;
    const EMAIL_REGISTER_CONF = 2;
    const EMAIL_DISABLE_REGISTER_CONF = 3;
    const EMAIL_DELETE_DATA_CONF = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
