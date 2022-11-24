@foreach($barang as $b)
				<!-- begin post 
				<div class="card" style="border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
					<div class="row">
						<div class="col-md-5 wrapthumbnail">
							<a href="#">
								<div class="thumbnail"
									style="background-image:url(http://lh6.ggpht.com/AgNB7gqrTcasUyRvoixc67FfUYT6jsnepE7oue7XoVzZxgsESlLhQEp2G517kHIq8ajy8Jvf7NtFxt7Vziq6KUaw=s1500); border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
								</div>
							</a>
						</div>
						<div class="col-md-7">
							<div class="card-block">
								<h2 class="card-title">{{ $b->nama_event }}</h2>
                                <h4 class="card-text">{{ $b->deskripsi_singkat }}</h4>
                                <h4 class="card-text">{{ $b->deskripsi }}</h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
											<a href="author.html"><img class="author-thumb"
													src="https://lh3.googleusercontent.com/uWfqJ0OrE8kSBFZq36x940-zQXSb0NSgGQKp0hJEnyS2S32v61U9WMoWd_xOyzfTDvrNLS41W8dP9MIoTg=s180"
													alt="Sal"></a>
										</span>
										<span class="author-meta">
											<span class="post-name"><a href="#">SMK PI</a></span><br />
											<span class="post-date" style="color: rgb(5, 161, 57);"> Tanggal : 10 July 2022</span>
										</span>
										<span class="post-read-more"><a href="{{ url('event') }}/{{ $b->event_id }}" title="Read Story"><svg class="svgIcon-use"
													width="25" height="25" viewbox="0 0 25 25">
													<path
														d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
														fill-rule="evenodd"></path>
												</svg></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- end post -->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="https://pbs.twimg.com/profile_images/560621599158591488/SdBbN9Fn_400x400.png">
<title>Event PPDB SMK PI</title>
<!-- Bootstrap core CSS -->
<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{!! asset('css/mediumish.css') !!}" rel="stylesheet">
</head>
<body>

	<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
			<img src="https://pbs.twimg.com/profile_images/560621599158591488/SdBbN9Fn_400x400.png" alt="Logo smk pi"
				width="40px">&nbsp&nbsp&nbsp
			<a class="navbar-brand" href="/">
				PPDB&nbsp&nbsp|&nbsp&nbspSMK Prakarya Internasional
			</a>
			<!-- End Logo -->
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<!-- Begin Menu -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/"><b>Event</b> <span class="sr-only">(current)</span></a>
					</li>

				</ul>
				<!-- End Menu -->
				<!-- Begin Search -->
              <!--   <p>Cari Data Pegawai :</p>
<form action="/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>-->

				<!-- End Search -->
			</div>
		</div>
	</nav>
	<!-- End Nav
================================================== -->

<!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">

		

		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="mainheading">

				<!-- Begin Top Meta -- -->
				<div class="row post-top-meta">
					<div class="col-md-2">
						<a><img class="thumbnail" src="{{ $b->gambar }}" alt="Sal" style="border-radius: 30px; height: auto;"></a>
					</div>
					
				</div>
				<!-- End Top Menta -->
				<h1 class="posttitle">{{ $b->nama_event }}</h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="assets/img/demopic/10.jpg" alt="">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>
                {{ $b->deskripsi }}
				</p>
				
			</div>
			<!-- End Post Content -->

			

		</div>
		<!-- End Post -->

	</div>
</div>
<!-- End Article
================================================== -->

<div class="hideshare"></div>

<!-- Begin Related
================================================== -->
<div class="graybg">
	<div class="container">
		<div class="row listrecent listrelated">

			<!-- begin post -->
			@foreach($barang as $b)
			<div class="col-md-4">
				<div class="card">
					<a href="{{ url('event') }}/{{ $b->event_id }}">
					<img class="img-fluid img-thumb" src="assets/img/demopic/9.jpg" alt="">
					</a>
					<div class="card-block">
						<h2 class="card-title"><a href="{{ url('event') }}/{{ $b->event_id }}">{{ $b->nama_event }}</a></h2>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a><img class="author-thumb" src="https://lh3.googleusercontent.com/uWfqJ0OrE8kSBFZq36x940-zQXSb0NSgGQKp0hJEnyS2S32v61U9WMoWd_xOyzfTDvrNLS41W8dP9MIoTg=s180" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a>SMK PI</a></span><br/>
								<span class="post-date"> Tanggal : 10 July 2022</span><span class="dot"></span><span class="post-read"></span>
								</span>
								<span class="post-read-more"><a href="post.html" title="Read Story"></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!-- end post -->

			<!-- begin post -->
			<div class="col-md-4">
				<div class="card">
					<a href="post.html">
					<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
					</a>
					<div class="card-block">
						<h2 class="card-title"><a href="post.html">How travelling can change your life</a></h2>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.html">Sal</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
								</span>
								<span class="post-read-more"><a href="post.html" title="Read Story"></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end post -->

			<!-- begin post -->
			<div class="col-md-4">
				<div class="card">
					<a href="post.html">
					<img class="img-fluid img-thumb" src="assets/img/demopic/7.jpg" alt="">
					</a>
					<div class="card-block">
						<h2 class="card-title"><a href="post.html">Little red dress and a perfect summer</a></h2>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.html">Sal</a></span><br/>
								<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
								</span>
								<span class="post-read-more"><a href="post.html" title="Read Story"></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end post -->

		</div>
	</div>
</div>
<!-- End Related Posts
================================================== -->

<!-- Begin Twitter Timeline
================================================== 
<div class="container margtop3rem">
<a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776">WowThemesNet Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<!-- End Twitter Timeline
================================================== -->

<!-- Begin AlertBar
================================================== 
<div class="alertbar">
	<div class="container text-center">
		<img src="assets/img/logo.png" alt=""> &nbsp; Never miss a <b>story</b> from us, get weekly updates in your inbox. <a href="#" class="btn subscribe">Get Updates</a>
	</div>
</div>
<!-- End AlertBar
================================================== 

<!-- Begin Footer
================================================== 
<div class="container">
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2017 Your Website Name
		</p>
		<p class="pull-right">
			 Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
		</p>
		<div class="clearfix">
		</div>
	</div>
</div>
<!-- End Footer
================================================== 

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Tetap terhubung dengan kami:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/smkprakaryainternasional52" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>&nbsp&nbsp&nbsp
      <a href="https://twitter.com/smk_pi" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>&nbsp&nbsp&nbsp
      <a href="http://www.smk-pi.sch.id/" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>&nbsp&nbsp&nbsp
      <a href="https://www.instagram.com/smkpi/" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>&nbsp&nbsp&nbsp
      <a href="https://id.linkedin.com/in/smk-prakarya-internasional-smk-pi-83983462" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>&nbsp&nbsp&nbsp
      <a href="https://www.youtube.com/channel/UCHWU9HLW5W12A__NlTFiGxA" class="me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
		  <img src="https://pbs.twimg.com/profile_images/560621599158591488/SdBbN9Fn_400x400.png" alt="Logo smk pi"
				width="25px">&nbsp SMK PI
          </h6>
          <p>
		  Selamat datang di SMK Prakarya Internasional [SMK PI], Rekayasa Teknologi & Manajemen, yang telah terakreditasi dengan nilai ‘A’ dari Badan Akreditasi Nasional Sekolah/Madrasah
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i><a href="https://goo.gl/maps/rXADMA6t7yXtx17r8" style="text-decoration: none"> Jl. Inhoftank No.46-146, Pelindung Hewan</a></p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@smk-pi.sch.id
          </p>
          <p><i class="fas fa-phone me-3"></i> (022) 5202834</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>

  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://giwan24.github.io/Company_Profile/">Klinik Coding</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! asset('js/jquery.min.js') !!}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
		crossorigin="anonymous"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/ie10-viewport-bug-workaround.js') !!}"></script>
@endforeach
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</body>
</html>

