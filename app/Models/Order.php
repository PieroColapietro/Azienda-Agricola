<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fruit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'number',
        'email',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fruits(){
        return $this->belongsToMany(Fruit::class);
    }
}
