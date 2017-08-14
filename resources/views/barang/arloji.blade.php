@extends('header')

@section('content')
	
	<!--start wrapper-->
	<section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Blog Post</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Barang</a>/</li>
                                <li>Gitar</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
		
		<section class="content blog">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_single">
							<article class="post">
								<figure class="post_img">
									<a href="#"><center>
                                        {{ Html::image('img/3/4.jpg','',array(
                                            'class' => 'img-responsive img-centered',
                                            'alt'   => 'blog post')) }}
                                            </center>
									</a>
								</figure>
								<div class="post_date">
									<span class="day">28</span>
									<span class="month">Juli</span>
								</div>
								<div class="post_content" style="font-size:15px;">
									<div class="post_meta">
										<h2>
											<b>ARLOJI ALBA</b>
										</h2>
										<!-- <div class="metaInfo">
											
											<span><i class="fa fa-user"></i> By <a href="#">Rito</a> </span>
										</div> -->
									</div>
									<p>Kini fungsi utama jam tangan bukan hanya untuk sekedar mengingat waktu, tetapi juga untuk menyempurnakan penampilan agar lebih stylish dan fashionable. Gak cuma wanita, para pria pun juga memperhatikan jam tangan yang digunakan demi menyempurnakan penampilannya. Biasanya sebagian orang mengoleksi beberapa jam tangan sesuai dengan gaya sehari-hari. Para pria selalu mengutamakan nilai prestige dari jam tangan yang digunakan untuk menyempurnakan penampilannya. Salah satu brand jam tangan pria yang cukup populer dan bernilai prestige tinggi adalah jam tangan Alba.</p>

									<p>Alba termasuk brand jam tangan yang punya banyak pilihan desain dan model yang sesuai dengan kepribadian seseorang, misalnya desain simple, modern, klasik, unik, ataupun minimalis. Setiap desain pasti punya keunggulan masing-masing yang bisa jadi pertimbangan para pembelinya untuk memiliki jam tangan tersebut.</p>
									
									
								</div>
								
							</article>
							
						</div>

						
				    </div>

					<!--Sidebar Widget-->
					<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4" >
						<div class="sidebar">
							
							<!-- <div class="widget widget_categories">
								<div class="widget_title">
									<h4><span>Categories</span></h4>
									</div>
								<ul class="arrows_list list_style">
									<li><a href="#"> Grapic Design (10)</a></li>
									<li><a href="#"> Web Design & Development (25)</a></li>
									<li><a href="#"> Photography (29)</a></li>
									<li><a href="#"> Custom Illustrations (19)</a></li>
									<li><a href="#"> Wordpress Themes(38)</a></li>
									<li><a href="#"> Videography (33)</a></li>
								</ul>
							</div> -->
							
							<div class="widget widget_about" style="font-size:17px;">
								<div class="widget_title" >
									<h2><b>INFORMASI</b></h2>
								</div>
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
                                            &nbsp; : rito@gmail.com
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
                                            &nbsp; : JL.Bandung no 5A
                                        </td>
                                    </tr>
                                </table>
                                </div>
							</div>


							
							
						</div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
		
	</section>
	<!--end wrapper-->
	
@endsection