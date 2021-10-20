@extends("mains.main")

<!-- folder navbar view/nav/navbar -->
@include("nav.navbar")


<!-- jumbotron or description home -->
@section('container')
	<div class="section1">
		<div class="row mt-4">
			<div class="col-md-4 setimg">
				<img src="img/logo.png" alt="" width="200">
			</div>
			<div class="col-md-6">
				<h3>Judul</h3>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora beatae, sequi dolores exercitationem sit, omnis voluptate facilis quidem voluptatum iure soluta qui perspiciatis, eos odit veritatis molestias saepe quo ipsum facere! Nemo doloremque odit repudiandae, incidunt, quos asperiores delectus aliquam laudantium cumque cum ratione, veniam. Adipisci asperiores perferendis libero numquam!</p>
			</div>
		</div>

		<div class="row mt-1 justify-content-center">
			<div class="col-md-1 mr-3 my-2">
				<a href="/login" class="btn btn-primary">Masuk</a>
			</div>
			<div class="col-md-1 my-2">
				<a href="" class="btn btn-success">Forum</a>
			</div>
		</div>
	</div>
@endsection


<!-- count forum and materi -->
@section('section2')
	<div class="row text-center">
		<div class="col-md-6 mb-4">
			<h4>8</h4>
			<p><b>Jumlah forum yang pernah dibuat</b></p>
		</div>
		<div class="col-md-6">
			<h4>8</h4>
			<p><b>Jumlah Materi</b></p>
		</div>
	</div>
@endsection


<!-- materi -->
@section('section3')
<h2 class="text-center sub3">Materi</h2>
<div class="row mt-5 justify-content-center">
	<div class="col-4">
		<a href="#" class="text-decoration-none text-dark">
			<div class="box text-center">
				<i class="fas fa-building fa-3x mb-3"></i>
				<h5>Infrastruktur</h5>
			</div>
		</a>
	</div>

	<div class="col-4">
		<a href="#" class="text-decoration-none text-dark">
			<div class="box text-center ">
				<i class="fas fa-industry fa-3x mb-3"></i>
				<h5>Industri</h5>
			</div>
		</a>
	</div>

	<div class="col-4">
		<a href="#" class="text-decoration-none text-dark">
			<div class="box text-center">
				<i class="fas fa-head-side-brain fa-3x mb-3"></i>
				<h5>Inovasi</h5>
			</div>
		</a>
	</div>
</div>
@endsection


@section("section4")
	<h2 class="text-center sub3">Fitur</h2>
	<div class="row justify-content-center">
		<div class="col-md-2">
			<a href="#" class="text-decoration-none text-dark">
			<div class="box1 text-center">
				<i class="fas fa-head-side-brain fa-3x mb-3"></i>
				<div class="desc">Name</div>
			</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="text-decoration-none text-dark">
			<div class="box1 text-center">
				<i class="fas fa-head-side-brain fa-3x mb-3"></i>
				<div class="desc">Name</div>
			</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="text-decoration-none text-dark">
			<div class="box1 text-center">
				<i class="fas fa-head-side-brain fa-3x mb-3"></i>
				<div class="desc">Name</div>
			</div>
			</a>
		</div>

		<div class="col-md-2">
			<a href="#" class="text-decoration-none text-dark">
			<div class="box1 text-center">
				<i class="fas fa-head-side-brain fa-3x mb-3"></i>
				<div class="desc">Name</div>
			</div>
			</a>
		</div>
	</div>
		
@endsection

@section("footer")
	<footer class="text-center f mt-5" style="height: 100px; line-height: 100px;">
			&copy; Copyright by: Tim NamDosan
	</footer>
@endsection

