<?php

namespace App\Services\EmailConfiguration;

use App\Contracts\ServiceDto;
use Illuminate\Http\Request;

interface EmailConfigurationServiceInterface
{
    public function getEmailConfigurations(Request $request): ServiceDto;

    public function getCompanyEmailConfigurations(Request $request): ServiceDto;

    public function create(Request $request): ServiceDto;

    public function update(Request $request): ServiceDto;

    public function delete(Request $request): ServiceDto;

    public function details(Request $request): ServiceDto;
}
