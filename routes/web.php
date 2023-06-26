<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MRs\SacController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MRs\SwabController;
use App\Http\Controllers\MRs\WjsaController;
use App\Http\Controllers\Aw\Ad0101Controller;
use App\Http\Controllers\Aw\Ad0201Controller;
use App\Http\Controllers\DashboardController;
use App\Models\StockPurchaseUsedChemicalList;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MRs\ExportController;
use App\Http\Controllers\Others\F05Controller;
use App\Http\Controllers\MRs\Ad00084Controller;
use App\Http\Controllers\MRs\Ad00086Controller;
use App\Http\Controllers\MRs\Ad00088Controller;
use App\Http\Controllers\MRs\Ad00396Controller;
use App\Http\Controllers\MRs\Ad01250Controller;
use App\Http\Controllers\MRs\Ad01254Controller;
use App\Http\Controllers\MRs\Ad01357Controller;
use App\Http\Controllers\Aw\AdFinanceController;
use App\Http\Controllers\Member\GroupController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Oils\F04che06Controller;
use App\Http\Controllers\Oils\F04che07Controller;
use App\Http\Controllers\Oils\F04che08Controller;
use App\Http\Controllers\Oils\F04che09Controller;
use App\Http\Controllers\Oils\F04che10Controller;
use App\Http\Controllers\Oils\F04che11Controller;
use App\Http\Controllers\Oils\F04che12Controller;
use App\Http\Controllers\Oils\F04che14Controller;
use App\Http\Controllers\Member\CategoryController;
use App\Http\Controllers\MRs\OtherSampleController;
use App\Http\Controllers\Oils\Fche040108Controller;
use App\Http\Controllers\Oils\Fche040109Controller;
use App\Http\Controllers\Oils\Fche040110Controller;
use App\Http\Controllers\Oils\Fche040111Controller;
use App\Http\Controllers\Oils\Fche040112Controller;
use App\Http\Controllers\Oils\Fche040113Controller;
use App\Http\Controllers\Oils\Fche040114Controller;
use App\Http\Controllers\Oils\Fche040115Controller;
use App\Http\Controllers\Others\F04che13Controller;
use App\Http\Controllers\Others\F04che15Controller;
use App\Http\Controllers\Others\F04che16Controller;
use App\Http\Controllers\Others\F04che17Controller;
use App\Http\Controllers\Others\F04che18Controller;
use App\Http\Controllers\Others\F04che21Controller;
use App\Http\Controllers\Others\F04che25Controller;
use App\Http\Controllers\Others\Fche0401Controller;
use App\Http\Controllers\HMMineral\MethodController;
use App\Http\Controllers\Oils\Oilfcar0502Controller;
use App\Http\Controllers\HMMineral\Car0500Controller;
use App\Http\Controllers\Member\MemberTypeController;
use App\Http\Controllers\Others\F05FinanceController;
use App\Http\Controllers\Others\Fche040027Controller;
use App\Http\Controllers\Others\Fche040028Controller;
use App\Http\Controllers\Others\Fche040038Controller;
use App\Http\Controllers\Others\Fche040039Controller;
use App\Http\Controllers\Others\Fche040051Controller;
use App\Http\Controllers\Others\Fche040052Controller;
use App\Http\Controllers\Others\Fche040120Controller;
use App\Http\Controllers\Others\Fche040121Controller;
use App\Http\Controllers\Others\Fche040122Controller;
use App\Http\Controllers\Others\Fche040123Controller;
use App\Http\Controllers\Others\Fche040124Controller;
use App\Http\Controllers\Others\Fche040125Controller;
use App\Http\Controllers\Others\Fche040126Controller;
use App\Http\Controllers\ChemicalReports\GCController;
use App\Http\Controllers\GCAnalysis\Car0501Controller;
use App\Http\Controllers\MRs\Ad00084FinanceController;
use App\Http\Controllers\MRs\Ad00086FinanceController;
use App\Http\Controllers\MRs\Ad00088FinanceController;
use App\Http\Controllers\MRs\Ad00396FinanceController;
use App\Http\Controllers\MRs\Ad01250FinanceController;
use App\Http\Controllers\MRs\Ad01254FinanceController;
use App\Http\Controllers\MRs\Ad01357FinanceController;
use App\Http\Controllers\Stock\MlMediaStockController;
use App\Http\Controllers\ChemicalReports\OilController;
use App\Http\Controllers\HMMineral\Che040036Controller;
use App\Http\Controllers\HMMineral\Che040037Controller;
use App\Http\Controllers\HMMineral\Che040040Controller;
use App\Http\Controllers\HMMineral\Che040042Controller;
use App\Http\Controllers\HMMineral\Che040043Controller;
use App\Http\Controllers\HMMineral\Che040044Controller;
use App\Http\Controllers\HMMineral\Che040045Controller;
use App\Http\Controllers\HMMineral\Che040047Controller;
use App\Http\Controllers\HMMineral\Che040048Controller;
use App\Http\Controllers\HMMineral\Che040049Controller;
use App\Http\Controllers\HMMineral\Che040050Controller;
use App\Http\Controllers\HMMineral\Che040141Controller;
use App\Http\Controllers\HMMineral\Che040146Controller;
use App\Http\Controllers\Member\BusinessTypeController;
use App\Http\Controllers\MRs\MicroTestMethodController;
use App\Http\Controllers\Nutritions\F04che02Controller;
use App\Http\Controllers\Nutritions\F04che24Controller;
use App\Http\Controllers\Nutritions\F04che27Controller;
use App\Http\Controllers\Nutritions\Fcar0501Controller;
use App\Http\Controllers\Nutritions\Fcar0502Controller;
use App\Http\Controllers\Stock\UsedGlassWareController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController;
use App\Http\Controllers\Wastewater\Fcar0500Controller;
use App\Http\Controllers\WaterTests\F04che19Controller;
use App\Http\Controllers\WaterTests\F04che20Controller;
use App\Http\Controllers\WaterTests\F04che26Controller;
use App\Http\Controllers\WaterTests\F04che28Controller;
use App\Http\Controllers\Oils\F04che06FinanceController;
use App\Http\Controllers\Oils\F04che07FinanceController;
use App\Http\Controllers\Oils\F04che08FinanceController;
use App\Http\Controllers\Oils\F04che09FinanceController;
use App\Http\Controllers\Oils\F04che10FinanceController;
use App\Http\Controllers\Oils\F04che11FinanceController;
use App\Http\Controllers\Oils\F04che12FinanceController;
use App\Http\Controllers\Oils\F04che14FinanceController;
use App\Http\Controllers\Stock\MLGeneralStockController;
use App\Http\Controllers\Stock\StockGlassWareController;
use App\Http\Controllers\ChemicalReports\OtherController;
use App\Http\Controllers\ChemicalReports\WaterController;
use App\Http\Controllers\GCAnalysis\Fche040029Controller;
use App\Http\Controllers\MicroWorksheet\F03M05Controller;
use App\Http\Controllers\MicroWorksheet\F03m06Controller;
use App\Http\Controllers\Nutritions\Fche040101Controller;
use App\Http\Controllers\Nutritions\Fche040102Controller;
use App\Http\Controllers\Nutritions\Fche040103Controller;
use App\Http\Controllers\Nutritions\Fche040104Controller;
use App\Http\Controllers\Nutritions\Fche040105Controller;
use App\Http\Controllers\Nutritions\Fche040106Controller;
use App\Http\Controllers\Nutritions\Fche040107Controller;
use App\Http\Controllers\Stock\CLEquipmentListController;
use App\Http\Controllers\Stock\MLEquipmentListController;
use App\Http\Controllers\Wastewater\Fche040053Controller;
use App\Http\Controllers\Wastewater\Fche040054Controller;
use App\Http\Controllers\Wastewater\Fche040055Controller;
use App\Http\Controllers\Wastewater\Fche040056Controller;
use App\Http\Controllers\Wastewater\Fche040057Controller;
use App\Http\Controllers\Wastewater\Fche040058Controller;
use App\Http\Controllers\Wastewater\Fche040059Controller;
use App\Http\Controllers\Wastewater\Fche040060Controller;
use App\Http\Controllers\Wastewater\Fche040061Controller;
use App\Http\Controllers\Wastewater\Fche040062Controller;
use App\Http\Controllers\Wastewater\Fche040063Controller;
use App\Http\Controllers\Wastewater\Fche040064Controller;
use App\Http\Controllers\WaterTests\Fche040116Controller;
use App\Http\Controllers\WaterTests\Fche040117Controller;
use App\Http\Controllers\WaterTests\Fche040118Controller;
use App\Http\Controllers\WaterTests\Fche040119Controller;
use App\Http\Controllers\WaterTests\Wtfcar0502Controller;
use App\Http\Controllers\GCAnalysis\Car0501TestController;
use App\Http\Controllers\MicroWorksheet\M010101Controller;
use App\Http\Controllers\MicroWorksheet\M020101Controller;
use App\Http\Controllers\MicroWorksheet\M030101Controller;
use App\Http\Controllers\MicroWorksheet\M040101Controller;
use App\Http\Controllers\MicroWorksheet\Mar0501Controller;
use App\Http\Controllers\MRs\MicroTestParameterController;
use App\Http\Controllers\Oils\Fche040108FinanceController;
use App\Http\Controllers\Oils\Fche040109FinanceController;
use App\Http\Controllers\Oils\Fche040110FinanceController;
use App\Http\Controllers\Oils\Fche040111FinanceController;
use App\Http\Controllers\Oils\Fche040112FinanceController;
use App\Http\Controllers\Oils\Fche040113FinanceController;
use App\Http\Controllers\Oils\Fche040114FinanceController;
use App\Http\Controllers\Oils\Fche040115FinanceController;
use App\Http\Controllers\Others\F04che13FinanceController;
use App\Http\Controllers\Others\F04che15FinanceController;
use App\Http\Controllers\Others\F04che16FinanceController;
use App\Http\Controllers\Others\F04che17FinanceController;
use App\Http\Controllers\Others\F04che18FinanceController;
use App\Http\Controllers\Others\F04che21FinanceController;
use App\Http\Controllers\Others\F04che25FinanceController;
use App\Http\Controllers\Others\Fche0401FinanceController;
use App\Http\Controllers\Stock\MlPetrifilmStockController;
use App\Http\Controllers\Stock\UsedChemicalListController;
use App\Http\Controllers\Stock\UsedMlMediaStockController;
use App\Http\Controllers\ChemicalReports\Ad00879Controller;
use App\Http\Controllers\ChemicalReports\Ad01087Controller;
use App\Http\Controllers\ChemicalReports\Ad01288Controller;
use App\Http\Controllers\ChemicalReports\Ad01341Controller;
use App\Http\Controllers\ChemicalReports\Ad01351Controller;
use App\Http\Controllers\ChemicalReports\Ad01354Controller;
use App\Http\Controllers\HMMineral\TestParameterController;
use App\Http\Controllers\Oils\Oilfcar0502FinanceController;
use App\Http\Controllers\Stock\FidslGeneralStockController;
use App\Http\Controllers\Stock\PurchaseGlassWareController;
use App\Http\Controllers\Stock\StockChemicalListController;
use App\Http\Controllers\HMMineral\Car0500FinanceController;
use App\Http\Controllers\Others\Fche040027FinanceController;
use App\Http\Controllers\Others\Fche040028FinanceController;
use App\Http\Controllers\Others\Fche040038FinanceController;
use App\Http\Controllers\Others\Fche040039FinanceController;
use App\Http\Controllers\Others\Fche040051FinanceController;
use App\Http\Controllers\Others\Fche040052FinanceController;
use App\Http\Controllers\Others\Fche040120FinanceController;
use App\Http\Controllers\Others\Fche040121FinanceController;
use App\Http\Controllers\Others\Fche040122FinanceController;
use App\Http\Controllers\Others\Fche040123FinanceController;
use App\Http\Controllers\Others\Fche040124FinanceController;
use App\Http\Controllers\Others\Fche040125FinanceController;
use App\Http\Controllers\Others\Fche040126FinanceController;
use App\Http\Controllers\Stock\UsedMLGeneralStockController;
use App\Http\Controllers\ChemicalReports\NutritionController;
use App\Http\Controllers\GCAnalysis\Car0501FinanceController;
use App\Http\Controllers\Stock\UsedCLEquipmentListController;
use App\Http\Controllers\Stock\UsedMLEquipmentListController;
use App\Http\Controllers\UserManagement\PermissionController;
use App\Http\Controllers\ChemicalReports\HeavyMetalController;
use App\Http\Controllers\HMMineral\Che040036FinanceController;
use App\Http\Controllers\HMMineral\Che040037FinanceController;
use App\Http\Controllers\HMMineral\Che040040FinanceController;
use App\Http\Controllers\HMMineral\Che040042FinanceController;
use App\Http\Controllers\HMMineral\Che040043FinanceController;
use App\Http\Controllers\HMMineral\Che040044FinanceController;
use App\Http\Controllers\HMMineral\Che040045FinanceController;
use App\Http\Controllers\HMMineral\Che040047FinanceController;
use App\Http\Controllers\HMMineral\Che040048FinanceController;
use App\Http\Controllers\HMMineral\Che040049FinanceController;
use App\Http\Controllers\HMMineral\Che040050FinanceController;
use App\Http\Controllers\HMMineral\Che040141FinanceController;
use App\Http\Controllers\HMMineral\Che040146FinanceController;
use App\Http\Controllers\Nutritions\F04che02FinanceController;
use App\Http\Controllers\Nutritions\F04che24FinanceController;
use App\Http\Controllers\Nutritions\F04che27FinanceController;
use App\Http\Controllers\Nutritions\Fcar0501FinanceController;
use App\Http\Controllers\Nutritions\Fcar0502FinanceController;
use App\Http\Controllers\Stock\PurchaseChemicalListController;
use App\Http\Controllers\Stock\PurchaseMlMediaStockController;
use App\Http\Controllers\Stock\UsedMlPetrifilmStockController;
use App\Http\Controllers\Wastewater\Fcar0500FinanceController;
use App\Http\Controllers\WaterTests\F04che19FinanceController;
use App\Http\Controllers\WaterTests\F04che20FinanceController;
use App\Http\Controllers\WaterTests\F04che26FinanceController;
use App\Http\Controllers\WaterTests\F04che28FinanceController;
use App\Http\Controllers\Stock\UsedFidslGeneralStockController;
use App\Http\Controllers\ChemicalReports\GCTestMethodController;
use App\Http\Controllers\GCAnalysis\Fche040029FinanceController;
use App\Http\Controllers\MicroWorksheet\F03M05FinanceController;
use App\Http\Controllers\MicroWorksheet\F03m06FinanceController;
use App\Http\Controllers\Nutritions\Fche040001FinanceController;
use App\Http\Controllers\Nutritions\Fche040003FinanceController;
use App\Http\Controllers\Nutritions\Fche040004FinanceController;
use App\Http\Controllers\Nutritions\Fche040101FinanceController;
use App\Http\Controllers\Nutritions\Fche040102FinanceController;
use App\Http\Controllers\Nutritions\Fche040103FinanceController;
use App\Http\Controllers\Nutritions\Fche040104FinanceController;
use App\Http\Controllers\Nutritions\Fche040105FinanceController;
use App\Http\Controllers\Nutritions\Fche040106FinanceController;
use App\Http\Controllers\Nutritions\Fche040107FinanceController;
use App\Http\Controllers\Stock\PurchaseMLGeneralStockController;
use App\Http\Controllers\Wastewater\Fche040053FinanceController;
use App\Http\Controllers\Wastewater\Fche040054FinanceController;
use App\Http\Controllers\Wastewater\Fche040055FinanceController;
use App\Http\Controllers\Wastewater\Fche040056FinanceController;
use App\Http\Controllers\Wastewater\Fche040057FinanceController;
use App\Http\Controllers\Wastewater\Fche040058FinanceController;
use App\Http\Controllers\Wastewater\Fche040059FinanceController;
use App\Http\Controllers\Wastewater\Fche040060FinanceController;
use App\Http\Controllers\Wastewater\Fche040061FinanceController;
use App\Http\Controllers\Wastewater\Fche040062FinanceController;
use App\Http\Controllers\Wastewater\Fche040063FinanceController;
use App\Http\Controllers\Wastewater\Fche040064FinanceController;
use App\Http\Controllers\WaterTests\Fche040116FinanceController;
use App\Http\Controllers\WaterTests\Fche040117FinanceController;
use App\Http\Controllers\WaterTests\Fche040118FinanceController;
use App\Http\Controllers\WaterTests\Fche040119FinanceController;
use App\Http\Controllers\WaterTests\Wtfcar0502FinanceController;
use App\Http\Controllers\MicroWorksheet\M010101FinanceController;
use App\Http\Controllers\MicroWorksheet\M020101FinanceController;
use App\Http\Controllers\MicroWorksheet\M030101FinanceController;
use App\Http\Controllers\MicroWorksheet\M040101FinanceController;
use App\Http\Controllers\MicroWorksheet\Mar0501FinanceController;
use App\Http\Controllers\Stock\PurchaseCLEquipmentListController;
use App\Http\Controllers\Stock\PurchaseMLEquipmentListController;
use App\Http\Controllers\ChemicalReports\Ad00879FinanceController;
use App\Http\Controllers\ChemicalReports\Ad01087FinanceController;
use App\Http\Controllers\ChemicalReports\Ad01288FinanceController;
use App\Http\Controllers\ChemicalReports\Ad01341FinanceController;
use App\Http\Controllers\ChemicalReports\Ad01351FinanceController;
use App\Http\Controllers\ChemicalReports\Ad01354FinanceController;
use App\Http\Controllers\Stock\PurchaseMlPetrifilmStockController;
use App\Http\Controllers\AlcoholAnalysis\AlcoholFcar0501Controller;
use App\Http\Controllers\ChemicalReports\GCTestParameterController;
use App\Http\Controllers\Stock\PurchaseFidslGeneralStockController;
use App\Http\Controllers\ChemicalReports\OilTestParameterController;
use App\Http\Controllers\ChemicalReports\NutritionAnalysisController;
use App\Http\Controllers\ChemicalReports\WaterTestParameterController;
use App\Http\Controllers\AlcoholAnalysis\AlcoholFcar0501FinanceController;
use App\Http\Controllers\ChemicalReports\NutritionTestParameterController;
use App\Http\Controllers\ChemicalReports\HeavyMetalTestParameterController;

Auth::routes();

// Route::get('/',[LoginController::class,'showLoginForm']);

Route::post('/registerWithMember',[UserController::class,'registerWithMember'])->name('registerWithMember');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/user-guide',[DashboardController::class,'userGuide'])->name('user-guide');

    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/lab',[DashboardController::class, 'lab'])->name('lab');

    Route::get('/stock',[DashboardController::class, 'stock'])->name('stock');

    // Customer

    Route::resource('/customers',CustomerController::class);

    Route::get('/customers-export',[CustomerController::class,'customerExport'])->name('customers-export');

    Route::post('/customers-import',[CustomerController::class,'customerImport'])->name('customers-import');

    // Member

    Route::resource('/members',MemberController::class);

    Route::get('increase_member/{id}',[MemberController::class,'increaseLimit'])->name('increase_member');

    Route::put('increase_member/update/{id}',[MemberController::class,'increaseLimitAdd'])->name('increase_member.update');

    Route::get('/search-by-category',[MemberController::class,'searchByCategory'])->name('search-by-category');

    Route::get('/member-export',[MemberController::class,'memberExport'])->name('member-export');

    Route::post('/member-import',[MemberController::class,'memberImport'])->name('member-import');

    Route::put('/member-approve/{id}',[MemberController::class,'approve'])->name('member-approve');

    Route::get('/member-approveall',[MemberController::class,'approveAll'])->name('member-approveall');

    Route::get('/member-card/{id}',[MemberController::class,'memberCard'])->name('member-card');

    Route::get('/member-certificate/{id}',[MemberController::class,'certificate'])->name('member-certificate');

    Route::get('/send-mail/{id}',[MemberController::class,'sendMail'])->name('send-mail');

    Route::get('/send-near-mail/{id}',[MemberController::class,'sendNearMail'])->name('send-near-mail');

    Route::get('/expired-member',[MemberController::class,'expiredMember'])->name('expired-member');

    Route::get('/near-expired-member',[MemberController::class,'nearExpiredMember'])->name('near-expired-member');

    Route::get('/active-member',[MemberController::class,'activeMember'])->name('active-member');

    Route::resource('/member-types',MemberTypeController::class);

    Route::resource('/business-types',BusinessTypeController::class);

    Route::resource('/categories',CategoryController::class);

    Route::resource('/groups',GroupController::class);

    // User Management

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('increase_count/{id}',[UserController::class,'increaseCount'])->name('increase_count');

    Route::put('increase_count_add/{id}',[UserController::class,'increaseCountAdd'])->name('increase_count_add');

    Route::get('change_password_page/{id}',[UserController::class,'changePasswordPage'])->name('change_password_page');

    Route::put('change_password/{id}',[UserController::class,'changePassword'])->name('change_password');

    Route::resource('permissions', PermissionController::class);

    // Admin Worksheet

    Route::resource('/aw-ad0101',Ad0101Controller::class);

    Route::resource('/ad-finance',AdFinanceController::class);

    Route::get('/indexAd0201',[AdFinanceController::class,'indexAd0201'])->name('indexAd0201');

    Route::get('/editAd0201/{id}',[AdFinanceController::class,'editAd0201'])->name('editAd0201');

    Route::put('/updateAd0201/{id}',[AdFinanceController::class,'updateAd0201'])->name('updateAd0201');

    Route::get('/aw-ad0101/print/{id}',[Ad0101Controller::class, 'print'])->name('aw-ad0101.print');

    Route::resource('/aw-ad0201',Ad0201Controller::class);

    Route::get('/aw-ad0201/print/{id}',[Ad0201Controller::class, 'print'])->name('aw-ad0201.print');

    // GCAnalysis

    Route::resource('/car0501',Car0501Controller::class);

    Route::resource('/car0501-finance',Car0501FinanceController::class);

    Route::get('/car0501/print/{id}',[Car0501Controller::class, 'print'])->name('car0501.print');

    Route::get('/test-increase',[Car0501Controller::class,'testIncrease'])->name('test-increase');

    Route::resource('/car0501-test',Car0501TestController::class);

    Route::get('/car0501s_17',[Car0501Controller::class,'index17'])->name('car0501s_17.index');

    Route::get('/car0501s_17/create',[Car0501Controller::class,'create17'])->name('car0501s_17.create');

    Route::get('/car0501s_17/{id}/show',[Car0501Controller::class,'show17'])->name('car0501s_17.show');

    Route::get('/car0501s_17/{id}/edit',[Car0501Controller::class,'edit17'])->name('car0501s_17.edit');

    Route::get('/car0501s_17/{id}/print',[Car0501Controller::class,'print17'])->name('car0501s_17.print');

    Route::get('/car0501s-17-finance',[Car0501FinanceController::class,'index17'])->name('car0501s-17-finance.index');

    Route::get('/car0501-finance/second-add/{id}',[Car0501FinanceController::class,'secondAdd'])->name('car0501-finance.secondAdd');

    Route::resource('/fche040029',Fche040029Controller::class);

    Route::resource('/fche040029-finance',Fche040029FinanceController::class);

    Route::get('/fche040029/print/{id}',[Fche040029Controller::class, 'print'])->name('fche040029.print');

    Route::get('/fche040029-finance/second-add/{id}',[Fche040029FinanceController::class,'secondAdd'])->name('fche040029-finance.secondAdd');

    // HMMineral

    Route::resource('/hmm-method',MethodController::class);

    Route::resource('/hmm-test',TestParameterController::class);

    Route::resource('/car0500',Car0500Controller::class);

    Route::get('/car0500/print/{id}',[Car0500Controller::class, 'print'])->name('car0500.print');

    Route::resource('/car0500-finance',Car0500FinanceController::class);

    Route::get('/car0500-finance/second-add/{id}',[Car0500FinanceController::class,'secondAdd'])->name('car0500-finance.secondAdd');

    Route::resource('/che040040',Che040040Controller::class);

    Route::get('/che040040/print/{id}',[Che040040Controller::class, 'print'])->name('che040040.print');

    Route::resource('/che040040-finance',Che040040FinanceController::class);

    Route::get('/che040040-finance/second-add/{id}',[Che040040FinanceController::class,'secondAdd'])->name('che040040-finance.secondAdd');

    Route::resource('/che040141',Che040141Controller::class);

    Route::get('/che040141/print/{id}',[Che040141Controller::class, 'print'])->name('che040141.print');

    Route::resource('/che040141-finance',Che040141FinanceController::class);

    Route::get('/che040141-finance/second-add/{id}',[Che040141FinanceController::class,'secondAdd'])->name('che040141-finance.secondAdd');

    Route::resource('/che040146',Che040146Controller::class);

    Route::get('/che040146/print/{id}',[Che040146Controller::class, 'print'])->name('che040146.print');

    Route::resource('/che040146-finance',Che040146FinanceController::class);

    Route::get('/che040146-finance/second-add/{id}',[Che040146FinanceController::class,'secondAdd'])->name('che040146-finance.secondAdd');

    Route::resource('/che040045',Che040045Controller::class);

    Route::get('/che040045/print/{id}',[Che040045Controller::class, 'print'])->name('che040045.print');

    Route::resource('/che040045-finance',Che040045FinanceController::class);

    Route::get('/che040045-finance/second-add/{id}',[Che040045FinanceController::class,'secondAdd'])->name('che040045-finance.secondAdd');

    Route::resource('/che040042',Che040042Controller::class);

    Route::get('/che040042/print/{id}',[Che040042Controller::class, 'print'])->name('che040042.print');

    Route::resource('/che040042-finance',Che040042FinanceController::class);

    Route::get('/che040042-finance/second-add/{id}',[Che040042FinanceController::class,'secondAdd'])->name('che040042-finance.secondAdd');

    Route::resource('/che040036',Che040036Controller::class);

    Route::get('/che040036/print/{id}',[Che040036Controller::class, 'print'])->name('che040036.print');

    Route::resource('/che040036-finance',Che040036FinanceController::class);

    Route::get('/che040036-finance/second-add/{id}',[Che040036FinanceController::class,'secondAdd'])->name('che040036-finance.secondAdd');

    Route::resource('/che040048',Che040048Controller::class);

    Route::get('/che040048/print/{id}',[Che040048Controller::class, 'print'])->name('che040048.print');

    Route::resource('/che040048-finance',Che040048FinanceController::class);

    Route::get('/che040048-finance/second-add/{id}',[Che040048FinanceController::class,'secondAdd'])->name('che040048-finance.secondAdd');

    Route::resource('/che040043',Che040043Controller::class);

    Route::get('/che040043/print/{id}',[Che040043Controller::class, 'print'])->name('che040043.print');

    Route::resource('/che040043-finance',Che040043FinanceController::class);

    Route::get('/che040043-finance/second-add/{id}',[Che040043FinanceController::class,'secondAdd'])->name('che040043-finance.secondAdd');

    Route::resource('/che040037',Che040037Controller::class);

    Route::get('/che040037/print/{id}',[Che040037Controller::class, 'print'])->name('che040037.print');

    Route::resource('/che040037-finance',Che040037FinanceController::class);

    Route::get('/che040037-finance/second-add/{id}',[Che040037FinanceController::class,'secondAdd'])->name('che040037-finance.secondAdd');

    Route::resource('/che040049',Che040049Controller::class);

    Route::get('/che040049/print/{id}',[Che040049Controller::class, 'print'])->name('che040049.print');

    Route::resource('/che040049-finance',Che040049FinanceController::class);

    Route::get('/che040049-finance/second-add/{id}',[Che040049FinanceController::class,'secondAdd'])->name('che040049-finance.secondAdd');

    Route::resource('/che040047',Che040047Controller::class);

    Route::get('/che040047/print/{id}',[Che040047Controller::class, 'print'])->name('che040047.print');

    Route::resource('/che040047-finance',Che040047FinanceController::class);

    Route::get('/che040047-finance/second-add/{id}',[Che040047FinanceController::class,'secondAdd'])->name('che040047-finance.secondAdd');

    Route::resource('/che040050',Che040050Controller::class);

    Route::get('/che040050/print/{id}',[Che040050Controller::class, 'print'])->name('che040050.print');

    Route::resource('/che040050-finance',Che040050FinanceController::class);

    Route::get('/che040050-finance/second-add/{id}',[Che040050FinanceController::class,'secondAdd'])->name('che040050-finance.secondAdd');

    Route::resource('/che040044',Che040044Controller::class);

    Route::get('/che040044/print/{id}',[Che040044Controller::class, 'print'])->name('che040044.print');

    Route::resource('/che040044-finance',Che040044FinanceController::class);

    Route::get('/che040044-finance/second-add/{id}',[Che040044FinanceController::class,'secondAdd'])->name('che040044-finance.secondAdd');

    // Micro Worksheet

    Route::resource('/fmar0501',Mar0501Controller::class);

    Route::get('/fmar0501/print/{id}',[Mar0501Controller::class, 'print'])->name('fmar0501.print');

    Route::resource('/fmar0501-finance',Mar0501FinanceController::class);

    Route::get('/fmar0501-finance/second-add/{id}',[Mar0501FinanceController::class,'secondAdd'])->name('fmar0501-finance.secondAdd');

    Route::resource('/m010101',M010101Controller::class);

    Route::get('/m010101/print/{id}',[M010101Controller::class, 'print'])->name('m010101.print');

    Route::resource('/m010101-finance',M010101FinanceController::class);

    Route::get('/m010101-finance/second-add/{id}',[M010101FinanceController::class,'secondAdd'])->name('m010101-finance.secondAdd');

    Route::resource('/m020101',M020101Controller::class);

    Route::get('/m020101/print/{id}',[M020101Controller::class, 'print'])->name('m020101.print');

    Route::resource('/m020101-finance',M020101FinanceController::class);

    Route::get('/m020101-finance/second-add/{id}',[M020101FinanceController::class,'secondAdd'])->name('m020101-finance.secondAdd');

    Route::resource('/m030101',M030101Controller::class);

    Route::get('/m030101/print/{id}',[M030101Controller::class, 'print'])->name('m030101.print');

    Route::resource('/m030101-finance',M030101FinanceController::class);

    Route::get('/m030101-finance/second-add/{id}',[M030101FinanceController::class,'secondAdd'])->name('m030101-finance.secondAdd');

    Route::resource('/m040101',M040101Controller::class);

    Route::get('/m040101/print/{id}',[M040101Controller::class, 'print'])->name('m040101.print');

    Route::resource('/m040101-finance',M040101FinanceController::class);

    Route::get('/m040101-finance/second-add/{id}',[M040101FinanceController::class,'secondAdd'])->name('m040101-finance.secondAdd');

    Route::resource('/f03m05',F03M05Controller::class);

    Route::get('/f03m05/print/{id}',[F03M05Controller::class, 'print'])->name('f03m05.print');

    Route::resource('/f03m05-finance',F03M05FinanceController::class);

    Route::get('/f03m05-finance/second-add/{id}',[F03M05Controller::class,'secondAdd'])->name('f03m05-finance.secondAdd');

    Route::resource('/f03m06',F03m06Controller::class);

    Route::get('/f03m06/print/{id}',[F03m06Controller::class, 'print'])->name('f03m06.print');

    Route::resource('/f03m06-finance',F03m06FinanceController::class);

    Route::get('/f03m06-finance/second-add/{id}',[F03m06FinanceController::class,'secondAdd'])->name('f03m06-finance.secondAdd');

    // Nutrition

    Route::resource('/fcar0501',Fcar0501Controller::class);

    Route::get('/fcar0501/print/{id}',[Fcar0501Controller::class, 'print'])->name('fcar0501.print');

    Route::resource('/fcar0501-finance',Fcar0501FinanceController::class);

    Route::resource('/fcar0502',Fcar0502Controller::class);

    Route::get('/fcar0502/print/{id}',[Fcar0502Controller::class, 'print'])->name('fcar0502.print');

    Route::resource('/fcar0502-finance',Fcar0502FinanceController::class);

    Route::get('/fcar0502-finance/second-add/{id}',[Fcar0502FinanceController::class,'secondAdd'])->name('fcar0502-finance.secondAdd');

    Route::resource('/fche040101',Fche040101Controller::class);

    Route::get('/fche040101/print/{id}',[Fche040101Controller::class, 'print'])->name('fche040101.print');

    Route::resource('/fche040101-finance',Fche040101FinanceController::class);

    Route::get('/fche040101-finance/second-add/{id}',[Fche040101FinanceController::class,'secondAdd'])->name('fche040101-finance.secondAdd');

    Route::resource('/fche040102',Fche040102Controller::class);

    Route::get('/fche040102/print/{id}',[Fche040102Controller::class, 'print'])->name('fche040102.print');

    Route::resource('/fche040102-finance',Fche040102FinanceController::class);

    Route::get('/fche040102-finance/second-add/{id}',[Fche040102FinanceController::class,'secondAdd'])->name('fche040102-finance.secondAdd');

    Route::resource('/fche040103',Fche040103Controller::class);

    Route::get('/fche040103/print/{id}',[Fche040103Controller::class, 'print'])->name('fche040103.print');

    Route::resource('/fche040103-finance',Fche040103FinanceController::class);

    Route::get('/fche040103-finance/second-add/{id}',[Fche040103FinanceController::class,'secondAdd'])->name('fche040103-finance.secondAdd');

    Route::resource('/fche040104',Fche040104Controller::class);

    Route::get('/fche040104/print/{id}',[Fche040104Controller::class, 'print'])->name('fche040104.print');

    Route::resource('/fche040104-finance',Fche040104FinanceController::class);

    Route::get('/fche040104-finance/second-add/{id}',[Fche040104FinanceController::class,'secondAdd'])->name('fche040104-finance.secondAdd');

    Route::resource('/fche040105',Fche040105Controller::class);

    Route::get('/fche040105/print/{id}',[Fche040105Controller::class, 'print'])->name('fche040105.print');

    Route::resource('/fche040105-finance',Fche040105FinanceController::class);

    Route::get('/fche040105-finance/second-add/{id}',[Fche040105FinanceController::class,'secondAdd'])->name('fche040105-finance.secondAdd');

    Route::resource('/fche040106',Fche040106Controller::class);

    Route::get('/fche040106/print/{id}',[Fche040106Controller::class, 'print'])->name('fche040106.print');

    Route::resource('/fche040106-finance',Fche040106FinanceController::class);

    Route::get('/fche040106-finance/second-add/{id}',[Fche040106FinanceController::class,'secondAdd'])->name('fche040106-finance.secondAdd');

    Route::resource('/fche040107',Fche040107Controller::class);

    Route::get('/fche040107/print/{id}',[Fche040107Controller::class, 'print'])->name('fche040107.print');

    Route::resource('/fche040107-finance',Fche040107FinanceController::class);

    Route::get('/fche040107-finance/second-add/{id}',[Fche040107FinanceController::class,'secondAdd'])->name('fche040107-finance.secondAdd');

    // Oil Tests

    Route::resource('/oilfcar0502',Oilfcar0502Controller::class);

    Route::get('/oilfcar0502/print/{id}',[Oilfcar0502Controller::class, 'print'])->name('oilfcar0502.print');

    Route::resource('/oilfcar0502-finance',Oilfcar0502FinanceController::class);

    Route::get('/oilfcar0502-finance/second-add/{id}',[Oilfcar0502FinanceController::class,'secondAdd'])->name('oilfcar0502-finance.secondAdd');

    Route::resource('/fche040108',Fche040108Controller::class);

    Route::get('/fche040108/print/{id}',[Fche040108Controller::class, 'print'])->name('fche040108.print');

    Route::resource('/fche040108-finance',Fche040108FinanceController::class);

    Route::get('/fche040108-finance/second-add/{id}',[Fche040108FinanceController::class,'secondAdd'])->name('fche040108-finance.secondAdd');

    Route::resource('/fche040109',Fche040109Controller::class);

    Route::get('/fche040109/print/{id}',[Fche040109Controller::class, 'print'])->name('fche040109.print');

    Route::resource('/fche040109-finance',Fche040109FinanceController::class);

    Route::get('/fche040109-finance/second-add/{id}',[Fche040109FinanceController::class,'secondAdd'])->name('fche040109-finance.secondAdd');

    Route::resource('/fche040110',Fche040110Controller::class);

    Route::get('/fche040110/print/{id}',[Fche040110Controller::class, 'print'])->name('fche040110.print');

    Route::resource('/fche040110-finance',Fche040110FinanceController::class);

    Route::get('/fche040110-finance/second-add/{id}',[Fche040110FinanceController::class,'secondAdd'])->name('fche040110-finance.secondAdd');

    Route::resource('/fche040111',Fche040111Controller::class);

    Route::get('/fche040111/print/{id}',[Fche040111Controller::class, 'print'])->name('fche040111.print');

    Route::resource('/fche040111-finance',Fche040111FinanceController::class);

    Route::get('/fche040111-finance/second-add/{id}',[Fche040111FinanceController::class,'secondAdd'])->name('fche040111-finance.secondAdd');

    Route::resource('/fche040112',Fche040112Controller::class);

    Route::get('/fche040112/print/{id}',[Fche040112Controller::class, 'print'])->name('fche040112.print');

    Route::resource('/fche040112-finance',Fche040112FinanceController::class);

    Route::get('/fche040112-finance/second-add/{id}',[Fche040112FinanceController::class,'secondAdd'])->name('fche040112-finance.secondAdd');

    Route::resource('/fche040113',Fche040113Controller::class);

    Route::get('/fche040113/print/{id}',[Fche040113Controller::class, 'print'])->name('fche040113.print');

    Route::resource('/fche040113-finance',Fche040113FinanceController::class);

    Route::get('/fche040113-finance/second-add/{id}',[Fche040113FinanceController::class,'secondAdd'])->name('fche040113-finance.secondAdd');

    Route::resource('/fche040114',Fche040114Controller::class);

    Route::get('/fche040114/print/{id}',[Fche040114Controller::class, 'print'])->name('fche040114.print');

    Route::resource('/fche040114-finance',Fche040114FinanceController::class);

    Route::get('/fche040114-finance/second-add/{id}',[Fche040114FinanceController::class,'secondAdd'])->name('fche040114-finance.secondAdd');

    Route::resource('/fche040115',Fche040115Controller::class);

    Route::get('/fche040115/print/{id}',[Fche040115Controller::class, 'print'])->name('fche040115.print');

    Route::resource('/fche040115-finance',Fche040115FinanceController::class);

    Route::get('/fche040115-finance/second-add/{id}',[Fche040115FinanceController::class,'secondAdd'])->name('fche040115-finance.secondAdd');

    // Route::resource('/f04che06',F04che06Controller::class);

    // Route::get('/f04che06/print/{id}',[F04che06Controller::class, 'print'])->name('f04che06.print');

    // Route::resource('/f04che06-finance',F04che06FinanceController::class);

    // Route::resource('/f04che07',F04che07Controller::class);

    // Route::get('/f04che07/print/{id}',[F04che07Controller::class, 'print'])->name('f04che07.print');

    // Route::resource('/f04che07-finance',F04che07FinanceController::class);

    // Route::resource('/f04che08',F04che08Controller::class);

    // Route::get('/f04che08/print/{id}',[F04che08Controller::class, 'print'])->name('f04che08.print');

    // Route::resource('/f04che08-finance',F04che08FinanceController::class);

    // Route::resource('/f04che09',F04che09Controller::class);

    // Route::get('/f04che09/print/{id}',[F04che09Controller::class, 'print'])->name('f04che09.print');

    // Route::resource('/f04che09-finance',F04che09FinanceController::class);

    // Route::resource('/f04che10',F04che10Controller::class);

    // Route::get('/f04che10/print/{id}',[F04che10Controller::class, 'print'])->name('f04che10.print');

    // Route::resource('/f04che10-finance',F04che10FinanceController::class);

    // Route::resource('/f04che11',F04che11Controller::class);

    // Route::get('/f04che11/print/{id}',[F04che11Controller::class, 'print'])->name('f04che11.print');

    // Route::resource('/f04che11-finance',F04che11FinanceController::class);

    // Route::resource('/f04che12',F04che12Controller::class);

    // Route::get('/f04che12/print/{id}',[F04che12Controller::class, 'print'])->name('f04che12.print');

    // Route::resource('/f04che12-finance',F04che12FinanceController::class);

    // Route::resource('/f04che14',F04che14Controller::class);

    // Route::get('/f04che14/print/{id}',[F04che14Controller::class, 'print'])->name('f04che14.print');

    // Route::resource('/f04che14-finance',F04che14FinanceController::class);

    // Other Tests

    Route::resource('/f05',F05Controller::class);

    Route::get('/f05/print/{id}',[F05Controller::class, 'print'])->name('f05.print');

    Route::resource('/f05-finance',F05FinanceController::class);

    Route::get('/f05-finance/second-add/{id}',[F05FinanceController::class,'secondAdd'])->name('f05-finance.secondAdd');

    Route::resource('/fche040039',Fche040039Controller::class);

    Route::get('/fche040039/print/{id}',[Fche040039Controller::class, 'print'])->name('fche040039.print');

    Route::resource('/fche040039-finance',Fche040039FinanceController::class);

    Route::get('/fche040039-finance/second-add/{id}',[Fche040039FinanceController::class,'secondAdd'])->name('fche040039-finance.secondAdd');

    Route::resource('/fche040051',Fche040051Controller::class);

    Route::get('/fche040051/print/{id}',[Fche040051Controller::class, 'print'])->name('fche040051.print');

    Route::resource('/fche040051-finance',Fche040051FinanceController::class);

    Route::get('/fche040051-finance/second-add/{id}',[Fche040051FinanceController::class,'secondAdd'])->name('fche040051-finance.secondAdd');

    Route::resource('/fche040052',Fche040052Controller::class);

    Route::get('/fche040052/print/{id}',[Fche040052Controller::class, 'print'])->name('fche040052.print');

    Route::resource('/fche040052-finance',Fche040052FinanceController::class);

    Route::get('/fche040052-finance/second-add/{id}',[Fche040052FinanceController::class,'secondAdd'])->name('fche040052-finance.secondAdd');

    Route::resource('/f04che18',F04che18Controller::class);

    Route::get('/f04che18/print/{id}',[F04che18Controller::class, 'print'])->name('f04che18.print');

    Route::resource('/f04che18-finance',F04che18FinanceController::class);

    Route::resource('/fche040027',Fche040027Controller::class);

    Route::get('/fche040027/print/{id}',[Fche040027Controller::class, 'print'])->name('fche040027.print');

    Route::resource('/fche040027-finance',Fche040027FinanceController::class);

    Route::get('/fche040027-finance/second-add/{id}',[fche040027FinanceController::class,'secondAdd'])->name('fche040027-finance.secondAdd');

    Route::resource('/fche040028',Fche040028Controller::class);

    Route::get('/fche040028/print/{id}',[Fche040028Controller::class, 'print'])->name('fche040028.print');

    Route::resource('/fche040028-finance',Fche040028FinanceController::class);

    Route::get('/fche040028-finance/second-add/{id}',[Fche040028FinanceController::class,'secondAdd'])->name('fche040028-finance.secondAdd');

    Route::resource('/fche040038',Fche040038Controller::class);

    Route::get('/fche040038/print/{id}',[Fche040038Controller::class, 'print'])->name('fche040038.print');

    Route::resource('/fche040038-finance',Fche040038FinanceController::class);

    Route::get('/fche040038-finance/second-add/{id}',[Fche040038FinanceController::class,'secondAdd'])->name('fche040038-finance.secondAdd');

    Route::resource('/fche040123',Fche040123Controller::class);

    Route::get('/fche040123/print/{id}',[Fche040123Controller::class, 'print'])->name('fche040123.print');

    Route::resource('/fche040123-finance',Fche040123FinanceController::class);

    Route::get('/fche040123-finance/second-add/{id}',[Fche040123FinanceController::class,'secondAdd'])->name('fche040123-finance.secondAdd');

    Route::resource('/fche040121',Fche040121Controller::class);

    Route::get('/fche040121/print/{id}',[Fche040121Controller::class, 'print'])->name('fche040121.print');

    Route::resource('/fche040121-finance',Fche040121FinanceController::class);

    Route::get('/fche040121-finance/second-add/{id}',[Fche040121FinanceController::class,'secondAdd'])->name('fche040121-finance.secondAdd');

    Route::resource('/fche040120',Fche040120Controller::class);

    Route::get('/fche040120/print/{id}',[Fche040120Controller::class, 'print'])->name('fche040120.print');

    Route::resource('/fche040120-finance',Fche040120FinanceController::class);

    Route::get('/fche040120-finance/second-add/{id}',[Fche040120FinanceController::class,'secondAdd'])->name('fche040120-finance.secondAdd');

    Route::resource('/fche040122',Fche040122Controller::class);

    Route::get('/fche040122/print/{id}',[Fche040122Controller::class, 'print'])->name('fche040122.print');

    Route::resource('/fche040122-finance',Fche040122FinanceController::class);

    Route::get('/fche040122-finance/second-add/{id}',[Fche040122FinanceController::class,'secondAdd'])->name('fche040122-finance.secondAdd');

    Route::resource('/fche040125',Fche040125Controller::class);

    Route::get('/fche040125/print/{id}',[Fche040125Controller::class, 'print'])->name('fche040125.print');

    Route::resource('/fche040125-finance',Fche040125FinanceController::class);

    Route::get('/fche040125-finance/second-add/{id}',[Fche040125FinanceController::class,'secondAdd'])->name('fche040125-finance.secondAdd');

    Route::resource('/fche040126',Fche040126Controller::class);

    Route::get('/fche040126/print/{id}',[Fche040126Controller::class, 'print'])->name('fche040126.print');

    Route::resource('/fche040126-finance',Fche040126FinanceController::class);

    Route::get('/fche040126-finance/second-add/{id}',[Fche040126FinanceController::class,'secondAdd'])->name('fche040126-finance.secondAdd');

    Route::resource('/fche040124',Fche040124Controller::class);

    Route::get('/fche040124/print/{id}',[Fche040124Controller::class, 'print'])->name('fche040124.print');

    Route::resource('/fche040124-finance',Fche040124FinanceController::class);

    Route::get('/fche040124-finance/second-add/{id}',[Fche040124FinanceController::class,'secondAdd'])->name('fche040124-finance.secondAdd');

    // Water Tests

    Route::resource('/wtfcar0502',Wtfcar0502Controller::class);

    Route::get('/wtfcar0502/print/{id}',[Wtfcar0502Controller::class, 'print'])->name('wtfcar0502.print');

    Route::resource('/wtfcar0502-finance',Wtfcar0502FinanceController::class);

    Route::get('/wtfcar0502-finance/second-add/{id}',[Wtfcar0502FinanceController::class,'secondAdd'])->name('wtfcar0502-finance.secondAdd');

    Route::resource('/fche040116',Fche040116Controller::class);

    Route::get('/fche040116/print/{id}',[Fche040116Controller::class, 'print'])->name('fche040116.print');

    Route::resource('/fche040116-finance',Fche040116FinanceController::class);

    Route::get('/fche040116-finance/second-add/{id}',[fche040116FinanceController::class,'secondAdd'])->name('fche040116-finance.secondAdd');

    Route::resource('/fche040117',Fche040117Controller::class);

    Route::get('/fche040117/print/{id}',[Fche040117Controller::class, 'print'])->name('fche040117.print');

    Route::resource('/fche040117-finance',Fche040117FinanceController::class);

    Route::get('/fche040117-finance/second-add/{id}',[fche040117FinanceController::class,'secondAdd'])->name('fche040117-finance.secondAdd');

    Route::resource('/fche040118',Fche040118Controller::class);

    Route::get('/fche040118/print/{id}',[Fche040118Controller::class, 'print'])->name('fche040118.print');

    Route::resource('/fche040118-finance',Fche040118FinanceController::class);

    Route::get('/fche040118-finance/second-add/{id}',[fche040118FinanceController::class,'secondAdd'])->name('fche040118-finance.secondAdd');

    Route::resource('/fche040119',Fche040119Controller::class);

    Route::get('/fche040119/print/{id}',[Fche040119Controller::class, 'print'])->name('fche040119.print');

    Route::resource('/fche040119-finance',Fche040119FinanceController::class);

    Route::get('/fche040119-finance/second-add/{id}',[fche040119FinanceController::class,'secondAdd'])->name('fche040119-finance.secondAdd');


    Route::resource('/f04che28',F04che28Controller::class);

    Route::get('/f04che28/print/{id}',[F04che28Controller::class, 'print'])->name('f04che28.print');

    Route::resource('/f04che28-finance',F04che28FinanceController::class);

    // Chemical Report


    Route::resource('/heavy_metal_tests',HeavyMetalTestParameterController::class);


    Route::resource('/gc_test_parameters',GCTestParameterController::class);

    Route::resource('/gc_test_methods',GCTestMethodController::class);


    Route::resource('/nutrition_tests',NutritionTestParameterController::class);

    Route::resource('/oil_tests',OilTestParameterController::class);



    Route::resource('/water_tests',WaterTestParameterController::class);

    Route::resource('/ad01341s',Ad01341Controller::class);

    Route::resource('/ad01341_finances',Ad01341FinanceController::class);

    Route::get('/ad01341s/print/{id}',[Ad01341Controller::class, 'print'])->name('ad01341s.print');

    Route::resource('/ad01087s',Ad01087Controller::class);

    Route::resource('/ad01087_finances',Ad01087FinanceController::class);

    Route::get('/ad01087s/print/{id}',[Ad01087Controller::class, 'print'])->name('ad01087s.print');

    Route::resource('/ad00879',Ad00879Controller::class);

    Route::resource('/ad00879_finances',Ad00879FinanceController::class);

    Route::get('/ad00879/print/{id}',[Ad00879Controller::class, 'print'])->name('ad00879.print');

    Route::resource('/ad01288',Ad01288Controller::class);

    Route::resource('/ad01288_finances',Ad01288FinanceController::class);

    Route::get('/ad01288/print/{id}',[Ad01288Controller::class, 'print'])->name('ad01288.print');

    Route::resource('/ad01354',Ad01354Controller::class);

    Route::resource('/ad01354_finances',Ad01354FinanceController::class);

    Route::get('/ad01354/print/{id}',[Ad01354Controller::class, 'print'])->name('ad01354.print');

    Route::resource('/ad01351',Ad01351Controller::class);

    Route::resource('/ad01351_finances',Ad01351FinanceController::class);

    Route::get('/ad01351/print/{id}',[Ad01351Controller::class, 'print'])->name('ad01351.print');

    // Microbiological Report

    Route::resource('/micro_test_parameters',MicroTestParameterController::class);

    Route::resource('/micro_test_methods',MicroTestMethodController::class);

    Route::resource('/ad01250s',Ad01250Controller::class);

    Route::resource('/ad01250_finances',Ad01250FinanceController::class);

    Route::get('/ad01250s/print/{id}',[Ad01250Controller::class, 'print'])->name('ad01250s.print');

    Route::resource('/ad01254s',Ad01254Controller::class);

    Route::resource('/ad01254_finances',Ad01254FinanceController::class);

    Route::get('/ad01254s/print/{id}',[Ad01254Controller::class, 'print'])->name('ad01254s.print');

    Route::resource('/ad00084s',Ad00084Controller::class);

    Route::resource('/ad00084_finances',Ad00084FinanceController::class);

    Route::get('/ad00084s/print/{id}',[Ad00084Controller::class, 'print'])->name('ad00084s.print');

    Route::resource('/ad00086s',Ad00086Controller::class);

    Route::resource('/ad00086_finances',Ad00086FinanceController::class);

    Route::get('/ad00086s/print/{id}',[Ad00086Controller::class, 'print'])->name('ad00086s.print');

    Route::resource('/ad00088s',Ad00088Controller::class);

    Route::resource('/ad00088_finances',Ad00088FinanceController::class);

    Route::get('/ad00088s/print/{id}',[Ad00088Controller::class, 'print'])->name('ad00088s.print');

    Route::resource('/ad01357s',Ad01357Controller::class);

    Route::resource('/ad01357_finances',Ad01357FinanceController::class);

    Route::get('/ad01357s/print/{id}',[Ad01357Controller::class, 'print'])->name('ad01357s.print');

    Route::resource('/ad00396s',Ad00396Controller::class);

    Route::resource('/ad00396_finances',Ad00396FinanceController::class);

    Route::get('/ad00396s/print/{id}',[Ad00396Controller::class, 'print'])->name('ad00396s.print');

    // Stock

    Route::resource('/fidsl_general_stock',FidslGeneralStockController::class);

    Route::get('/fidsl_general_stock/purchase/{id}',[FidslGeneralStockController::class,'purchase']);

    Route::get('/fidsl_general_stock/used/{id}',[FidslGeneralStockController::class,'used']);

    Route::get('/fidsl_export',[FidslGeneralStockController::class,'export'])->name('fidsl_export');

    Route::resource('/fidsl_general_stock_purchase',PurchaseFidslGeneralStockController::class);

    Route::resource('/fidsl_general_stock_used',UsedFidslGeneralStockController::class);

    Route::resource('/chemical_list',StockChemicalListController::class);

    Route::get('/chemical_list_export',[StockChemicalListController::class,'chemicalListExport'])->name('chemical_list_export');

    Route::get('/chemical_list/purchase/{id}',[StockChemicalListController::class,'purchase']);

    Route::get('/chemical_list/used/{id}',[StockChemicalListController::class,'used']);

    Route::resource('/purchase_chemical_list',PurchaseChemicalListController::class);

    Route::resource('/used_chemical_list',UsedChemicalListController::class);

    Route::resource('/glass_wares',StockGlassWareController::class);

    Route::get('/glassware_export',[StockGlassWareController::class,'glassWareExport'])->name('glassware_export');

    Route::get('/glass_wares/purchase/{id}',[StockGlassWareController::class,'purchase']);

    Route::get('/glass_wares/used/{id}',[StockGlassWareController::class,'used']);

    Route::resource('/purchase_glass_ware',PurchaseGlassWareController::class);

    Route::resource('/used_glass_ware',UsedGlassWareController::class);

    Route::resource('/ml_equipment_list',MLEquipmentListController::class);

    Route::get('/ml_equipment_list_export',[MLEquipmentListController::class,'mlEquipmentListExport'])->name('ml_equipment_list_export');

    Route::get('/ml_equipment_list/purchase/{id}',[MLEquipmentListController::class,'purchase']);

    Route::get('/ml_equipment_list/used/{id}',[MLEquipmentListController::class,'used']);

    Route::resource('/purchase_ml_equipment_list',PurchaseMLEquipmentListController::class);

    Route::resource('/used_ml_equipment_list',UsedMLEquipmentListController::class);

    Route::resource('/cl_equipment_list',CLEquipmentListController::class);

    Route::get('/cl_equipment_list_export',[CLEquipmentListController::class,'export'])->name('cl_equipment_list_export');

    Route::get('/cl_equipment_list/purchase/{id}',[CLEquipmentListController::class,'purchase']);

    Route::get('/cl_equipment_list/used/{id}',[CLEquipmentListController::class,'used']);

    Route::resource('/purchase_cl_equipment_list',PurchaseCLEquipmentListController::class);

    Route::resource('/used_cl_equipment_list',UsedCLEquipmentListController::class);

    Route::resource('/ml_general_stock',MLGeneralStockController::class);

    Route::get('/ml_general_stock_export',[MLGeneralStockController::class,'export'])->name('ml_general_stock_export');

    Route::get('/ml_general_stock/purchase/{id}',[MLGeneralStockController::class,'purchase']);

    Route::get('/ml_general_stock/used/{id}',[MLGeneralStockController::class,'used']);

    Route::resource('/purchase_ml_general_stock',PurchaseMLGeneralStockController::class);

    Route::resource('/used_ml_general_stock',UsedMLGeneralStockController::class);

    Route::resource('/ml_petrifilm_stock',MlPetrifilmStockController::class);

    Route::get('/ml_petrifilm_stock_export',[MlPetrifilmStockController::class,'export'])->name('ml_petrifilm_stock_export');

    Route::get('/ml_petrifilm_stock/purchase/{id}',[MlPetrifilmStockController::class,'purchase']);

    Route::get('/ml_petrifilm_stock/used/{id}',[MlPetrifilmStockController::class,'used']);

    Route::resource('/purchase_ml_petrifilm_stock',PurchaseMlPetrifilmStockController::class);

    Route::resource('/used_ml_petrifilm_stock',UsedMlPetrifilmStockController::class);

    Route::resource('/ml_media_stock',MlMediaStockController::class);

    Route::get('/ml_media_stock_export',[MlMediaStockController::class,'export'])->name('ml_media_stock_export');

    Route::get('/ml_media_stock/purchase/{id}',[MlMediaStockController::class,'purchase']);

    Route::get('/ml_media_stock/used/{id}',[MlMediaStockController::class,'used']);

    Route::resource('/purchase_ml_media_stock',PurchaseMlMediaStockController::class);

    Route::resource('/used_ml_media_stock',UsedMlMediaStockController::class);

    // Alcohol Analysis

    Route::resource('/aa_fcar0501',AlcoholFcar0501Controller::class);

    Route::get('/aa_fcar0501/print/{id}',[AlcoholFcar0501Controller::class, 'print'])->name('aa_fcar0501.print');

    Route::resource('/aa_fcar0501_finance',AlcoholFcar0501FinanceController::class);

    Route::get('/aa_fcar0501_finance/second-add/{id}',[AlcoholFcar0501FinanceController::class,'secondAdd'])->name('aa_fcar0501_finance.secondAdd');

    // Wastewater Results

    Route::resource('/fcar0500',Fcar0500Controller::class);

    Route::get('/fcar0500/print/{id}',[Fcar0500Controller::class, 'print'])->name('fcar0500.print');

    Route::resource('/fcar0500_finance',Fcar0500FinanceController::class);

    Route::get('/fcar0500_finance/second-add/{id}',[Fcar0500FinanceController::class,'secondAdd'])->name('fcar0500_finance.secondAdd');

    Route::resource('/fche040053',Fche040053Controller::class);

    Route::get('/fche040053/print/{id}',[Fche040053Controller::class, 'print'])->name('fche040053.print');

    Route::resource('/fche040053-finance',Fche040053FinanceController::class);

    Route::get('/fche040053-finance/second-add/{id}',[Fche040053FinanceController::class,'secondAdd'])->name('fche040053-finance.secondAdd');

    Route::resource('/fche040055',Fche040055Controller::class);

    Route::get('/fche040055/print/{id}',[Fche040055Controller::class, 'print'])->name('fche040055.print');

    Route::resource('/fche040055-finance',Fche040055FinanceController::class);

    Route::get('/fche040055-finance/second-add/{id}',[Fche040055FinanceController::class,'secondAdd'])->name('fche040055-finance.secondAdd');

    Route::resource('/fche040056',Fche040056Controller::class);

    Route::get('/fche040056/print/{id}',[Fche040056Controller::class, 'print'])->name('fche040056.print');

    Route::resource('/fche040056-finance',Fche040056FinanceController::class);

    Route::get('/fche040056-finance/second-add/{id}',[Fche040056FinanceController::class,'secondAdd'])->name('fche040056-finance.secondAdd');

    Route::resource('/fche040054',Fche040054Controller::class);

    Route::get('/fche040054/print/{id}',[Fche040054Controller::class, 'print'])->name('fche040054.print');

    Route::resource('/fche040054-finance',Fche040054FinanceController::class);

    Route::get('/fche040054-finance/second-add/{id}',[Fche040054FinanceController::class,'secondAdd'])->name('fche040054-finance.secondAdd');

    Route::resource('/fche040057',Fche040057Controller::class);

    Route::get('/fche040057/print/{id}',[Fche040057Controller::class, 'print'])->name('fche040057.print');

    Route::resource('/fche040057-finance',Fche040057FinanceController::class);

    Route::get('/fche040057-finance/second-add/{id}',[Fche040057FinanceController::class,'secondAdd'])->name('fche040057-finance.secondAdd');

    Route::resource('/fche040058',Fche040058Controller::class);

    Route::get('/fche040058/print/{id}',[Fche040058Controller::class, 'print'])->name('fche040058.print');

    Route::resource('/fche040058-finance',Fche040058FinanceController::class);

    Route::get('/fche040058-finance/second-add/{id}',[Fche040058FinanceController::class,'secondAdd'])->name('fche040058-finance.secondAdd');

    Route::resource('/fche040059',Fche040059Controller::class);

    Route::get('/fche040059/print/{id}',[Fche040059Controller::class, 'print'])->name('fche040059.print');

    Route::resource('/fche040059-finance',Fche040059FinanceController::class);

    Route::get('/fche040059-finance/second-add/{id}',[Fche040059FinanceController::class,'secondAdd'])->name('fche040059-finance.secondAdd');

    Route::resource('/fche040060',Fche040060Controller::class);

    Route::get('/fche040060/print/{id}',[Fche040060Controller::class, 'print'])->name('fche040060.print');

    Route::resource('/fche040060-finance',Fche040060FinanceController::class);

    Route::get('/fche040060-finance/second-add/{id}',[Fche040060FinanceController::class,'secondAdd'])->name('fche040060-finance.secondAdd');

    Route::resource('/fche040061',Fche040061Controller::class);

    Route::get('/fche040061/print/{id}',[Fche040061Controller::class, 'print'])->name('fche040061.print');

    Route::resource('/fche040061-finance',Fche040061FinanceController::class);

    Route::get('/fche040061-finance/second-add/{id}',[Fche040061FinanceController::class,'secondAdd'])->name('fche040061-finance.secondAdd');

    Route::resource('/fche040062',Fche040062Controller::class);

    Route::get('/fche040062/print/{id}',[Fche040062Controller::class, 'print'])->name('fche040062.print');

    Route::resource('/fche040062-finance',Fche040062FinanceController::class);

    Route::get('/fche040062-finance/second-add/{id}',[Fche040062FinanceController::class,'secondAdd'])->name('fche040062-finance.secondAdd');

    Route::resource('/fche040063',Fche040063Controller::class);

    Route::get('/fche040063/print/{id}',[Fche040063Controller::class, 'print'])->name('fche040063.print');

    Route::resource('/fche040063-finance',Fche040063FinanceController::class);

    Route::get('/fche040063-finance/second-add/{id}',[Fche040063FinanceController::class,'secondAdd'])->name('fche040063-finance.secondAdd');

    Route::resource('/fche040064',Fche040064Controller::class);

    Route::get('/fche040064/print/{id}',[Fche040064Controller::class, 'print'])->name('fche040064.print');

    Route::resource('/fche040064-finance',Fche040064FinanceController::class);

    Route::get('/fche040064-finance/second-add/{id}',[Fche040064FinanceController::class,'secondAdd'])->name('fche040064-finance.secondAdd');

    // Chemical Report -> Nutrition Analysis

    Route::resource('/nutritions',NutritionAnalysisController::class);

    Route::get('/nutritions/print/{id}',[NutritionAnalysisController::class, 'print'])->name('nutritions.print');

    // Chemical Report -> Oil

    Route::resource('/oils',OilController::class);

    Route::get('/oils/print/{id}',[OilController::class, 'print'])->name('oils.print');

    // Chemical Report -> Water

    Route::resource('/waters',WaterController::class);

    Route::get('/waters/print/{id}',[WaterController::class, 'print'])->name('waters.print');

    // Chemical Report -> GC

    Route::resource('/gcs',GCController::class);

    Route::get('/gcs/print/{id}',[GCController::class, 'print'])->name('gcs.print');

    // Chemical Report -> Heavy Metal

    Route::resource('/heavy_metals',HeavyMetalController::class);

    Route::get('/heavy_metals/print/{id}',[HeavyMetalController::class, 'print'])->name('heavy_metals.print');

    // Chemical Report -> Other

    Route::resource('/others',OtherController::class);

    Route::get('/others/print/{id}',[OtherController::class, 'print'])->name('others.print');

    // Microbiological Report -> Swab

    Route::resource('/swabs',SwabController::class);

    Route::get('/swabs/print/{id}',[SwabController::class, 'print'])->name('swabs.print');

    // Microbiological Report -> Export

    Route::resource('/exports',ExportController::class);

    Route::get('/exports/print/{id}',[ExportController::class, 'print'])->name('exports.print');

    // Microbiological Report -> Wjsa

    Route::resource('/wjsas',WjsaController::class);

    Route::get('/wjsas/print/{id}',[WjsaController::class, 'print'])->name('wjsas.print');

    // Microbiological Report -> Other Sample

    Route::resource('/other_samples',OtherSampleController::class);

    Route::get('/other_samples/print/{id}',[OtherSampleController::class, 'print'])->name('other_samples.print');

    // Microbiological Report -> Sac

    Route::resource('/sacs',SacController::class);

    Route::get('/sacs/print/{id}',[SacController::class, 'print'])->name('sacs.print');
});
