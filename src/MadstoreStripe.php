<?php

namespace Madnest\MadstoreStripe;

use Illuminate\Support\Str;
use Madnest\Madstore\Payment\Contracts\HasPayerInfo;
use Madnest\Madstore\Payment\Contracts\PaymentOption;
use Madnest\Madstore\Payment\Contracts\Purchasable;
use Madnest\Madstore\Payment\Contracts\PurchasableItem;
use Madnest\Madstore\Payment\Enums\PaymentStatus;
use Madnest\Madstore\Payment\PaymentResponse;
use Madnest\Madstore\Shipping\Contracts\ShippableItem;
use Madnest\MadstoreStripe\Items\PurchaseItem;
use Madnest\MadstoreStripe\Items\ShippingItem;

class MadstoreStripe implements PaymentOption
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = 'stripe'; // init Stripe
    }
}
