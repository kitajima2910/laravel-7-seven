<?php

namespace App\PaymentGateway;

use Illuminate\Support\Facades\Facade;

class PaymentFacade {
    protected static function getFacadeAccessor() {
        return 'payment';
    }
}