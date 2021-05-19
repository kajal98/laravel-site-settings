<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'title', 'email', 'copy_right', 'facebook', 'instagram', 'twitter', 'youtube', 'linkedin'
    ];
}
