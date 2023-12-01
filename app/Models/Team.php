<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='teams';
    protected $fillable = ['name','position','description','rank','image','twitter','linked_in','facebook','instagram','status','created_by','updated_by',];
    // Define relationships
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by','id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by','id');
    }
}
