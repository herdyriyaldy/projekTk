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
                         <h2>Kegiatan Besar</h2>
                         <div class="page_link">
                             <a href="index.html">Home</a>
                             <a href="Kegiatan.html">Kegiatan Besar</a>
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
                     <h2 class="mb-3">Kegiatan Besar</h2>
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/b2.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Manasik Haji</a>
                             </h4>
                             <p>
                                 TK Darussalam juga mengajarkan tentang tata cara pelaksanaan ibadah haji yang akan dilaksanakannya,
                                 atau yang biasa disebut manasik haji
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/b3.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Tahun Baru islam</a>
                             </h4>
                             <p>
                                 TK Darussalam selalu merayakan Tahun Baru Islam 1 Muharram setiap tahunya.
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/b4.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Study Tour</a>
                             </h4>
                             <p>
                                 TK Darussalam melakukkan study tour atau jalan jalan disetiap akhir tahun.
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
                             <img class="img-fluid" src="{{ url('assets/img/courses/b1.jpg')}}" alt="" />
                         </div>
                         <div class="course_content">
                             <h4 class="mb-3">
                                 <a>Pentas Seni</a>
                             </h4>
                             <p>
                                 Di TK Darussalam juga sering mengadakan lomba disetiap tahunya seperti lomba menggambar dan menari.
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