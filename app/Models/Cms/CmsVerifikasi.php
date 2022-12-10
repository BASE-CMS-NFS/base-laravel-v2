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
        'email',
        'status',
        'expired_at'
    ];

    public static function insertData($email){

        $save = CmsVerifikasi::create([
            "email"     =>$email,
            "status"     =>'waiting',
            "expired_at" =>Date::addDate(3)
        ]);

        return $save;
    }
}
