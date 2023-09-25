@extends('layouts.master')

@section('title') Berita UNSA @endsection

@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Berita Universitas Sawerigading Makassar</h2>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

<section class="py-5 text-start container">
    <div class="container">
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary bg-img-relative img-berita3">
        <div class="col-lg-6 px-0">
          <!-- Your content goes here -->
        </div>
      </div>
      
        <div class="row g-5">
          <div class="col-md-8">
      
            <article class="blog-post">
              <h2 class="display-5 link-body-emphasis mb-1">Berkah Ramadan, Mahasiswa FKIP Universitas Sawerigading Makasaar Berbagi Takjil </h2>
              <p class="blog-post-meta">7 April, 2023</p>
      
              <p>Makassar, FKIP PERS UNSA Fakultas Keguruan dan Ilmu Pendidikan Universitas Sawerigading Makassar (UNSA) manfaatkan momen Ramadan untuk berbagi takjil.</p>

              <p>Mengusung tema “Satukan Tangan Berbagi Kenimatan dan Membangun Ukhuwah Islamiyah Sesama demi Tercipta Kekeluargaan Sesama Muslim” kegiatan tahunaan ini dilakukan sebagai salah satu media meningkatkan rasa atas kesyukuran atas keberkahan yang diperoleh selama bulan suci Ramadan.  Selain itu sebagai bentuk kepedulian social dan kebersamaan terhadap sesama umat muslim. </p>

              <p>“Masya Allah, berkah sekali ini takjilnya dek, terima kasih”. Tutur Saiful, pengguna jalan.</p>

              <p>Seperti tahun-tahun sebelumnya kegiatan FKIP berbagi takjil gratis ini menyasar masyarakat umum, termasuk tukang becak, sopir angkot, tukang ojek, dan pengguna jalan di sekitar Mesjid Al-Markaz pada hari Jum’at 7 April 2023. </p>

              <p>“Kegitan FKIP berbagi ini diharapkan dapat menjadi agenda rutin Bulan Ramadan, dan menjadi berkah bagi kita semua aamiin.” pungkas Ari Wibowo Pembina BEM FKIP UNSA.</p>
            </article>
      
          </div>
      
          <div class="col-md-4">
            <div class="position-sticky" style="top: 8rem;">
      
              <div>
                <h4 class="fst-italic">Lainnya</h4>
                <ul class="list-unstyled">
                  <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="/news/rilis-12-juni-2023">
                      <img src={{url('assets/img/news/9-september-2023.jpg')}} alt="Image Description" width="150" height="120">
                      <div class="col-lg-8">
                        <h6 class="mb-0">Penandatanganan Perjanjian Kerjasama (PKS) bersama Kepala SDN 5 Padangtangalau Kelurahan Balleangin Kecamatan Balocci Kabupaten Pangkep</h6>
                        <small class="text-body-secondary">9 September, 2023</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="/news/rilis-12-juni-2023">
                      <img src={{url('assets/img/news/12-juni-2023.jpg')}} alt="Image Description" width="150" height="120">
                      <div class="col-lg-8">
                        <h6 class="mb-0">FKIP UNSA Gelar Workshop Kebahasaan</h6>
                        <small class="text-body-secondary">12 Juni, 2023</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="news/rilis-19-januari-2022">
                      <img src={{url('assets/img/news/19-januari-2022.jpg')}} alt="Image Description" width="150" height="120">
                      <div class="col-lg-8">
                        <h6 class="mb-0">Dekan FKIP UNSA Makassar bersama Kepala Desa Bontomangape Kabupaten Takalar Provinsi Sulawesi Selatan (PKS).</h6>
                        <small class="text-body-secondary">19 Januari, 2023</small>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      
      </div>
</section>
@endsection