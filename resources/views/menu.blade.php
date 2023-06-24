@extends('layouts.main')

@section('container')
    <main id="main" data-aos="fade-in">

        <div class="breadcrumbs">
            <div class="container">
                <h2>Menu</h2>
                <p>Temukan berbagai fitur yang tersedia untuk mendukung pembelajaranmu!</p>
            </div>
        </div>

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>ChatBot</h4>
                                </div>
                                <hr>
                                <h3><a href="course-details.html">Deskripsi</a></h3>
                                <p>Fitur ChatBot kami memungkinkan Anda untuk berinteraksi dengan asisten virtual berbasis AI yang siap membantu menjawab pertanyaan Anda seputar pembelajaran.</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="course-item">
                            <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>Translate</h4>
                                </div>
                                <hr>
                                <h3><a href="course-details.html">Deskripsi</a></h3>
                                <p>Fitur Translate kami memudahkan Anda dalam menerjemahkan teks atau kata-kata dalam berbagai bahasa.</p>
                                
                            </div>
                        </div>
                    </div> <!-- End Course Item-->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="course-item">
                            <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>Forum Diskusi</h4>
                                </div>
                                <hr>
                                <h3><a href="course-details.html">Deskripsi</a></h3>
                                <p>Fitur Forum Diskusi kami menyediakan platform interaktif bagi Anda untuk berdiskusi, berbagi pemikiran, dan bertanya jawab dengan siswa dan guru lainnya.</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->

                </div>

            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->
@endsection
