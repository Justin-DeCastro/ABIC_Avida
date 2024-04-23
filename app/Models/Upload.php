<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path', 'name', 'description', 'price', 'contact', 'amenities', 'email', 'fullname', 'id_image'
    ];
}
