<?php

namespace App\Services\Company;

use App\Contracts\ServiceDto;
use Illuminate\Http\Request;

interface CompanyServiceInterface
{
    public function getAllCompanies(Request $request): ServiceDto;
}
