<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skilsets() {
        return $this->hasMany(SkillSets::class);
    }

    public function jobs() {
        return $this->belongsTo(Jobs::class);
    }
}
