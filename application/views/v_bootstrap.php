<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap demo</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous"
		/>
	</head>
	<body>
		<!-- Awal Navbar -->
		<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #008dda">
			<div class="container">
				<a class="navbar-brand text-white" href="#">Muhammad Rifki</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active text-white" aria-current="page" href="#"
								>Beranda</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#tentang">Tentang Saya</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#portofolio">Portofolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#kontak"	
								>Kontak</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Akhir Navbar -->
		<!-- Awal Jumbotron -->
		<div class="jumbotron jumbotron-fluid mb-4" id="beranda">
			<div
				class="container-fluid text-center pt-4 pb-4"
				style="background-color: #dde6ed"
			>
				<img
					src="http://localhost/latihan_upload/gambar/rifki.jpg"
					width="200"
					class="rounded-circle"
					alt="..."
				/>
				<h1 class="display-4">Muhammad Rifki</h1>
				<p class="lead">CTO & Mobile Developer Catatmak</p>
			</div>
		</div>
		<!-- Akhir Jumbotron -->

		<!-- Awal Tentang Saya -->
		<div class="container-fluid mb-4" id="tentang">
			<h1 class="text-center fs-2 fw-semibold mb-3">TENTANG SAYA</h1>
			<div class="row justify-content-center text-center">
				<div class="col-md-5">
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi
						incidunt quam ea, eveniet harum consequatur culpa vitae sed maiores
						ex rem a quo molestias itaque quaerat aperiam reiciendis debitis
						ratione mollitia expedita dolore deleniti minus dicta! Aspernatur,
						possimus! Ratione placeat eaque sapiente ex labore architecto autem
						voluptatibus. Nulla qui tempora cupiditate aspernatur excepturi
						libero totam! Amet eos ipsa rerum, corporis quam asperiores.
					</p>
				</div>
				<div class="col-md-5">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
					iste placeat odit laborum nemo obcaecati aut reiciendis pariatur, sint
					ex iure saepe libero. Esse modi nam optio iusto tempora? Iure eligendi
					ratione fugiat quibusdam iusto non accusantium est eius, voluptatem
					cumque itaque culpa error tenetur, repudiandae, doloribus totam quidem
					rerum asperiores quisquam dolore consequuntur. Dolor maxime tenetur
					quos asperiores modi maiores placeat ullam
				</div>
			</div>
		</div>
		<!-- Akhir Tentang Saya -->
		<!-- Awal Portofolio -->
		<div
			class="container-fluid pt-4 p pb-4"
			style="background-color: #dde6ed; margin-bottom: 2rem"
			id="portofolio"
		>
			<h1 class="text-center fs-2 fw-semibold mb-3">PORTOFOLIO</h1>
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="card">
						<img
							src="http://localhost/latihan_upload/gambar/porto-1.jpg"
							class="card-img-top"
							alt="..."
						/>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								Some quick example text to build on the card title and make up
								the bulk of the card's content.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img
							src="http://localhost/latihan_upload/gambar/porto-2.jpg"
							class="card-img-top"
							alt="..."
						/>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								Some quick example text to build on the card title and make up
								the bulk of the card's content.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img
							src="http://localhost/latihan_upload/gambar/porto-3.jpg"
							class="card-img-top"
							alt="..."
						/>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								Some quick example text to build on the card title and make up
								the bulk of the card's content.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Akhir Portofolio -->
		<!-- Awal Kontak -->
		<div class="container-fluid mb-5" id="kontak">
			<h1 class="text-center fs-2 fw-semibold mb-3">KONTAK SAYA</h1>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<form>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email</label>
							<input
								type="email"
								class="form-control"
								id="exampleInputEmail1"
								aria-describedby="emailHelp"
							/>
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Nama</label>
							<input
								type="text"
								class="form-control"
								id="exampleInputEmail1"
								aria-describedby="emailHelp"
							/>
						</div>
						<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
						<button type="submit" class="btn btn-primary">Kirim</button>
					</form>
				</div>
			</div>
		</div>
		<!-- Akhir Kontak -->
		<!-- Awal Footer -->
		<div class="container-fluid p-4" style="background-color: #008dda">
			<p class="text-white text-center">Dibuat dengan ❤️ dari Muhammad Rifki</p>
		</div>
		<!-- Akhir Footer -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"
		></script>
	</body>
</html>
