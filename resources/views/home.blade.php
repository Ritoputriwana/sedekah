
@extends('header')

@section('content')


    <section class="wrapper">
        <!--Start Slider-->
        <div class="slider-wrapper">
            <div class="slider" style="background-color:white">


                    {{ Html::image('img/5/sedekah_01.jpg','',array(
                            'width'     =>'auto',
                            'height'    =>'auto',
                            'class' => 'img-responsive img-centered',
                    )) }}

               
            </div>
        </div>
        <!--End Slider-->
        <!--start info service-->
        <section class="info_service">
            <div class="container">
                <br><br>
                <center>
                <h2><b> APA ITU SEDEKAH?? </b></h2><br>
                <h4>Secara harfiyah, sedekah berasal dari kata shadaqa yang artinya benar. Sedekah adalah pemberian atau perlakukan dari seorang muslim kepada orang lain secara sukarela tanpa dibatasi oleh waktu dan jumlahnya sebagai bentuk kebajikan dalam rangka mengharap ridha Allah Swt. Dari penjelasan seperti ini, sedekah dapat kita pahami sebagai bukti kebenaran iman dalam berbagai bentuk perbuatan baik, hal ini karena iman harus selalu dibuktikan dengan amal shaleh atau amal yang baik sehingga setiap kebaikan yang dilakukan seorang muslim adalah sedekah, Rasulullah Saw bersabda: Tiap perbuatan baik adalah sedekah (HR. Baihaki).</h4>
                </center>
                <br><br><br><br>
            </div>
        </section>
    <!--end info service-->


            <section class="team">
            <div class="container">
                <div class="row  sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dividerHeading">
                            <h4><span><b>Penerima Sedekah</b></span></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('img/4/1.jpg','',array(
                                'class' => 'profile img',
                                'height' => '150',
                                'width' => '150' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Ibu Rosidah<small>Dampit/Buruh Tani</small></h3>
                                <p class="description">Ibu Rosidah adalah warga Dampit yang kehilangan tempat tinggal karena bencana gempa bumi.</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('img/4/2.jpg','',array(
                                'class' => 'profile img',
                                'height' => '150',
                                'width' => '150' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Korban Tanah Longsor<small>Pujon</small></h3>
                                <p class="description">Tanah longsor yang terjadi di Pujon menyebabkan warga kehilangan tempat tinggal dan keluarga.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('img/4/3.jpg','',array(
                                    'class' => 'profile img',
                                    'height' => '150',
                                    'width' => '150' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Bapak Syakur<small>Kasembon/Buruh Tani</small></h3>
                                <p class="description">Bapak Syakur adalah warga Kasembon menderita penyakit paru-paru basah sejak tahun 2013.</p>
                        </div>
                    </div>
                   

                    <!-- <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('elec/images/teams/1.png','',array('alt' => 'profile img' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Nama orang<small>Asal/pekerjaan</small></h3>
                                <p class="description">penjelasan sakitnya </p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row  sub_content">
                <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('img/4/4.jpg','',array(
                                        'class' => 'profile img',
                                        'height' => '150',
                                        'width' => '150' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Korban Banjir<small>Ampel Gading</small></h3>
                                <p class="description">Warga Ampel Gading harus mengungsi ke daerah aman untuk melindungi diri dari banjir yang sedang melanda daerah mereka.</p>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </section>


<!--Start recent work-->
        <section>
            <div class="container">
                <div class="row sub_content">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span><b>Koleksi Barang</b></span></h4>
                        </div>
                        <div id="recent-work-slider" class="owl-carousel">
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/3.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200' )) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/4.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/5.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/6.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/7.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/8.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/9.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/11.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/12.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/13.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/14.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/15.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/16.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/17.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/18.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/19.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/20.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                        'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                            <div >
                                <figure class="touching ">
                                     {{ Html::image('img/3/21.jpg','',array(
                                        'class' => 'img-responsive img-centered',
                                       'height'=> '300',
                                        'width' => '200')) }}
                                   <br> IDR Rp. 150.000,-
                                   <br> Merk Phoenix
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Start recent work-->



    <!-- Parallax with Testimonial -->
        <section class="parallax parallax-1">
            <div class="container">
                <div class="row">
                    <div id="parallax-testimonial-carousel" class="parallax-testimonial carousel wow fadeInUp">
                        <div class="carousel-inner">
                            <div class=" item">
                                <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Go Sedekah bisa meningkatkan pahala kita</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('img/1/insan.jpg','',array(
                                        'class' => 'profile img',
                                        'height' => '220',
                                        'width' => '220' )) }}
                                        <span>Insan Afifah</span>
                                    </div>
                                </div>
                            </div>

                            <div class="active item">
                                <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Nikmati mudahnya sedekah dengan Go-Sedekah</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('img/1/rindah.jpg','',array(
                                        'class' => 'profile img',
                                        'height' => '220',
                                        'width' => '220' )) }}
                                        <span>Novrindah Alvi Hasanah</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                 <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Salurkan sedekah Anda melalui Go-Sedekah</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('img/1/rito.jpg','',array(
                                        'class' => 'profile img',
                                        'height' => '220',
                                        'width' => '220' )) }}
                                        <span>Rito Putriwana</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#parallax-testimonial-carousel" class=""></li>
                            <li data-slide-to="1" data-target="#parallax-testimonial-carousel" class="active"></li>
                            <li data-slide-to="2" data-target="#parallax-testimonial-carousel" class=""></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    <!-- end : Parallax with Testimonial -->








        

    </section><!--end wrapper-->



@endsection
