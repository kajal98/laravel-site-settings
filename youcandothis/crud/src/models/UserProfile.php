<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Image;

class UserProfile extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
        'slug' => [
        'source' => 'title',
        'onUpdate' => true
        ]
        ];
    }
    protected $fillable = ['user_id', 'dob','address','city','state','country','time_zone','phone','pincode','mobile','active'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
