<?php

namespace App\Data\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description'
    ];

    public function created_at(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value->diffForHumans(),
            set: fn ($value) => $value,
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
