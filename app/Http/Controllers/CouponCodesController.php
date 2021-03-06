<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    public function show($code)
    {
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable();

        return $record;
    }
}
