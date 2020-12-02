 @extends('layouts.main')
 @section('title','Tentang Sekolah')
 @section('content')


 <!--================Home Banner Area =================-->
 <section class="banner_area">
     <div class="banner_inner d-flex align-items-center">

         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="banner_content text-center">
                         <h2>Tentang Sekolah</h2>
                         <div class="page_link">
                             <a href="index.html">Beranda</a>
                             <a href="about-us.html">Tentang Sekolah</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Home Banner Area =================-->

 <!--================ Start About Area =================-->
 <section class="about_area section_gap">
     <div class="container">
         <div class="row h_blog_item">
             <div class="col-lg-6">
                 <div class="h_blog_img">
                     <img class="img-fluid" src="{{ url('assets/img/about.png')}}" alt="" />
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="h_blog_text">
                     <div class="h_blog_text_inner left right">
                         <h4>Selamat Datang Di TK Darusallam</h4>
                         <p>
                             Mempersiapkan pendidikan anak. Pendidikan anak usia
                             dini merupakan bekal yang baik bagi pendidikan
                             akademik anak nantinya.
                             Taman Kanak-kanak islam darussalam selalu mengembangkan
                             potensi dan kreatifitas anak melalui kegiatan belajar
                             bermain. Misi dan visi pada sekolah Membentuk
                             Generasi Berakhlak Mulia, Mandiri, dan Kreatif.
                         </p>
                         <p>
                             Belajar dapat Membantu perkembangan emosional
                             dan intelektual anak dan Bermain sebagai sarana
                             sosialisasi diharapkan dapat member kesempatan anak
                             untuk bereksplorasi, menemukan, mengekspresikan
                             perasaan, berkreasi dan belajar secara menyenangkan.
                         </p>
                         <a class="primary-btn" href="#">
                             Learn More <i class="ti-arrow-right ml-1"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </section>
 <!--================ End About Area =================-->

 <!--================ Start Feature Area =================-->
 <section class="feature_area section_gap_top title-bg">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5">
                 <div class="main_title">
                     <h2 class="mb-3 text-white">Visi, Misi, dan Tujuan</h2>
                     <p>
                         TK Islam Darussalam
                     </p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <div class="single_feature">
                     <div class="icon"><span class="flaticon-student"></span></div>
                     <div class="desc">
                         <h4 class="mt-3 mb-2">Visi</h4>
                         <p>
                             Menjadikan anak sehat, mandiri, kreatif, dan berbudi pekerti mulia
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="single_feature">
                     <div class="icon"><span class="flaticon-book"></span></div>
                     <div class="desc">
                         <h4 class="mt-3 mb-2">Misi</h4>
                         <p>
                             1. Membiasakan anak mengurus diri sendiri <br>
                             2. Memberikan kebebasan bekreasi <BR>
                             3. Membiasakan anak berprilaku baik terhadap lingkungan <BR>
                             4. Menyiapkan peserta didik ke jenjang pendidikan dasar dengan ketercapaian kompetensi dasar sesuai
                             tahapan perkembangan anak <br>
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="single_feature">
                     <div class="icon"><span class="flaticon-earth"></span></div>
                     <div class="desc">
                         <h4 class="mt-3 mb-2">Tujuan</h4>
                         <p>
                             Pendidikan di TK Darussalam, sebagai berikut : <br>

                             1. Meningkatkan dasar keimanan dan ketakwaan <br>
                             2. Membentukan pribadi yang mantap dan berperilaku yang baik <br>
                             3. Memberikan pengetahuan dan keterampilan untuk bekal kehidupan dalam masyarakat <br>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================ End Feature Area =================-->

 <!--================ Start Testimonial Area =================-->
 <section class="blog_area section_gap">


     <div class="container">
         <h1> Profil Kepala Sekolah dan Guru Pengajar</h1> <br><br>
         <div class="row">
             <div class="col-lg-8">
                 <div class="blog_left_sidebar">
                     <article class="row blog_item">
                         <div class="col-md-3">
                             <div class="blog_info text-right">
                                 <div class="post_tag">
                                     <a href="#">Jakarta</a> <br>
                                     <a class="active" href="#">14 Juni 1972</a> <br>
                                     <a href="#">Jakarta Utara</a>

                                 </div>

                             </div>
                         </div>

                         <div class="col-md-9">
                             <div class="blog_post">
                                 <h3>Yuliati S.Pd. (Kepala Sekolah)</h3>
                                 <img src="{{url ('assets/img/blog/main-blog/yuliati.jpg') }}" alt="">
                                 <div class="blog_details">
                                     <a href="single-blog.html">

                                     </a>
                                     <p>Ibu Yuliati adalah lulusan S1 dari sekolah tinggi keguruan dan ilmu pendidikan (STKIP) Jurusan
                                         Pendidikan Ilmu Pengetahuan Sosial
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </article>
                     <article class="row blog_item">
                         <div class="col-md-3">
                             <div class="blog_info text-right">
                                 <div class="post_tag">
                                     <a href="#">Jakarta</a> <br>
                                     <a class="active" href="#">15 Febuari 1994</a> <br>
                                     <a href="#">Jakarta Utara </a> <br>
                                 </div>

                             </div>
                         </div>
                         <div class="col-md-9">
                             <div class="blog_post">
                                 <h2>Aggung Sari S.Pd.</h2>
                                 <img src="{{url ('assets/img/blog/main-blog/aggunsari.jpg') }}" alt="">
                                 <div class="blog_details">
                                     <a href="single-blog.html">

                                     </a>
                                     <p>Ibu Aggun adalah lulusan S1 dari Universtias Terbuka Jurusan pendidikan</p>
                                     <a href="single-blog.html" class="blog_btn">View More</a>
                                 </div>
                             </div>
                         </div>
                     </article>
                     <article class="row blog_item">
                         <div class="col-md-3">
                             <div class="blog_info text-right">
                                 <div class="post_tag">
                                     <a href="#">Tangerang,</a><br>
                                     <a class="active" href="#">14 Aoril 1983</a><br>
                                     <a href="#">Jakarta Utara</a>
                                 </div>
                                 <ul class="blog_meta list">
                                     <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                     <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                     <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                     <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="col-md-9">
                             <div class="blog_post">
                                 <img src="{{url ('assets/img/blog/main-blog/maratulmarahamah.jpg' ) }}" alt="">
                                 <div class=" blog_details">
                                 <a href="single-blog.html">
                                     <h2>MARATUL MARAHAMAH S.Pd.I.</h2>
                                 </a>
                                 <p>Ibu Marhaman adalah lulusan S1 dari sekolah tinggi agama islam shalahuddin al-ayyubi jakarta
                                     JURUSAN Pendidikan Agama Islam (PAI)</p>
                                 <a href="single-blog.html" class="blog_btn">View More</a>
                             </div>
                         </div>
                 </div>
                 </article>
                 <article class="row blog_item">
                     <div class="col-md-3">
                         <div class="blog_info text-right">
                             <div class="post_tag">
                                 <a href="#">Jakarta</a><br>
                                 <a class="active" href="#">29 Mei 1986</a><br>
                                 <a href="#">Jakarta Utara</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-9">
                         <div class="blog_post">
                             <h2>Syanti Kadarsih S.Pd.I</h2>
                             <img src="{{url ('assets/img/blog/main-blog/syantikadarsih.jpg')}}" alt="">
                                 <div class=" blog_details">
                             <a href="single-blog.html">

                             </a>
                             <p>Ibu syanti kadarsih adalah lulusan S1 dari sekolah tinggi ilmu tarbiyah insida Jurusan Pendidikan Agama Islam
                                 yang berkonsentari pendidikan anak usia dini
                             </p>
                             <a href="single-blog.html" class="blog_btn">View More</a>
                         </div>
                     </div>
             </div>
             </article>
             <article class="row blog_item">
                 <div class="col-md-3">
                     <div class="blog_info text-right">
                         <div class="post_tag">
                             <a href="#">Jakarta</a><br>
                             <a class="active" href="#">2 Maret 1981</a><br>
                             <a href="#">Jakarta Utara</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-9">
                     <div class="blog_post">
                         <h2>Syinka Lina Rtiyana A.Ma.</h2>
                         <img src="{{url ('assets/img/blog/main-blog/sinkalinatriyana.jpg') }}" alt="">
                         <div class="blog_details">
                             <a href="single-blog.html">

                             </a>
                             <p>Ibu sinka adalah lulusan DII dari Universitas Islam Negri Syarif Hidayatullah Jurusan Pendidikan Agama Islam (PAI)</p>
                             <a href="single-blog.html" class="blog_btn">View More</a>
                         </div>
                     </div>
                 </div>
             </article>
             <article class="row blog_item">
                 <div class="col-md-3">
                     <div class="blog_info text-right">
                         <div class="post_tag">
                             <a href="#">Tangerang</a>
                             <a class="active" href="#">12 Agustus 1979</a>
                             <a href="#">Jakarta Utara</a>
                         </div>

                     </div>
                 </div>
                 <div class="col-md-9">
                     <div class="blog_post">
                         <h2>Akmah Yanti S.Pd.I.</h2>
                         <img src="{{url ('assets/img/blog/main-blog/akhmahyanti.jpg' ) }}" alt="">
                         <div class="blog_details">
                             <a href="single-blog.html">

                             </a>
                             <p>Ibu Akhmah adalah lulusan S1 dari Institut PTIQ Jakarta Jurusan Pendidikan Guru Raudlatul Athfal</p>
                             <a href="single-blog.html" class="blog_btn">View More</a>
                         </div>
                     </div>
                 </div>
             </article>
             <article class="row blog_item">
                 <div class="col-md-3">
                     <div class="blog_info text-right">
                         <div class="post_tag">
                             <a href="#">Jakarta</a><br>
                             <a class="active" href="#">29 Januari 1986</a><br>
                             <a href="#">Jakarta Utara</a>
                         </div>

                     </div>
                 </div>
                 <div class="col-md-9">
                     <div class="blog_post">
                         <h2>Dwi Handayani S.Pd.</h2>
                         <img src="{{url ('assets/img/blog/main-blog/dwihandayani.jpg') }}" alt="">
                         <div class="blog_details">
                             <a href="single-blog.html">

                             </a>
                             <p>Ibu dwi handayani adalah lulusan dari Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Jurusan pendidikan ekonomi</p>
                             <a href="single-blog.html" class="blog_btn">View More</a>
                         </div>
                     </div>
                 </div>
             </article>
         </div>
     </div>
     <div class="col-lg-4">
         <div class="blog_right_sidebar">
             <aside class="single_sidebar_widget search_widget">
             </aside>
             <aside class="single_sidebar_widget author_widget">
                 <img class="author_img rounded-circle" src="{{url ('assets/img/blog/au.png' ) }}" alt="">
                 <h4>H Timu Chaerudin</h4>
                 <p>Pendiri Yayasan TK Darussalam</p>
                 <div class="social_icon">
                     <a href="#"><i class="ti-facebook"></i></a>
                     <a href="#"><i class="ti-twitter"></i></a>
                     <a href="#"><i class="ti-github"></i></a>
                     <a href="#"><i class="ti-linkedin"></i></a>
                 </div>
                 <p>TK Islam Darussalam di dirikan untuk membentuk anak menjadi karakter yang Menjadikan anak sehat,
                     mandiri, kreatif, dan berbudi pekerti mulia, bermartabat, sopan
                     santun, rajin beribadah, bertanggung jawab, dan membentuk generasi muda yang handal.</p>
                 <div class="br"></div>
             </aside>

             </ul>
             <div class="br"></div>

         </div>
     </div>
     </div>
     </div>
 </section>

 <!--================ End Testimonial Area =================-->



 @endsection