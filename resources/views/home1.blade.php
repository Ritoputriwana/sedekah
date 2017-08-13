
@extends('header')

@section('content')


    <section class="wrapper">

      <div class="grey_bg pdt-70" style="height: 26.87em;">
          <div class="container">
              <div class="row">
                  <div class="col-sm-5 feature-block">
                    <!-- {{ Html::image('img/4/pantiasuhan.jpg','',array('alt' => 'profile img' )) }} -->
                      <img class="img-responsive center-block" src="{{ asset('img/4/pantiasuhan.jpg') }}">
                  </div>

                  <div class="feature-block col-sm-7">
                      <h4>Go... Sedekah <span>yuk :)</span></h4>
                      <p>Bantu saudara-saudara kita yang sedang membutuhkan. Melalui aplikasi ini anda dapat menyalurkan sedekah anda dalam bentuk uang dan barang.
                      </p>
                      <a class="btn btn-lg btn-default mrgb-20" href="">Sedekah Uang</a>
                      <a class="btn btn-lg btn-success mrgb-20" href="{{ url('sedekahbarang') }}">Sedekah Barang</a>
                  </div>
              </div>
          </div>
      </div>

@endsection
