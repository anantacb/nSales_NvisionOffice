<?php

namespace App\Models\Company;

use App\Models\BaseModel;

class ShopifyItemMetaMapping extends BaseModel
{
    protected $connection = 'mysql_company';
    protected $table = 'ShopifyItemMetaMapping';
}
