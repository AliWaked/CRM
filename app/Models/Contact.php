<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'first_name', 'surname', 'company', 'job_title', 'phone_number', 'birthday', 'email', 'address', 'options', 'avatar',
    ];

    protected $casts = [
        'email' => 'json',
        'phone_number' => 'json',
    ];
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
