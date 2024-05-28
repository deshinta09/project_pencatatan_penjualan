<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Customer extends Model 
{
    use HasFactory, Notifiable, Authenticatable;

    protected $fillable = ['name', 'email', 'address', 'password', 'phone', 'role'];

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}