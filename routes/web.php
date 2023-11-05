<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::get('/register', function () {
    return view('layouts.register');
})->name('register');

Route::get('/beranda', function () {
    return view('layouts.user.index');
})->name('user.beranda');

Route::get('/tentang', function () {
    return view('layouts.user.tentang');
})->name('user.tentang');

//route prefix
Route::prefix('sewa')->group(function () {
    Route::get('/', function () {
        return view('layouts.user.sewa');
    })->name('user.sewa');

    Route::get('/cabang-kost', function () {
        return view('layouts.user.cabang-kost');
    })->name('user.cabang-kost');

    Route::get('/detail-kamar', function () {
        return view('layouts.user.detail-kamar');
    })->name('user.detail-kamar');
});

Route::get('/kontak', function () {
    return view('layouts.user.kontak');
})->name('user.kontak');


Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/example',  function () {
            return view('layouts.admin.admin_example');
        })->name('example');
        Route::get('/dashboard',  function () {
            return view('layouts.admin.admin_dashboard');
        })->name('dashboard');
        Route::get('/ruang',  function () {
            return view('layouts.admin.ruang');
        })->name('ruang');
        Route::get('/pembayaran',  function () {
            return view('layouts.admin.pembayaran');
        })->name('pembayaran');
        Route::get('/user',  function () {
            return view('layouts.admin.user');
        })->name('user');
        Route::get('/pengaduan',  function () {
            return view('layouts.admin.pengaduan');
        })->name('pengaduan');
        Route::get('/ruang-detail',  function () {
            return view('layouts.admin.ruang-detail');
        })->name('ruang-detail');
    });
});


Route::prefix('superadmin')->group(function () {
    Route::name('superadmin.')->group(function () {
        Route::get('/example',  function () {
            return view('layouts.superadmin.admin_example');
        })->name('example');
        Route::get('/dashboard',  function () {
            return view('layouts.superadmin.admin_dashboard');
        })->name('dashboard');
        Route::get('/outlet',  function () {
            return view('layouts.superadmin.outlet');
        })->name('outlet');
        Route::get('/pembayaran',  function () {
            return view('layouts.superadmin.pembayaran');
        })->name('pembayaran');
        Route::get('/user',  function () {
            return view('layouts.superadmin.user');
        })->name('user');
        Route::get('/admin',  function () {
            return view('layouts.superadmin.admin');
        })->name('admin');
        Route::get('/pengaduan',  function () {
            return view('layouts.superadmin.pengaduan');
        })->name('pengaduan');
        Route::get('/outlet-detail',  function () {
            return view('layouts.superadmin.outlet-detail');
        })->name('outlet-detail');
    });
});
