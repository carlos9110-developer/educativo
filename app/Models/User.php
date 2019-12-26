<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table    = "users";
    protected $fillable = [];// con esto quito todas las restricciones
    protected $guarded  = ['id']; // id
}
