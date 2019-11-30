<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'user_id', 'slug', 'name', 'short_name', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'status', 'file'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
