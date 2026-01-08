<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{project:slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

// TEMPORARY ROUTE - DELETE AFTER USE!
Route::get('/setup-storage-temp', function () {
    $output = '<html><head><title>Setup Storage</title><style>body{font-family:Arial;max-width:800px;margin:50px auto;padding:20px;background:#f5f5f5}.step{background:white;padding:20px;margin:10px 0;border-radius:8px}.success{background:#d4edda;color:#155724;padding:15px;margin:10px 0;border-radius:5px}.error{background:#f8d7da;color:#721c24;padding:15px;margin:10px 0;border-radius:5px}.warning{background:#fff3cd;color:#856404;padding:15px;margin:20px 0;border-radius:5px}</style></head><body><h1>🔧 Setup Storage</h1>';

    $dirs = ['storage/app/public', 'storage/app/public/projects', 'storage/app/public/projects/gallery', 'storage/framework/cache', 'storage/framework/sessions', 'storage/framework/views', 'storage/logs'];

    $output .= '<div class="step"><h3>Passo 1: Criando pastas</h3>';
    foreach ($dirs as $dir) {
        $path = base_path($dir);
        if (!is_dir($path)) {
            if (@mkdir($path, 0755, true)) {
                $output .= "<div class='success'>✅ Criado: $dir</div>";
            } else {
                $output .= "<div class='error'>❌ Erro: $dir</div>";
            }
        } else {
            $output .= "<div class='success'>✓ Existe: $dir</div>";
        }
    }
    $output .= '</div>';

    $output .= '<div class="step"><h3>Passo 2: Link simbólico</h3>';
    $target = base_path('storage/app/public');
    $link = public_path('storage');

    if (file_exists($link)) {
        if (is_link($link)) {
            $output .= "<div class='success'>✅ Link já existe!</div>";
        } else {
            $output .= "<div class='error'>❌ Arquivo 'storage' existe em public/. Delete manualmente.</div>";
        }
    } else {
        if (@symlink($target, $link)) {
            $output .= "<div class='success'>✅ Link criado!</div>";
        } else {
            $output .= "<div class='error'>❌ Erro ao criar link</div>";
        }
    }
    $output .= '</div>';

    if (is_link($link)) {
        $output .= "<div class='success'><h3>✅ Sucesso!</h3><p>Storage configurado. Teste: <a href='/storage/'>/storage/</a></p></div>";
    }

    $output .= '<div class="warning"><h3>⚠️ IMPORTANTE</h3><p><strong>DELETE a rota /setup-storage-temp do arquivo routes/web.php AGORA!</strong></p></div></body></html>';

    return $output;
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');

    Route::post('/login', function (Illuminate\Http\Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Credenciais inválidas.');
    })->name('login.post');

    Route::post('/logout', function (Illuminate\Http\Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    })->name('logout');

    Route::middleware([App\Http\Middleware\AdminAuth::class])->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
        Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('users', App\Http\Controllers\Admin\UserController::class);
        Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
        Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('profile/password', [App\Http\Controllers\Admin\ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    });
});
