@extends('layouts.master')

@section('title') Jurnal @endsection

@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Jurnal FKIP Universitas Sawerigading Makassar</h2>
        <ol>
          <li><a href="">Jurnal</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

<section class="py-5 text-start container">
    <div class="row">
        <div class="col-md-4">
            <a href="http://ojs.unsamakassar.ac.id/jtl" target="_blank">
                <div class="card" style="width: 18rem; height: 48rem">
                    <img src={{url('/assets/img/jurnal/aksara.jpg')}} class="card-img-top" alt="..." height="400">
                    <div class="card-body d-flex flex-column">
                    <h3 class="card-title">Jurnal Aksara Sawerigading</h3>
                    <p class="card-text">Jurnal ini bertujuan untuk mengembangkan konsep, teori, perspektif, paradigma, dan metodologi dalam kajian ilmu pendidikan kebahasaan dan kesusastraan.</p>
                    </div>
                </div>
            </a>
        </div>
      
        <div class="col-md-4">
            <a href="http://ojs.unsamakassar.ac.id/jsm" target="_blank">
                <div class="card" style="width: 18rem; height: 48rem">
                <img src="{{ url('/assets/img/jurnal/sigma.jpg') }}" class="card-img-top" alt="..." height="400">
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title">Sigma: Jurnal Pembelajaran dan Pendidikan Matematika Sawerigading</h3>
                    <p class="card-text">Jurnal ini bertujuan untuk memfasilitasi diskusi berupa akademis tentang pembelajaran dan pendidikan matematika, hasil penelitian karya tulis ilmiah, konsep.</p>
                </div>
                </div>
            </a>
        </div>          
      
</section>
@endsection