<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    protected $timestamps= true ;
    protected $fillable = ['id', 'name','price','description','expire_date','quantity','category_id','img_url','owner_id',]; 
}
