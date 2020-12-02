 @extends('layouts.main')
 @section('title','Kegiatan Besar')
 @section('content')


 <!--================Home Banner Area =================-->
 <section class="banner_area">
     <div class="banner_inner d-flex align-items-center">

         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="banner_content text-center">
                         <h2>Kegiatan Harian</h2>
                         <div class="page_link">
                             <a href="index.html">Home</a>
                             <a href="Kegiatan.html">Kegiatan Harian</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Home Banner Area =================-->

 <!--================ Start Popular Courses Area =================-->
 <div class="popular_courses section_gap_top">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5">
                 <div class="main_title">
                     <h2 class="mb-3">Fasilitas</h2>
                     <p>
                         Fasilitas apa aja si gan
                     </p>
                 </div>
             </div>
         </div>
         <div class="row">
             <!-- single course -->
             <div class="col-lg-12">
                 <div class="owl-carousel active_course">
                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_tk.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>LOKASI YANG STRATEGIS</a>
                             </h4>
                             <p>
                                 TK Darussalam Berlokasi didekat dengan kecamatan dan jalan Utama agar mudah ditemukan.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">
                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info"></span>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_kelas.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>MEMILIKI TIGA KELAS</a>
                             </h4>
                             <p>
                                 Di Setiap kelas TK Darussalam di isi maksimal 20 anak sehingga membuat pembelajaran lebih efektif
                                 dan mudah diserap anak anak dalam belajar.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/taman.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a href="course-details.html">TAMAN BERMAIN</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki taman bermain untuk anak anak bermain agar tidak jenuh dalam pembelajaran
                                 didalam ruangan kelas.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/kantor.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>KANTOR</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki kantor yang digunakan untuk para wali murid berdiskusi dengan guru
                                 maupun kepala sekolah didalah sekolah.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/cctv.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>TERPANTAU CCTV</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki CCTV guna memantau kegiatan anak anak dan memberikan keamanan kepada para guru
                                 dan wari murid
                                 untuk memantau anak anak.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_ac.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>RUANGAN BER AC</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki fasilitas ruangan yang ber AC untuk kenyamanan anak anak dalam belajar.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/loker.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>LOKER DIDALAM KELAS</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki ruangan berloker dalam kelas sehingga memudahkan murid dan wali murid agar
                                 tidak lupa
                                 menyiapkan jadwal maupun perlengkapan sekolah anak anak.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--================ End Popular Courses Area =================-->


 <!--================ Start Popular Courses Area =================-->
 <div class="popular_courses section_gap_top">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5">
                 <div class="main_title">
                     <h2 class="mb-3">Fasilitas</h2>
                     <p>
                         Fasilitas apa aja si gan
                     </p>
                 </div>
             </div>
         </div>
         <div class="row">
             <!-- single course -->
             <div class="col-lg-12">
                 <div class="owl-carousel active_course">
                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_tk.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>LOKASI YANG STRATEGIS</a>
                             </h4>
                             <p>
                                 TK Darussalam Berlokasi didekat dengan kecamatan dan jalan Utama agar mudah ditemukan.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">
                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info"></span>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_kelas.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>MEMILIKI TIGA KELAS</a>
                             </h4>
                             <p>
                                 Di Setiap kelas TK Darussalam di isi maksimal 20 anak sehingga membuat pembelajaran lebih efektif
                                 dan mudah diserap anak anak dalam belajar.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/taman.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a href="course-details.html">TAMAN BERMAIN</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki taman bermain untuk anak anak bermain agar tidak jenuh dalam pembelajaran
                                 didalam ruangan kelas.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/kantor.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>KANTOR</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki kantor yang digunakan untuk para wali murid berdiskusi dengan guru
                                 maupun kepala sekolah didalah sekolah.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/cctv.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>TERPANTAU CCTV</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki CCTV guna memantau kegiatan anak anak dan memberikan keamanan kepada para guru
                                 dan wari murid
                                 untuk memantau anak anak.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/ruangan_ac.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>RUANGAN BER AC</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki fasilitas ruangan yang ber AC untuk kenyamanan anak anak dalam belajar.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="single_course">
                         <div class="course_head">
                             <img class="img-fluid" src="{{ url('assets/img/blog/main-blog/loker.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>LOKER DIDALAM KELAS</a>
                             </h4>
                             <p>
                                 TK Darussalam memiliki ruangan berloker dalam kelas sehingga memudahkan murid dan wali murid agar
                                 tidak lupa
                                 menyiapkan jadwal maupun perlengkapan sekolah anak anak.
                             </p>
                             <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                 <div class="authr_meta">

                                 </div>
                                 <div class="mt-lg-0 mt-3">
                                     <span class="meta_info mr-4">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--================ End Popular Courses Area =================-->
 @endsection