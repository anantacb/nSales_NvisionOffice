<?php

namespace App\Models\Company;

use App\Models\BaseModel;

class WebShopItemAttribute extends BaseModel
{
    protected $connection = 'mysql_company';
    protected $table = 'WebShopItemAttribute';
}
