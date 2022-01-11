<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_name',
    ];

    public function User()
    {

    	return $this->belongTo(User::class);
    } 

    public function task(){

        return $this->hasOne(Task::class, 'category_id','id');
    }
}
