<?php

namespace App\Services\TableField;

use App\Contracts\ServiceDto;
use Illuminate\Http\Request;

interface TableFieldServiceInterface
{
    public function getTableFields(Request $request): ServiceDto;

    public function getGeneralTableFields(Request $request): ServiceDto;

    public function getCompanySpecificTableFields(Request $request): ServiceDto;

    public function getCompanyAllTableFields(Request $request): ServiceDto;

    public function getTableFieldsOperationPreviews(Request $request): ServiceDto;

    public function tableFieldsOperationsSaveAndExecute(Request $request): ServiceDto;

    public function tableFieldsOperationsSaveWithoutExecuting(Request $request): ServiceDto;
}
