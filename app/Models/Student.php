<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'course', 'email'];

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $model->student_id = 'ST-'.str_pad($model->id, 7, '0', STR_PAD_LEFT);
            $model->save();
        });
    }
}
