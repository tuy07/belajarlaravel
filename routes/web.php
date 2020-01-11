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
Route::get('pesanan/{makanan?}/{minuman?}/{harga?}',function($mkn=null,$minum=null,$harga=null){
    if (isset($makan)) {
        echo 'anda memesan'.$makan;
    }
    if (isset($minum)) {
        echo 'dan'.$minum;
    }
    if(isset($harga)) {
        echo 'dengan harga'.$harga;
    }
    if ($makan == null && $harga == null) {
    }

});

Route::get('/testmodel1', function(){
    $query = App\Post::all();
    return $query;
});

Route::get('/testmodel2', function(){
    $query = App\Post::find(1);
    return $query;
});


Route::get('/testmodel3', function() {
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

    Route::get('/testmodel4', function() {
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/testmodel5', function(){
$post = App\Post::find(1);
$post->delete();
});

Route::get('/testmodel6', function(){
$post = new App\Post;
 $post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
});

Route::get('/penggajian', function(){
    $gaji = App\Penggajian::all();
    return $gaji;
});

Route::get('/penggajian-1', function(){
    $gaji = App\Penggajian::where('agama', '=','islam')->get();
    return $gaji;
});

Route::get('/penggajian-2', function(){
    $gaji = App\Penggajian::where('id','nama','agama')
            ->where('agama','=','islam')
            ->get();
    return $gaji;
});

Route::get('/penggajian-3', function(){
    $gaji = App\Penggajian::where('id','nama','agama')
            ->where('agama','=','islam')
            ->get();
    return $gaji;
});

Route::get('/penggajian/{id}', function($id){
    $gaji = App\Penggajian::find($id);
    return $gaji;
});

Route::get('tambah-data-gaji',function()
{
    $gaji = New App\Penggajian();
    $gaji->nama = 'alya';
    $gaji->jabatan = 'sekertaris';
    $gaji->jk = 'perempuan';
    $gaji->alamat = 'antapani';
    $gaji->total_gaji = 500000;
    $gaji->agama = 'islam';
    $gaji->save();
    return $gaji;
});
