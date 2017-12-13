<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Article;
use App\Role;
use App\Field;
use App\Comment;
use App\Specialtie;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_ID = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'email', 'password','avatar', 'gender', 'date_of_birth', 'address', 'phone', 'role_id'
    ];

    public function relatedDoctor()
    {
        $field_ids = $this->fields->pluck('id')->toArray();
        $doctor_ids = Specialtie::whereIn('field_id', $field_ids)
            ->where('user_id', '<>', $this->id)
            ->pluck('user_id')
            ->toArray();
        return User::whereIn('id', $doctor_ids)->limit(4)->orderBy('created_at', 'desc')->get();
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id'); //n - 1
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class, 'specialties','user_id', 'field_id')->withPivot('years_of_experience', 'dipoma'); //n - n
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    public function isAdmin()
    {
        return $this->role->id == static::ADMIN_ID;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
