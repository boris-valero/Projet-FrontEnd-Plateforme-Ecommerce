<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function commands()
    {
        return $this->belongsToMany(Command::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'dimension',
        'material',
        'color',
        'description',
        'price',
        'picture',
    ];

    public $timestamps = false;
}

