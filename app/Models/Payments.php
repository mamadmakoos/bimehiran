<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'payments';

    public $timestamps = false;
public static function statusToFa($status){

    $result = [
        "PENDING" => ["در انتظار پرداخت","danger"],
        "UNVERIFY" => ["تایید نشده توسط بانک","warning"],
        "SUCCESS" => ["پرداخت شده","success"]
    ];

    return $result[$status];

}
}
