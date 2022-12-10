<?php

namespace App\Models\Cms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Date;
class CmsVerifikasi extends Model
{
    use HasFactory;

    protected $table = 'cms_verifikasi';

    protected $fillable = [
        'users_id',
        'status',
        'expired_at'
    ];

    public static function insertData($users_id){

        $save = CmsVerifikasi::create([
            "users_id"   =>$users_id,
            "status"     =>'waiting',
            "expired_at" =>Date::addDate(3)
        ]);

        return $save;
    }
}
