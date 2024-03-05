<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>쉽고 편한, 뽀요</title>


	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/2024/CI/public/openapi/assets/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/2024/CI/public/openapi/assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/2024/CI/public/openapi/assets/img/favicons/favicon-16x16.png">
	<link rel="shortcut icon" type="image/x-icon" href="/2024/CI/public/openapi/assets/img/favicons/favicon.ico">
	<link rel="manifest" href="/2024/CI/public/openapi/assets/img/favicons/manifest.json">
	<meta name="msapplication-TileImage" content="/2024/CI/public/openapi/assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">


	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link href="/2024/CI/public/openapi/assets/css/theme.css" rel="stylesheet" />

</head>


<body>

	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">

		<section class="py-5 overflow-hidden bg-primary" id="home">
			<div class="container">
				<div class="row flex-center">
					<button type="button" class="btn btn-warning text-dark border border-warning fs-2" onclick="location.href='/2024/CI/public/'">메인페이지로</button>
					<div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="/2024/CI/public/Redirect/openapi/"><img class="img-fluid" src="/2024/CI/public/openapi/assets/img/cube.png" alt="hero-header" /></a></div>
					<div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
						<h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">뽀요,</h1>
						<h1 class="text-800 mb-5 fs-4">원하는 API가 있으신가요?<br class="d-none d-xxl-block" />사용하기 쉬울거예요</h1>
						<div class="card w-xxl-75">
							<div class="card-body">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>API명</button>
										<button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>기관명</button>
									</div>
								</nav>
								<div class="tab-content mt-3" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
										<form class="row gx-2 gy-2 align-items-center">
											<div class="col">
												<!-- <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i> -->
												<label class="visually-hidden" for="inputDelivery">API</label>
												<input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="API명으로 찾아드릴게요" />
												<!-- </div> -->
											</div>
											<div class="d-grid gap-3 col-sm-auto">
												<button class="btn btn-danger" type="submit">검색</button>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
										<form class="row gx-4 gy-2 align-items-center">
											<div class="col">
												<!-- <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i> -->
												<label class="visually-hidden" for="inputPickup">Address</label>
												<input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="기관명으로 찾아드릴게요" />
												<!-- </div> -->
											</div>
											<div class="d-grid gap-3 col-sm-auto">
												<button class="btn btn-danger" type="submit">검색</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============================================-->
		<!-- <section> begin ============================-->
		<section class="py-8 overflow-hidden">
			<div class="container">
				<div class="row flex-center mb-6">
					<div class="col-lg-7">
						<h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">현재 아래의 API들을 사용할 수 있어요</h5>
						<h6 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">원하는 API를 클릭하세요</h6>
					</div>
					<div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#" role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
					<div class="col-lg-auto position-relative">
						<button class="carousel-control-prev s-icon-prev carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
						<button class="carousel-control-next s-icon-next carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
					</div>
				</div>
				<table class="table table-warning table-bordered table-hover">
					<thead class="table-success">
						<tr style="text-align:center;">
							<th scope="col" style="width:5vw;">순번</th>
							<th scope="col" style="width:25vw;">기관명</th>
							<th scope="col">API명</th>
						</tr>
					</thead>
					<tbody>
						<tr onclick="kisaSearchDomain();;">
							<th class="idx-row" scope="row">1</th>
							<td>한국인터넷진흥원</td>
							<td>인터넷주소 정보 검색 서비스</td>
						</tr>
						<tr>
							<th class="idx-row" scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
						</tr>
						<tr>
							<th class="idx-row" scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
						</tr>
						<tr>
							<th class="idx-row" scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
						</tr>
						<tr>
							<th class="idx-row" scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
						</tr>
						<tr>
							<th class="idx-row" scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
						</tr>
					</tbody>
				</table>
		</div><!-- end of .container-->

		</section>
		<!-- <section> close ============================-->
		<!-- ============================================-->


	</main>
	<!-- ===============================================-->
	<!--    End of Main Content-->
	<!-- ===============================================-->

	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->
	<script src="/2024/CI/public/openapi/vendors/@popperjs/popper.min.js"></script>
	<!-- <script src="/2024/CI/public/openapi/vendors/bootstrap/bootstrap.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="/2024/CI/public/openapi/vendors/is/is.min.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
	<script src="/2024/CI/public/openapi/vendors/fontawesome/all.min.js"></script>
	<script src="/2024/CI/public/openapi/assets/js/theme.js"></script>
	<script src="/2024/CI/public/openapi/assets/js/popup.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>