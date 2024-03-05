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
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">뽀요를 소개해요!</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="/2024/CI/public/openapi/assets/img/select.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">선택해<span class="fw-bold text-danger">요!</span></h5>
                    <p class="mb-md-0">어렵지 않아요. 원하는걸 고르세요</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="/2024/CI/public/openapi/assets/img/search.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">검색해<span class="fw-bold text-danger">요!!</span></h5>
                    <p class="mb-md-0">API명, 기관명 <br>원하는 정보로 검색해요</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="/2024/CI/public/openapi/assets/img/gallery/pay.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">절약해<span class="fw-bold text-danger">요!!!</span></h5>
                    <p class="mb-md-0">당신의 시간, 비용을<br>함부로 사용하지 마세요</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="/2024/CI/public/openapi/assets/img/gallery/meals.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">발전해<span class="fw-bold text-danger">요!!!!</span></h5>
                    <p class="mb-md-0">뽀요의 성장은 여기서 <br> 그치지 않아요</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->





      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4 overflow-hidden">

        <div class="container">
          <div class="row h-100">
                <!-- 둥근 그래디언트 버튼 -->
    <button class="custom-button round-gradient-button" onclick="location.href='/2024/CI/public/Openapimove/searchPage/'">다음 페이지에서 바로 사용해요</button>
              
            
          </div>
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
    <!-- <script src="/2024/CI/public/openapi/assets/js/glowy-btn.js"></script> -->

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>