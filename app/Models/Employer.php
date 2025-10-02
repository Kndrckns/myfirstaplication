<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Employer extends Model
{
use HasFactory;
// in app/Models/Employer.php
public function jobs()
{
return $this->hasMany(\App\Models\Job::class);
}
}