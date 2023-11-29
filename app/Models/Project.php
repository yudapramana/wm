<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    
    protected $table = "projects";

    protected $primaryKey = 'id_project';
 
    protected $guarded = [];

    
   
}