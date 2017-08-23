<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'user_id', 'name', 'github_link'
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
