<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/ikdGsSA7mZUX2VpSXnl9anTA2qForrxe63qKHI3B.jpg';
        
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User:: class);
    }
}
