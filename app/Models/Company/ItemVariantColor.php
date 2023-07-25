<?php

namespace App\Models\Company;

use App\Models\BaseModel;
use Awobaz\Compoships\Compoships;

class ItemVariantColor extends BaseModel
{
    use Compoships;

    protected $connection = 'mysql_company';
    protected $table = 'ItemVariantColor';
}
