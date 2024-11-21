<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'face_name',
        'face_email',
        'picture',
        'fb_id',
        'fb_access_token',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function facebookPages()
    {
        return $this->hasMany(FacebookPage::class);
    }
}
