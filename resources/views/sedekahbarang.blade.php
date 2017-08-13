
@extends('header')

@section('content')

    <section class="wrapper">

      <div class="grey_bg pdt-70" style="height: 26.87em;">
          <div class="container">
              <div class="row">
                  <div class="col-sm-5 feature-block">
                      <img class="img-responsive center-block" src="{{ asset('elec/images/portfolio/full/portfolio_5.png') }}">
                  </div>

                  <div class="feature-block col-sm-7">
                      <h4>Upload Gambar Barang <span>:)</span></h4>
                      <p>
                        <form id="subscribe" action="mc.php" name="subscribe" method="post">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Keterangan">
                            <input type="submit" value="Upload Gambar" id="submit" class="btn btn-default btn-lg button">
                            <div class="pull-right">
                                <input type="submit" value="Ajukan Pengambilan" id="submit" class="btn btn-success btn-lg button">
                            </div>
                        </form>
                      </p>
                  </div>
              </div>
          </div>
      </div>

@endsection
