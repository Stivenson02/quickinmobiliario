<?php

namespace QuickInmobiliario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function commission() {
        return $this->hasOne(Commission::class);
    }

    public function requests() {
        return $this->hasMany(Request::class);
    }

    public function punctuations() {
        return $this->hasMany(Punctuation::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function user_type() {
        return $this->belongsTo(UserType::class);
    }

    public function properties() {
        return $this->belongsToMany(Property::class, 'users_has_properties');
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'users_has_projects');
    }

    public function price_plans() {
        return $this->belongsToMany(PricePlan::class, 'users_has_plans');
    }

}
