
@extends('header')

@section('content')


<!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a>/</li>
                            <li>blog</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>Blog Masonry two</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content blog masonry_blog">
        <div class="container">
            <div class="mixed-container masonry_wrapper_blog row wow fadeInUp">
                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/1.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Ibu Rosidah</h2>
                            Ibu Rosidah adalah warga Dampit yang kehilangan tempat tinggal dan keluarga karena bencana gempa bumi. Ibu yang memiliki 5 orang anak ini harus ikhlas hidup sebatang kara. Rumah yang ia bangun bersama suami dan anak-anaknya kini rata dengan tanah.
                            <br><br>
                        </div><!-- end title -->

                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/2.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Korban Tanah Longsor</h2>
                            Pujon merupakan daerah pegunungan yang rawan terhadap longsor. Beberapa waktu lalu hujan deras melanda daerah tersebut hingga terjadi tanah longsor. Tanah longsor mengakibatkan belasan kepala keluarga kehilangan tempat tinggal.
                            <br><br>
                        </div><!-- end title -->

                    </div><!-- end blog -->
                </div><!-- end item -->

                 <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/3.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Bapak Syakur</h2>
                            Bapak Syakur adalah warga buruh tani asal Kasembon yang menderita penyakit paru-paru basah sejak tahun 2013. Penyakit tersebut mengakibatkan badannya kurus dan tak bertenaga. Selain menyebabkan kurus, Bapak Syakur juga tidak bis bekerja keras untuk membayar sekolah kedua putrinya.
                            <br><br>
                        </div><!-- end title -->
                    </div><!-- end blog -->
                </div><!-- end item -->

               <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/4.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Korban Banjir</h2>
                            Hujan lebat terjadi di Kecamatan Ampel Gading. Hujan yang turun selama 30 menit mengakibatkan air menggenang di beberapa desa. Banjir dengan ketinggian 2 meter tersebut telah menyusahkan warga. Warga terpaksa mengungsi untuk mengantisipasi datangnya banjir susulan dengan jumlah dan arus yang lebih lebat.
                            <br><br>
                        </div><!-- end title -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/7.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Mohammad Farisyah Arif</h2>
                            Mohammad Farisyah Arif putra dari bapak Arif dan ibu Sutinah menderita busung lapar. Keadaan ekonomi merupakan faktor utama Faris menderita penyakit tersebut. Bapak Arif hanya bekerja serabutan, sedangkan ibu Sutinah tidak dapat bekerja karena lumpuh.
                            <br><br>
                        </div><!-- end title -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/4/6.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Mbah Ruli</h2>
                            Mbah Ruli menderita sakit TBC paru sejak tahun 2016. Istrinya, Mbah Sarni meninggal pada tahun 2015. Mbah Ruli dan Mbah Sarni tidak memiliki keturunan, sehingga beliau tinggal sendirian di rumahnya yang terbuat dari kayu. Kini Mbah Ruli dirawat di rumah sakit NU di daerah Ngantang.
                            <br><br>
                        </div><!-- end title -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                

                

               
            </div><!-- end masonry_wrapper -->
            
        </div> <!--/.container-->
    </section>

</section>
<!--end wrapper-->


@endsection
