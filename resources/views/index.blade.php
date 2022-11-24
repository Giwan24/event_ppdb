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
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
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
				PPDB&nbsp&nbsp|&nbsp&nbspSMK PI
			</a>
			<!-- End Logo -->
			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<!-- Begin Menu -->
				<ul class="navbar-nav ml-auto">
					
					<br>
					<li class="nav-item active">
						<center>
						<a href="/" style="text-decoration: none;"><h5>Event</h5> <span class="sr-only">(current)</span></a>
						</center>				
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

	<!-- Begin Site Title
================================================== -->
	<div class="container">
		<div class="mainheading">
			<h1 class="sitetitle">Event PPDB</h1>
			<p class="lead">
				Event PPDB SMK Prakarya Internasional 2022-2023<br><br>
				<img
					src="http://lh4.ggpht.com/Yeo7nNNnJQK9g2SeXA8OSOj-rCK4oakn0VX6ySCMxtSFJWc_N1Zv0SkIMcgeqc5WRxDOG-pRKM2s971E3VDsmDkMXA=s1500"
					alt="Logo smk pi" style="border-radius: 30px; width: 100%; height: auto;">
				<br><br>
			</p>
		</div>
		<!-- End Site Title
================================================== -->

		<!-- Begin Event
	================================================== -->
		<section class="featured-posts">
			<div class="section-title">
				<h2><span>Daftar Event</span></h2>
				<form action="/cari" method="GET" class="form-inline my-2 my-lg-0">
					<input class="form-control" type="search" placeholder="Search Event" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<button type="submit" value="CARI" class="btn btn-primary"><i class="fas fa-search"></i></button>
				</form>
				<br>
			</div>
			<div class="card-columns listfeaturedtag">

            @foreach($barang as $b)
				<!-- begin post -->
				<div class="card" style="border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
					<div class="row">
						<div class="col-md-5 wrapthumbnail">
							<a href="{{ url('event') }}/{{ $b->event_id }}">
								<div class="thumbnail"
									style="background-image:url({{ $b->gambar }}); border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
								</div>
							</a>
						</div>
						<div class="col-md-7">
							<div class="card-block">
								<a href="{{ url('event') }}/{{ $b->event_id }}" style="text-decoration: none;">
									<h2 class="card-title">{{ $b->nama_event }}</h2>
									<h4 class="card-text">{{ $b->deskripsi_singkat }}</h4>
								</a>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
											<a><img class="author-thumb"
													src="https://lh3.googleusercontent.com/uWfqJ0OrE8kSBFZq36x940-zQXSb0NSgGQKp0hJEnyS2S32v61U9WMoWd_xOyzfTDvrNLS41W8dP9MIoTg=s180"
													alt="Sal"></a>
										</span>
										<span class="author-meta">
											<span class="post-name"><a>SMK PI</a></span><br />
											<span class="post-date" style="color: rgb(5, 161, 57);"> Tanggal : 10 July 2022</span>
										</span>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end post -->
                @endforeach


		<!-- End Footer
	================================================== -->

	</div>
	<center>
	<br/>
	<h6 class="card-text">
		Halaman : {{ $barang->currentPage() }} <br/>
		Jumlah Event : {{ $barang->total() }} <br/>
		Event Per Halaman : {{ $barang->perPage() }} <br/> <br>
	</h6>
	<div class="d-flex justify-content-center">
		{{ $barang->links() }}<br/>
	</div>
	</center>
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
        <i class="fab fa-web"></i>
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
	<!-- /.container -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
	<script src="{!! asset('js/jquery.min.js') !!}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
		crossorigin="anonymous"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/ie10-viewport-bug-workaround.js') !!}"></script>
</body>

</html>
