@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="style.css">
<div class = "content">
    <h1> Tentang Kami </h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="250" class="img-thumbnail-rounded-circle">
    <h3>{{ $name }}</h3>
    <p>{{ $nomor }}</p>
    <p>Berawal dari sebuah komunitas non profit yang bergerak di bidang kegiatan di alam bebas amatir di kota Bekasi, diantara beberapa partisipannya mempunyai ide untuk membuka sebuah usaha yang  masih berbau kegiatan alam bebas. Seiring berjalan waktu dan gayung bersambut, usaha yang berdiri pada tanggal 25 May 2022  ini bertransformasi dan memiliki nama "Camp Outdoor" . 

Saat pertama berdiri nama yang kami pilih yaitu "Rookie Monkey", namun karena nama yang kurang familiar, akhirnya kami memutuskan untuk mengganti nama seperti yang sekarang kawan-kawan kenal yaitu "Camp Outdoor". Camp sendiri selain nama sebuah camping, diambil pula dari nama gang rumah menjadi tempat usaha kecil kami. Sekarang Camp Outdoor dikelola oleh 5 orang dan semoga masih akan terus berkembang. 

Usaha utama yang kami jalani sekarang adalah jasa penyewaan alat camping, selain itu kami juga mencoba mengembangkan jasa pemanduan naik gunung dan jasa pembuatan pakaian outdoor. Terima kasih. Salam lestari.

    </p>

    <small class="d-block mt-5 text-muted text-center">&copy <script>document.write(new Date().getFullYear())</script> | Camp    Outdoor</small>
</div>


@endsection


