<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_table extends Model
{
    use HasFactory;
    
    protected $table = 'orders_tables';
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
       'user_id',
       'ItemId',
       'itemName',
       'address',
       'itemDescription',
       'itemPrice',
       'status',
   ];
}
