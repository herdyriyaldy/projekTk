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
                     <h2 class="mb-3">Kegiatan Harian</h2>
                     <p>
                         Foto Kegiatan Besar TK ISLAM DARUSSALAM
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/a1.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Kegiatan Makan Bersama</a>
                             </h4>
                             <p>
                                 Di TK Darussalam anak anak selain belajar anak anak juga melakukan kegiatan makan bersama.
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/a2.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Senam Bersama</a>
                             </h4>
                             <p>
                                 Disini anak anak melakukan olahraga senam setiap hari rabu.
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/a3.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Bermain Balok </a>
                             </h4>
                             <p>
                                 Disini anak anak belajar membuat berbagai bentuk untuk dibuat menjadi rumah dll.
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