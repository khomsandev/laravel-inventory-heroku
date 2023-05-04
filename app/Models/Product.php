<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
        'user_id'
    ];

    /* Relationship to table Users โดยอ้างอิง MOdel User */
    public function users(){
        // return $this->belongsTo(User::class);

        // SELECT * 
        // FROM products
        // INNER JOIN users
        // ON products.user_id = users.id;

        // ดึงข้อมูลจากการ join ตารางมาทั้งหมด
        // return $this->belongsTo('App\Models\User','user_id');

        // ดึงข้อมูลจากการ join ตารางมาแค่ field 'id','fullname','avatar'
        return $this->belongsTo('App\Models\User','user_id')->select(['id','fullname','avatar']);
    }
}
