<?php

namespace Moecasts\Laravel\Wallet\Interfaces;

use Moecasts\Laravel\Wallet\Interfaces\Assemblable;
use Moecasts\Laravel\Wallet\Models\Wallet;

interface Transferable extends Assemblable
{
    public function getReceiptWallet(string $currency): Wallet;
}
