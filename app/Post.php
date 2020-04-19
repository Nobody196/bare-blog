<?php

namespace App;

use App\Traits\AccessesRules;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use AccessesRules;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'message', 'user_id',
    ];


    public static $rules = [
        'title' => 'required|min:1|max:88|string',
        'message' => 'required|string|max:100000'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
