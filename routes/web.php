
<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\InvestmentController;
use App\Http\Controllers\Admin\UpdateController;
use App\Http\Controllers\Investor\InvestorDashboardController;
use App\Http\Controllers\UpdateShowController;

use App\Http\Controllers\InvestorAuthController;
use App\Models\Account;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return redirect()->route('investor.login');
})->name('home');

Route::get('/login', function () {
    return redirect()->route('investor.login');
})->name('login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware('auth:investor')->group(function () {
    Route::get('/dashboard', [InvestmentController::class, 'index'])->name('investments.index');
    Route::get('/investments', [InvestmentController::class, 'index'])->name('investments.index');
    Route::get('/investments/export', [InvestmentController::class, 'export'])->name('investments.export');

    Route::get('/updates', [UpdateController::class, 'index'])->name('updates.index');
    Route::post('/updates', [UpdateController::class, 'store'])->name('updates.store');

    Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
    Route::get('/accounts/{id}', [AccountController::class, 'show'])->name('accounts.show');

    Route::post('/accounts/{id}/type', [AccountController::class, 'updateType'])->name('accounts.updateType');
    Route::post('/accounts/{id}/password', [AccountController::class, 'updatePassword'])->name('accounts.updatePassword');

    Route::post('accounts/{id}/masquerade', function ($id) {
        $target = Account::on('legacy')->findOrFail($id);

    // Store masquerade state
    session()->put('masquerading_as', $target->id);
    // Use a signed cookie for admin ID
    cookie()->queue(cookie('masquerading_from_admin', Auth::id(), 10, null, null, false, true, false, 'strict'));
    Auth::guard('investor')->login($target);

    return redirect()->route('investor.dashboard');
    })->name('accounts.masquerade');

    Route::post('/account/stop-masquerade', function () {
    session()->forget('masquerading_as');
    Auth::guard('investor')->logout();
    return redirect()->route('investor.login')->with('status', 'Logged out from masquerade');
    })->name('investor.stopMasquerade');
});

Route::prefix('investor')->name('investor.')->group(function () {
    Route::get('login', [InvestorAuthController::class, 'showLogin'])->name('login');
    Route::post('login', [InvestorAuthController::class, 'login'])->name('login.post');
    Route::post('logout', [InvestorAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:investor')->group(function () {
        Route::get('/dashboard', InvestorDashboardController::class)->name('dashboard');
        // Protect all other investor routes here as needed
    });
});

Route::get('/updates/{id}', UpdateShowController::class)->name('updates.show');


require __DIR__.'/auth.php';
