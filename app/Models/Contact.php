<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    const DISK = 'public';
    protected $fillable = [
        'user_id', 'first_name', 'surname', 'company', 'job_title', 'phone_number', 'birthday', 'email', 'avatar', 'gender'
    ];

    protected $casts = [
        'phone_number' => 'json',
        'email' => 'json',
    ];
    protected static function booted(): void
    {
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', Auth::id());
        });

        static::creating(function (Contact $contact) {
            $contact->user_id = Auth::id();
        });
        static::forceDeleted(function (Contact $contact) {
            $avatar = $contact->avatar;
            if ($avatar) {
                Storage::disk(Contact::DISK)->delete($avatar);
            }
        });
    }
}
