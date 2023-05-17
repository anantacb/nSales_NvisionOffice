<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmailConfigurationController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleSettingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TableFieldController;
use App\Http\Controllers\TableHelperController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
});

Route::prefix('auth')->middleware(['auth:api'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout']);
    Route::post('user', [UserController::class, 'authUserDetails']);
});

Route::middleware(['auth:api'])->group(function () {
    // Table
    Route::post('/tables', [TableController::class, 'getTables']);
    Route::post('/table/details', [TableController::class, 'getDetails']);
    Route::post('/table/delete', [TableController::class, 'delete']);
    Route::post('/create-table-preview-sql', [TableController::class, 'getCreateTablePreview']);
    Route::post('/create-table-save-and-execute', [TableController::class, 'createTableSaveAndExecute']);
    Route::post('/create-table-save-without-executing', [TableController::class, 'createTableSaveWithoutExecuting']);

    // TableField
    Route::post('/table-fields', [TableFieldController::class, 'getTableFields']);
    Route::post('/table-fields-operation-sql-previews', [TableFieldController::class, 'tableFieldsOperationPreviews']);
    Route::post('/table-fields-operations-save-without-executing', [TableFieldController::class, 'tableFieldsOperationsSaveWithoutExecuting']);
    Route::post('/table-fields-operations-save-and-execute', [TableFieldController::class, 'tableFieldsOperationsSaveAndExecute']);


    // Module
    Route::post('/modules', [ModuleController::class, 'getModules']);
    Route::post('/module/create', [ModuleController::class, 'create']);
    Route::post('/module/update', [ModuleController::class, 'update']);
    Route::post('/module/details', [ModuleController::class, 'details']);
    Route::post('/module/delete', [ModuleController::class, 'delete']);
    Route::post('/module/all', [ModuleController::class, 'getAllModules']);
    Route::post('/module/get-activated-and-available-modules-by-company', [ModuleController::class, 'getActivatedAndAvailableModulesByCompany']);
    Route::post('/module/get-activated-modules-by-company', [ModuleController::class, 'getActivatedModulesByCompany']);
    Route::post('/module/activate-module', [ModuleController::class, 'activateModule']);
    Route::post('/module/deactivate-module', [ModuleController::class, 'deactivateModule']);
    Route::post('/module/get-by-application', [ModuleController::class, 'getModulesByApplication']);


    // ModuleSetting
    Route::post('/module-settings', [ModuleSettingController::class, 'getModuleSettings']);
    Route::post('/module-setting/create', [ModuleSettingController::class, 'create']);
    Route::post('/module-setting/update', [ModuleSettingController::class, 'update']);
    Route::post('/module-setting/delete', [ModuleSettingController::class, 'delete']);
    Route::post('/module-setting/details', [ModuleSettingController::class, 'details']);
    Route::post('/module-setting/all-by-company', [ModuleSettingController::class, 'getAllModuleSettingsByCompany']);
    Route::post('/module-setting/update-by-company', [ModuleSettingController::class, 'updateModuleSettingsByCompany']);


    // Company
    Route::post('/companies', [CompanyController::class, 'getCompanies']);
    Route::post('/company/create', [CompanyController::class, 'create']);
    Route::post('/company/update', [CompanyController::class, 'update']);
    Route::post('/company/details', [CompanyController::class, 'details']);
    Route::post('/company/delete', [CompanyController::class, 'delete']);
    Route::post('/company/all', [CompanyController::class, 'getAllCompanies']);
    Route::post('/company/by-module-enabled', [CompanyController::class, 'getModuleEnabledCompanies']);


    // Helpers
    Route::post('/table-helper/get-enum-values', [TableHelperController::class, 'getEnumValues']);

    // Role
    Route::post('/roles/by-company', [RoleController::class, 'getRolesByCompany']);

    // User
    Route::post('/users', [UserController::class, 'getUsers']);
    Route::post('/user/details', [UserController::class, 'details']);
    Route::post('/user/update', [UserController::class, 'update']);
    Route::post('/user/delete', [UserController::class, 'delete']);
    Route::post('/users/developers', [UserController::class, 'getDevelopers']);

    Route::post('/users/company-users', [UserController::class, 'getCompanyUsers']);
    Route::post('/users/company-user/create', [UserController::class, 'createCompanyUser']);
    Route::post('/users/company-user/update', [UserController::class, 'updateCompanyUser']);
    Route::post('/users/company-user/delete', [UserController::class, 'deleteCompanyUser']);
    Route::post('/users/company-user/details', [UserController::class, 'companyUserDetails']);

    Route::post('/users/get-all-company-users', [UserController::class, 'getAllCompanyUsers']);

    // Application
    Route::post('applications/all', [ApplicationController::class, 'getAllApplications']);

    // EmailConfiguration
    Route::post('/email-configurations', [EmailConfigurationController::class, 'getEmailConfigurations']);
    Route::post('/email-configuration/create', [EmailConfigurationController::class, 'create']);
    Route::post('/email-configuration/update', [EmailConfigurationController::class, 'update']);
    Route::post('/email-configuration/delete', [EmailConfigurationController::class, 'delete']);
    Route::post('/email-configuration/details', [EmailConfigurationController::class, 'details']);
});
