
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
                             {{ Html::image('img/3/3.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Baju Anak</h2>
                            Baju terbuat dari kain katun. Tidak panas dan menyerap keringat. Warna cerah dan disukai anak-anak.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Rito Putriwana P
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 081335594167
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : ritoputri25@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL. Sunan Kalijaga Dalam No. 01
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                 <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/4.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Arloji</h2>
                            Arloji alba berwarna emas kombinasi putih. Bisa digunakan oleh pria dan wanita. Ringan dan anti air.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Insan Afifah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 085604981447
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : afifahsaaan@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL. Letjen Sutoyo Dalam No. 11
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

               <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/5.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Sepatu</h2>
                            Sepatu Nike berwarna putih. Ringan dan sportif. Cocok digunakan saat sekolah maupun bepergian.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item --> 


                
                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/7.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Stroller</h2>
                            Stroller terbuat dari bahan yang baik, kuat dan tidak berkarat besinya.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div>


                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/8.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Tas Wanita</h2>
                            Tas wanita terbuat dari kulit asli. Ringan dibawa. Cocok untuk bepergian jauh.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Rito Putriwana
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : ritoputri25@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/9.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Box Bayi</h2>
                            Box Bayi terbuat dari kayu yang kuat dengan paduan warna yang menarik untuk bayi. Kayu yang ringan membuat box bayi mudah dipindahkan kemana saja.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Insan Afifah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : afifahsaaan@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/13.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Sepeda Motor GL</h2>
                            Sepeda Motor GL tahun keluar2007. Mesin masih baik dan nyaman digunakan.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/14.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Jaket</h2>
                            Jaket kulit tebal dengan bahan yang hangat. Nyaman digunakan. Cocok untuk pria maupun wanita.
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/16.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Sepeda Phoenix</h2>
                            Sepeda Phoenix berwarna pink. Kerangka masih baik. Warna menarik dan terdapat keranjang untuk menyimpan barang bawaan.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Rito Putriwana
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : ritoputri25@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/17.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Gitar Yamaha</h2>
                            Gitar kayu Yamaha. Senar masih utuh, masih bisa digunakan. Tidak perludisetting ulang. Suara petikan merdu.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Insan Afifah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : afifahsaaan@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/19.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Sepatu</h2>
                            Sepatu berwarna putih. Bahan ringan. Cocok digunakan oleh pria maupun wanita.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->

                <div class="item">
                    <div class="blog-item">
                        <div class="ImageWrapper">
                             {{ Html::image('img/3/21.jpg' ) }}
                        </div>
                        <div class="blog-title">
                            <h2>Box Bayi</h2>
                            Box Bayi dengan bahan kayu yang ringan. Warna menarik. COcok untuk diletakkan diruangan yang sempit maupun luas.
                            <br><br>
                        </div><!-- end title -->

                        <div class="blog-desc">
                                <table>
                                    <tr>
                                        <td>
                                            <i class="fa fa-user" style="color: #727CB6;"></i>&nbsp;
                                        </td>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            &nbsp; : Novrindah Alvi Hasanah
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-phone" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            No telepon 
                                        </td>
                                        <td>
                                            &nbsp;  : 087856568123
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-envelope" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Email 
                                        </td>
                                        <td>
                                            &nbsp; : novrindahalvi@gmail.com
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i class="fa fa-map-marker" style="color: #727CB6;"></i> &nbsp;
                                        </td>
                                        <td>
                                            Alamat 
                                        </td>
                                        <td>
                                            &nbsp; : JL.Sunan Kalijaga No. 20
                                        </td>
                                    </tr>
                                </table>
                        </div><!-- end desc -->
                    </div><!-- end blog -->
                </div><!-- end item -->


















               
            </div><!-- end masonry_wrapper -->
            
        </div> <!--/.container-->
    </section>

</section>
<!--end wrapper-->


@endsection
