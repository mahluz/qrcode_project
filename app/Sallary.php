<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sallary extends Model
{
    protected $table = "salaries";
    protected $fillable = ["people_id","date_salary","salary"];
}
