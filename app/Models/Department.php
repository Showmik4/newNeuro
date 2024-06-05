<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;    
    protected $table = 'department';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'title', 'description', 'status','dept_image',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'deptId', 'id');
    }
}