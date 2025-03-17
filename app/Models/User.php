<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Portfolio;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'created_by');
    }

     /* {{ Split Name }} */
    // public function getFirstNameAttribute()
    // {
    //     $splitName = explode(' ', $this->name, 2);
    //     return $splitName[0] ?? '';
    // }

    // public function getLastNameAttribute()
    // {
    //     $splitName = explode(' ', $this->name, 2);
    //     return $splitName[1] ?? '';
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
