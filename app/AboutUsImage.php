<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class AboutUsImage extends Model
{

    protected $fillable = ['file'];

//    public function getUrlFileAttribute()
//    {
//        return \Storage::url($this->file);
//    }

//    public function about_us()
//    {
//        return $this->belongsTo(AboutUs::class);
//    }


}
