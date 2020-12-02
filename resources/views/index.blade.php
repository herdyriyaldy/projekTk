 @extends('layouts.main')
 @section('title','TK DARUSSALAM')
 @section('content')

 <!--================ Start Home Banner Area =================-->
 <section class="home_banner_area">
     <div class="banner_inner">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="banner_content text-center">
                         <p class="text-uppercase">
                             Raih Masa Depan Gemilang dengan Pendidikan Berkualitas
                         </p>
                         <h2 class="text-uppercase mt-4 mb-5">
                             TK ISLAM DARUSSALAM
                         </h2>
                         @guest
                         <div>
                             <a href="{{ route('register')}}" class="primary-btn2 mb-3 mb-sm-0">Registrasi</a>
                             <a href="{{ route('login')}}" class="primary-btn ml-sm-3 ml-0">Login</a>
                         </div>
                     </div>
                     @endguest
                     @auth

                     @if (session('error'))
                     <div class="alert alert-danger" role="alert">
                         {{session('error')}}
                     </div>
                     @endif
                     @if (App\FormPendaftaran::where('users_id_murid',Auth::user()->id)->get()->first())
                     <a class="primary-btn ml-sm-3 ml-0" disabled>Sudah Mendaftar</a>
                     @else
                     <div>
                         <a href="{{ route('form-pendaftaran.index')}}" class="primary-btn ml-sm-3 ml-0">Pendaftaran Sekolah</a>
                     </div>
                     @endif
                     @endauth
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================ End Home Banner Area =================-->

 @endsection