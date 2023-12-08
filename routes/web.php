<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\DatabayiController;
use App\Http\Controllers\DatabumilController;
use App\Http\Controllers\ManajemenPetugasKesehatanController;
use App\Http\Controllers\MapsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/layoutsAdmin', function () {
    return view('master.layoutsAdmin');
});

Route::get('/manajemenAkses', function () {
    return view('admin.kelolaProfil.manajemenAkses');
});


Route::get('/manajemenPetugasKesehatan', function () {
    return view('admin.kelolaProfil.manajemenPetugasKesehatan');
});

Route::get('/dataBumil', function () {
    return view('admin.kelolaData.dataBumil');
});

Route::get('/dataIbuMelahirkan', function () {
    return view('admin.kelolaData.dataIbuMelahirkan');
});

Route::get('/dataBumilRisti', function () {
    return view('admin.kelolaData.dataBumilRisti');
});

Route::get('/formEdit', function () {
    return view('admin.kelolaProfil.formEdit');
});

Route::get('/formTambah', function () {
    return view('admin.kelolaProfil.formTambah');
});

Route::get('/formDataBumil', function () {
    return view('admin.kelolaData.formDataBumil');
});

Route::get('/formDataBumilRisti', function () {
    return view('admin.kelolaData.formDataBumilRisti');
});

Route::get('/formDataIbuMelahirkan', function () {
    return view('admin.kelolaData.formDataIbuMelahirkan');
});

Route::get('/formDataBalita', function () {
    return view('admin.kelolaData.formDataBalita');
});

Route::get('/formDataImunisasi', function () {
    return view('admin.kelolaData.formDataImunisasi');
});

Route::get('/dataImunisasi', function () {
    return view('admin.kelolaData.dataImunisasi');
});

Route::get('/petaAnak', function () {
    return view('admin.lihatLokasi.petaAnak');
});

Route::get('/petaBumil', function () {
    return view('admin.lihatLokasi.petaBumil');
});

Route::get('/petaBelumTerdaftar', function () {
    return view('admin.lihatLokasi.petaBelumTerdaftar');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/rekapGizi', function () {
    return view('admin.rekapitulasi.gizi');
});
Route::get('/rekapBumil', function () {
    return view('admin.rekapitulasi.bumil');
});
Route::get('/rekapAnak', function () {
    return view('admin.rekapitulasi.anak');
});
Route::get('/rekapImunisasi', function () {
    return view('admin.rekapitulasi.imunisasi');
});

Route::get('/pengaturan', function () {
    return view('admin.pengaturan');
});

Route::get('/dash', function () {
    return view('admin.dashboard');
});

Route::get('/header', function () {
    return view('master.header');
});
Route::get('/puskesmas', function () {
    return view('user.dataDasar.puskesmas');
});

Route::get('/dataDasar', function () {
    return view('user.dataDasar.utama');
});

Route::get('/restore', function () {
    return view('user.dataDasar.restore');
});

Route::get('/dataAnak', function () {
    return view('user.data.anak');
});
Route::get('/dataImunisasiUser', function () {
    return view('user.data.Imunisasi');
});

Route::get('/petaUser', function () {
    return view('user.peta.belumTerdaftar');
});

Route::get('/visualisasi', function () {
    return view('user.grafik.visualisasiData');
});

Route::get('/grafik', function () {
    return view('user.grafik.dataBalita');
});

Route::get('/tambahAnak', function () {
    return view('admin.rekapitulasi.tambahAnak');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/rekapitulasiUser', function () {
    return view('user.rekapitulasi.anak');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('storeRegister');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware(['auth', 'admin']);
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(ManajemenPetugasKesehatanController::class)->group(function () {
    Route::get('/Formtambah', 'Formtambah')->name('Formtambah');
    Route::post('/storepetugas', 'storepetugas')->name('storepetugas');
    Route::get('/hapuspetugas/{id}', 'hapus')->name('hapuspetugas');
    Route::get('/editpetugas/{id}', 'editpetugas')->name('editpetugas');
    Route::get('/indexpetugas', 'indexpetugas')->name('indexpetugas');
    Route::get('/indexpetugasblmterdaftar', 'indexpetugasblmterdaftar')->name('indexpetugasblmterdaftar');
    Route::get('/terimaPetugas/{id}', 'terimaPetugas')->name('terimaPetugas');
    Route::get('/tolakPetugas/{id}', 'tolakPetugas')->name('tolakPetugas');
    Route::put('/updatepetugas/{id}', 'updatepetugas')->name('updatepetugas');
    

});

route::controller(DatabayiController::class)->group(function() {
    Route::get('/indexbayi', 'indexbayi')->name('indexbayi');

    Route::get('/createbayi', 'createbayi')->name('createbayi');
    Route::post('/storedatabayi', 'storedatabayi')->name('storedatabayi');

    Route::get('/indexbayirekap', 'indexbayirekap')->name('indexbayirekap');
});

route::controller(DatabumilController::class)->group(function() {

    // bagian route info bumil
    Route::get('/indexinfoawalbumil', 'indexinfoawalbumil')->name('indexinfoawalbumil');
    Route::post('/postinfoawalbumil', 'postinfoawalbumil')->name('postinfoawalbumil');
    Route::get('createbumil', 'createbumil')->name('createbumil');
    Route::get('/deleteinfobumil/{no_index_infobumil}', 'deleteinfobumil')->name('deleteinfobumil');
    Route::get('/editinfoawalbumil/{no_index_infobumil}', 'editinfoawalbumil')->name('editinfoawalbumil');
    Route::put('/updateinfobumil/{no_index_infobumil}', 'updateinfobumil')->name('updateinfobumil');

    // bagian data bumil
    Route::get('/indexbumil', 'indexbumil')->name('indexbumil');
    Route::get('/indexbumilmelahirkan', 'indexbumilmelahirkan')->name('indexbumilmelahirkan');
    Route::get('createdatabumil', 'createdatabumil')->name('createdatabumil');
    Route::post('/postbumil', 'postbumil')->name('postbumil');
    Route::get('/deletedatabumil/{no_index_bumil}', 'deletedatabumil')->name('deletedatabumil');
    Route::get('/editbumil/{no_index_bumil}', 'editbumil')->name('editbumil');
    Route::put('/updatebumil/{no_index_bumil}', 'updatebumil')->name('updatebumil');



});


Route::controller(AdminController::class)->group(function () {
    Route::get('/manajemenAkses', 'manajemenAkses')->name('manajemenAkses');
    Route::get('/manajemenPetugasKesehatan', 'manajemenPetugas')->name('manajemenPetugas');
    Route::get('/dataBumil', 'dataBumil')->name('dataBumil');
    Route::get('/dataBumilRisti', 'dataBumilRisti')->name('dataBumilRisti');
    Route::get('/dataIbuMelahirkan', 'dataIbuMelahirkan')->name('dataIbuMelahirkan');
    Route::get('/dataBalita', 'dataBalita')->name('dataBalita');    
    Route::get('/dataImunisasi', 'dataImunisasi')->name('dataImunisasi');
    Route::get('/formDataBumil', 'formDataBumil')->name('formDataBumil');
    Route::get('/formDataBumilRisti', 'formDataBumilRisti')->name('formDataBumilRisti');
    Route::get('/formDataIbuMelahirkan', 'formDataIbuMelahirkan')->name('formDataIbuMelahirkan');
    Route::get('/formDataBalita', 'formDataBalita')->name('formDataBalita');
    Route::get('/formDataImunisasi', 'formDataImunisasi')->name('formDataImunisasi');
    Route::get('/petaAnak', 'petaAnak')->name('petaAnak');
    Route::get('/petaBumil', 'petaBumil')->name('petaBumil');
    Route::get('/petaBelumTerdaftar', 'petaBelumTerdaftar')->name('petaBelumTerdaftar');
    Route::get('/rekapAnak', 'rekapAnak')->name('rekapAnak');
    Route::get('/rekapBumil', 'rekapBumil')->name('rekapBumil');
    Route::get('/rekapImunisasi', 'rekapImunisasi')->name('rekapImunisasi');
    Route::get('/rekapGizi', 'rekapGizi')->name('rekapGizi');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/pengaturan', 'pengaturan')->name('pengaturan');
    Route::get('/tambahAnak', 'tambahAnak')->name('tambahAnak');
    Route::get('/tambahImunisasi', 'tambahImunisasi')->name('tambahImunisasi');
    Route::get('/tambahBumil', 'tambahBumil')->name('tambahBumil');
    Route::get('/tambahGizi', 'tambahGizi')->name('tambahGizi');
    Route::get('/editAkses', 'editAkses')->name('editAkses');

    Route::post('/storeadmin', 'storeadmin')->name('storeadmin');
});

Route::controller(userController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/dataAnak', 'dataAnak')->name('dataAnak');
    Route::get('/dataBumil', 'dataBumil')->name('dataBumil');
    Route::get('/dataBumilRisti', 'dataBumilRisti')->name('dataBumilRisti');
    Route::get('/dataIbuMelahirkan', 'dataIbuMelahirkan')->name('dataIbuMelahirkan');
    Route::get('/petaBumil', 'petaBumil')->name('petaBumil');
    Route::get('/petaAnak', 'petaAnak')->name('petaAnak');
    Route::get('/petaBelumTerdaftar', 'petaBelumTerdaftar')->name('petaBelumTerdaftar');
    Route::get('/home', 'home')->name('home');
    Route::get('/visualisasi', 'visualisasi')->name('visualisasi');
    Route::get('/grafikDataAnak', 'grafikDataAnak')->name('grafikDataAnak');
    Route::get('/grafikDataBumil', 'grafikDataBumil')->name('grafikDataBumil');
    Route::get('/grafikDataImunisasi', 'grafikDataImunisasi')->name('grafikDataImunisasi');

});

Route::get('/maps', 'MapsController@showMap');

