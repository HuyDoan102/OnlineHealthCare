<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Article;
use App\Role;
use App\Field;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

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

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class, 'specialties','user_id', 'field_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
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
