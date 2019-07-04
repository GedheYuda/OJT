@extends('layouts.layouts')
@section('jd')
    Bali Pasadena
@endsection
@section('main')
<div class="container marketing">
<!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="{{asset('img/outdoor/sun-longers/barcelona.PNG')}}" alt="Generic placeholder image" width="140" height="140" />
      <h2>Outdoor</h2>
        <p>
          Untuk kenyamanan yang tak dapat tergantikan ketika ingin bersantai di luar rungan
          Marakesh adalah salah satu barang kami yang dapat anda gunakan ketika bersantai
          diluar ruangan. dikarenakan size yang ringan dan kokoh membuat
          anda dapan beristirahat dengan tenang dan nyaman.
        </p>
        <p>
            <a class="btn btn-default" href="{{url('/outdoor')}}" role="button">View details &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="{{asset('Img/aksesoris/spiral.jpg')}}" alt="Generic placeholder image" width="140"
          height="140" />
        <h2>Aksesoris</h2>
        <p>
          Dilengkapi juga aksesoris seperti halnya spiral yang bisa menambah kesan modis dan terampil,
          untuk melengkapi zona nyaman anda ketika bersantai ataupun sekedar di jadikan desain ruangn anda
          yang akan menambah kesan natural dan dinamis.
        </p>
        <p>
          <a class="btn btn-default" href="{{url('/accesories')}}" role="button">View details &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="{{asset('img/indoor/rattan-sofa/edward.PNG')}}" alt="Generic placeholder image" width="140"
          height="140" />
        <h2>Indoors</h2>
        <p>
          Produk dalam ruangan ini di desain khusus untuk membuat kondisi dalam ruangan lebih terkesan
          segar dan sejuk dikarenakan bahan yang terbuat dari rotan yang sudah diproses dengan tangan yang terampil
          dalam bidangnya dapat menjadikan desain dalam rumah anda menjadi perpaduan antara klasik dan modern.
        </p>
        <p>
            <a class="btn btn-default" href="{{asset('/indoor')}}" role="button">View details &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          Elegan and futuristik.
          <!--<span class="text-muted">It'll blow your mind.</span>-->
        </h2>
        <p class="lead">
          lihatlah anda tetap bisa bergaya dan bersantai dengan keluarga maupun dengan
          kerabat, teman, rekan bisnis ataupun orang yang anda cintai.
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('img/indoor/rattan-dinners/set-jaring.PNG')}}" class="featurette-image img-responsive center-block"
          data-src="holder.js/500x500/auto" alt="Generic placeholder image" />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">
          Oh yeah, it's that good.
          <!--<span class="text-muted"></span>-->
        </h2>
        <p class="lead">
          See for yourself. Yang akan memanjakan anda disaat ingin melepas penat setelah beraktifitas
          seharian, Ada berbagai macam varian tempat tidur untuk menemani anda dan untuk
          yang terbaik anda bisa dapatkan disini.
        </p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img src="{{asset('img/outdoor/sun-longers/couple-sunbed.PNG')}}" class="featurette-image img-responsive center-block"
          data-src="holder.js/500x500/auto" alt="Generic placeholder image" />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          And lastly, this one. <span class="text-muted">Checkmate.</span>
        </h2>
        <p class="lead">
          Dan hanya satu-satunya di sini yang menyediakan tempat bersantai yang berkelas dan nyaman
          dengan motif dan desain yang beragam sesuai dengan yang anda butuhkan.
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('img/indoor/rattan-chair/peacock.PNG')}}" class="featurette-image img-responsive center-block"
          data-src="holder.js/500x500/auto" alt="Generic placeholder image" />
      </div>
    </div>
@endsection
