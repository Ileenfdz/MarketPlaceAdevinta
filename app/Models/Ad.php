<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad_name',
        'ad_image',
        'ad_description',
        'ad_seller',
        'ad_price',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
