<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Salida extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function entrada():BelongsTo{
        return $this->belongsTo(Entrada::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
