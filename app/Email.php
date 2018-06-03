<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    const EMAIL_INFO_DEFAULT = 'info@primariesreus.cat';
    const EMAIL_DELEGATE_LEGAL_DEFAULT = 'delegatdades@primariesreus.cat';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'text', 'email_from', 'email_to', 'email_type_id'
    ];

    public function emailType()
    {
        return $this->belongsTo(EmailType::class);
    }
}
