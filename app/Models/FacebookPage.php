<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'facebook_account_id',
        'page_name',
        'page_id',
        'page_access_token',
        'page_email',
        'page_picture',
    ];
    public function facebookAccount()
    {
        return $this->belongsTo(FacebookAccount::class);
    }
}
