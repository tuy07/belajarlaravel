<?php


Route::get('/', function () {
return view('welcome');
});


Route::get('/about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});

Route::get('profil',function()
{
    return view('biodata');
});

Route::get('profil2',function()
{
    return view('biodata2');
});

Route::get('profil3',function()
{
    return view('biodata3');
});

Route::get('profil4',function()
{
    return view('biodata4');
});

Route::get('profil5',function()
{
    return view('biodata5');
});

// Route parameter
Route::get('Meser/{makanan}/{minum}/{bayar}',function($mkn,$min,$byr) {
return 'Makan Yang saya pesan adalah '.$mkn.'</b>
        minum yang saya pesan adalah '.$min.'</b>
        harganya '.$byr;
});

//Route optional Parameter
Route::get('halo/{nama?}',function($nama='fatur rakhman'){
    return 'Hallo nama Saya adalah '.$nama;
});

//Route optional Parameter
Route::get('pesan/{makan?}/{kopi}/{harga}',function($pesan,$makan,$kopi,$harga){
    return 'Anda pesan '.$makan.' & '.$minum.'harganyah.' $harga;
});

