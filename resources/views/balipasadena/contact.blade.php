@extends('layouts.layouts')
@section('jd')
    Our Contact
@endsection
@section('main')
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="col-lg-12">
        <div class="text-center">
            <h1>About Us</h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" />

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">
                Costumers
                <!--<span class="text-muted"></span>-->
            </h2>
            <p class="lead">
              Sebagaimana pembeli tentu saja kita mempunyai imajenasi tersendiri untuk berkarya dengan kreatifitas
              sendiri untuk dekorasi rumah kita. semua itu, tergantung dengan tingkat kenyamaman kita dalam
              memilih furnitur yang minimalis, elegan dan efektif. Maka dari itu Bali pasadena telah menyiapkan
              furnitur yang sesuai dengan kebutuhan kita. So don't miss it.
            </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img src="{{asset('img/about/make.jpg')}}" class="featurette-image img-responsive center-block"
            data-src="holder.js/500x500/auto" alt="Generic placeholder image" style="height: 350px; width:500px"/>
        </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
        <div class="col-md-7  col-md-push-5">
            <h2 class="featurette-heading">
                Order.
                <!--<span class="text-muted">It'll blow your mind.</span>-->
            </h2>
            <p class="lead">
                Pemesanan untuk produk kami dapat langsung datang ke tempat ataupun via telephone
                dan untuk melihat varian produk bisa anda lihat di bagian katalog di website resmi
                bali pasadena malang untuk yang berada di sekitar malang atau wilayah pulau jawa
                dan juga anda dapat berkonsultasi langsug dengan para teknisi kami dalam mendisain
                ataupun memilih bahan yang sesuai dengan yang anda inginkan.
            </p>
        </div>
        <div class="col-md-5  col-md-pull-7">
            <img src="{{asset('img/about/product.jpg')}}" class="featurette-image img-responsive center-block"
            data-src="holder.js/500x500/auto" alt="Generic placeholder image" style="height: 350px; width: 400px" />
        </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
        <div class="col-md-7  col-md-push-5">
            <h2 class="featurette-heading">
                Packing.
                <!--<span class="text-muted">It'll blow your mind.</span>-->
            </h2>
            <p class="lead">
                Adapun untuk mengkorfirmasi transport atau estimasi pengiriman bisa langsung berdiskusi
                dengan para staff kami yang bersangkutan dan untuk lebih detail nya silahkan konsultasikan
                langsung dengan kami.
            </p>
        </div>
        <div class="col-md-5  col-md-pull-7">
            <img src="{{asset('img/about/galeri.jpg')}}" class="featurette-image img-responsive center-block"
            data-src="holder.js/500x500/auto" alt="Generic placeholder image" style="height: 300px; width: 400px" />
        </div>
    </div>
    <br>
    <br>
    <br>
    <div>
        <center>
            <h4><b>Jam Operasional:</b></h4>
            <table>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>: 8:00 AM – 5:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </center>

        <hr class="featurette-divider" />

        <div class="row featurette">
          <!-- <div class="col-lg-4">
              <img src="img/icon/bawah.jpg">
          </div> -->
          <center>
              <b>Alamat : </b>"Jl. Jend. Ahmad Yani Utara, Balearjosari, <br> Blimbing, Kota Malang, Jawa Timur 65126, Indonesia"<br>
              <b>Telp : </b>+62-341-813-2597<br>
              <b>Rating : </b>5.00
          </center>
        </div>
    </div>

@endsection
