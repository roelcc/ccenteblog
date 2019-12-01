<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_uses';

    protected $fillable = [
        'user_id', 'slug', 'title', 'sub_title_1', 'sub_title_2', 'question_0', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'status', 'file', 'picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(AboutUsImage::class);
    }
}
