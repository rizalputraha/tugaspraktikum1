<!-- Menghubungkan dengan view template master -->
@extends('page.main0042')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<img src="{{URL::asset('/profile.jpg')}}" alt="profile pic" height="200"  />
	<p>kontak : +62 89 681 272 806</p>
	<p>email : rizalputraha@gmail.com</p>
	<p>github : rizalputraha</p>
	<p>ig : rizalputraha</p>
 
@endsection