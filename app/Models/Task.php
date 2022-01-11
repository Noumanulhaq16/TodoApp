<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'work',
        'reminderTime',
        'status',
        'category_id',
    ];

    public function User()
    {

    	return $this->belongTo(User::class);
    } 

    public function category(){

        return $this->belongsTo(Category::class, 'category_id','id');
    }
    
}
