@extends('frontend.index')


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

                <h1 class="mb-4">
                  Sistem Pakar untuk Diagnosis Cepat dan Tepat Abses Gigi Anak
                </h1>

                <p class="mb-4 mb-md-5">
                  Bantu lindungi senyuman anak Anda dengan solusi berbasis teknologi yang dirancang untuk menganalisis gejala dan memberikan rekomendasi tindakan medis secara instan.
                </p>

                <div class="hero-buttons">
                  <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Mulai Konsultasi</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                <img src="landingpage/img/anak2.png" alt="Hero Image" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-people"></i>
                </div>
                <div class="stat-content">
                  <h4>10k+ Pengguna</h4>
                  <p class="mb-0">Orang tua telah terbantu</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-heart"></i>
                </div>
                <div class="stat-content">
                  <h4>99% Kepuasan</h4>
                  <p class="mb-0">Hasil yang terpercaya</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <div class="stat-content">
                  <h4>15+ Solusi</h4>
                  <p class="mb-0">Tindakan medis yang sesuai</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stat-item">
                <div class="stat-icon">
                  <i class="bi bi-award"></i>
                </div>
                <div class="stat-content">
                  <h4>Diakui Ahli</h4>
                  <p class="mb-0">Dipercaya oleh pakar</p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>


    <!-- /Hero Section -->



   <!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-center justify-content-center">
        <div class="col-xl-8 col-md-10" data-aos="fade-up" data-aos-delay="200">
          <span class="about-meta">MORE ABOUT US</span>
          <h2 class="about-title">Sistem Pakar Abses Gigi Pada Anak</h2>
          <p class="about-description">
            Kami menyediakan sistem pakar yang dirancang khusus untuk mendeteksi dan memberikan solusi terhadap abses gigi pada anak.
            Dengan bantuan teknologi dan pengetahuan medis terkini, kami membantu orangtua untuk mengambil tindakan medis yang tepat guna
            mengatasi abses gigi pada anak.
          </p>

          <div class="row feature-list-wrapper">
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Diagnosis abses gigi secara cepat dan akurat</li>
                <li><i class="bi bi-check-circle-fill"></i> Memberikan rekomendasi tindakan medis yang sesuai</li>
                <li><i class="bi bi-check-circle-fill"></i> Sistem berbasis AI untuk memprediksi tingkat keparahan</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Pantauan gejala dan perkembangannya pada anak</li>
                <li><i class="bi bi-check-circle-fill"></i> Konsultasi jarak jauh dengan dokter spesialis gigi anak</li>
                <li><i class="bi bi-check-circle-fill"></i> Update informasi medis tentang kesehatan gigi anak</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /About Section -->


    <!-- Features Section -->
    <section id="features" class="features section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fitur Unggulan</h2>
      <p>Fitur sistem pakar untuk diagnosis abses gigi pada anak secara lebih efisien dan akurat.</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="d-flex justify-content-center">
        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <h4>Deteksi Gejala</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <h4>Pemberian Diagnosis</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <h4>Rekomendasi Tindakan Medis</h4>
            </a>
          </li>
        </ul>
      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Deteksi Gejala Absens Gigi pada Anak</h3>
              <p class="fst-italic">
                Sistem ini membantu mengenali gejala awal abses gigi anak seperti nyeri, pembengkakan gusi, dan demam.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Identifikasi rasa nyeri pada gigi anak dengan cepat</li>
                <li><i class="bi bi-check2-all"></i> Mendeteksi adanya pembengkakan atau peradangan pada gusi</li>
                <li><i class="bi bi-check2-all"></i> Menyaring gejala dengan bantuan kecerdasan buatan</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="landingpage/img/image1.png" alt="Gejala Abses Gigi" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane fade" id="features-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Diagnosis Absens Gigi Anak</h3>
              <p class="fst-italic">
                Sistem menganalisis gejala untuk memberikan diagnosis awal abses gigi pada anak secara medis.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Menyediakan diagnosis berdasarkan input gejala</li>
                <li><i class="bi bi-check2-all"></i> Memperhitungkan tingkat keparahan abses dengan data medis terkini</li>
                <li><i class="bi bi-check2-all"></i> Menggunakan model AI untuk prediksi tingkat perkembangan abses</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="landingpage/img/image2.png" alt="Diagnosis Medis" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane fade" id="features-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Rekomendasi Tindakan Medis</h3>
              <ul>
                <li><i class="bi bi-check2-all"></i> Menentukan tindakan medis yang tepat berdasarkan hasil diagnosis</li>
                <li><i class="bi bi-check2-all"></i> Saran perawatan, seperti pemberian obat antibiotik</li>
                <li><i class="bi bi-check2-all"></i> Rujukan ke dokter spesialis anak jika diperlukan</li>
              </ul>
              <p class="fst-italic">
                Sistem akan memberikan rekomendasi langsung setelah diagnosis untuk memastikan tindakan yang tepat.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="landingpage/img/image3.png" alt="Tindakan Medis" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->
      </div>
    </div>
    </section><!-- /Features Section -->

  <!-- Features Cards Section -->
  <section id="features-cards" class="features-cards section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-box orange">
            <i class="bi bi-award"></i>
            <h4>Diagnosis Cepat</h4>
            <p>Proses diagnosis yang cepat untuk memudahkan penanganan abses gigi anak secara tepat waktu.</p>
          </div>
        </div><!-- End Feature Box-->

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-box blue">
            <i class="bi bi-patch-check"></i>
            <h4>Kecerdasan Buatan</h4>
            <p>Didukung dengan AI untuk memberikan prediksi dan diagnosis yang lebih akurat.</p>
          </div>
        </div><!-- End Feature Box-->

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-box green">
            <i class="bi bi-sunrise"></i>
            <h4>Konsultasi Langsung</h4>
            <p>Menyediakan akses konsultasi dengan dokter spesialis gigi anak untuk rekomendasi medis lebih lanjut.</p>
          </div>
        </div><!-- End Feature Box-->

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-box red">
            <i class="bi bi-shield-check"></i>
            <h4>Keamanan Data</h4>
            <p>Menjamin keamanan dan kerahasiaan informasi medis pasien anak Anda.</p>
          </div>
        </div><!-- End Feature Box-->
      </div>
    </div>
  </section><!-- /Features Cards Section -->




    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Kami menyediakan solusi berbasis sistem pakar untuk membantu diagnosis dan penanganan awal abses gigi pada anak.</p>
    </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-activity"></i>
              </div>
              <div>
                <h3>Deteksi Gejala</h3>
                <p>Sistem kami dapat mengenali gejala abses gigi berdasarkan informasi yang diberikan oleh pengguna untuk memberikan diagnosa awal.</p>
                <a href="#services" class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <div>
                <h3>Saran Penanganan Awal</h3>
                <p>Sistem akan memberikan saran penanganan awal yang aman berdasarkan gejala dan kondisi yang diidentifikasi.</p>
                <a href="#services" class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-journal-text"></i>
              </div>
              <div>
                <h3>Informasi Penyebab</h3>
                <p>Memberikan edukasi mengenai penyebab utama abses gigi pada anak agar dapat dilakukan tindakan pencegahan di masa depan.</p>
                <a href="#services" class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-clipboard"></i>
              </div>
              <div>
                <h3>Laporan Diagnostik</h3>
                <p>Menyediakan laporan diagnostik yang komprehensif untuk membantu orang tua memahami kondisi anak mereka lebih baik.</p>
                <a href="#services" class="read-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Pertanyaan Umum (FAQ)</h2>
            <p class="faq-description">Berikut adalah beberapa pertanyaan yang sering diajukan mengenai sistem pakar abses gigi pada anak.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Apa itu abses gigi pada anak?</h3>
                <div class="faq-content">
                    <p>Abses gigi adalah infeksi yang terjadi di sekitar gigi atau gusi, seringkali disebabkan oleh karies gigi atau trauma pada gigi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Bagaimana cara kerja sistem pakar ini?</h3>
                <div class="faq-content">
                    <p>Sistem ini bekerja dengan mengambil data gejala dari pengguna, menganalisisnya menggunakan basis pengetahuan, dan memberikan saran diagnosis awal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Apakah sistem ini menggantikan dokter gigi?</h3>
                <div class="faq-content">
                    <p>Tidak, sistem ini dirancang untuk memberikan informasi awal. Kami merekomendasikan untuk tetap berkonsultasi dengan dokter gigi untuk penanganan lebih lanjut.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Apakah data yang saya masukkan aman?</h3>
                <div class="faq-content">
                    <p>Ya, data Anda dijaga kerahasiaannya sesuai dengan kebijakan privasi kami.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Bagaimana cara mendapatkan akses ke sistem ini?</h3>
                <div class="faq-content">
                    <p>Anda dapat mengakses sistem ini melalui website kami atau mengunduh aplikasinya jika tersedia.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






  <footer id="footer" class="footer">



    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Sistem Pakar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
@endsection



