<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/LxFLujbZ3jy0Xl5oMTUkoTWedsrt4D3IJNTKtlJ4.png';
        return '/storage/' . ($this->image) ? $this->image : 'profile/LxFLujbZ3jy0Xl5oMTUkoTWedsrt4D3IJNTKtlJ4.png';
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
