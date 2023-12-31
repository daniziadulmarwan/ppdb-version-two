<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="/images/logo.png">
  
  <!-- Page Title  -->
  <title>AL-AMIN PPDB | Signup</title>
  
  <!-- StyleSheets  -->
  <link rel="stylesheet" href="/assets/css/dashlite.css?ver=3.1.1">
  <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=3.1.1">
  @vite('resources/js/app.js')
</head>

<body class="nk-body bg-white npc-default pg-auth light-mode">
  <div class="nk-app-root">
    <div class="nk-main ">
      <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
          <div class="nk-split nk-split-page nk-split-lg">

            <!-- Start Left Side -->
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">

                  <!-- Start Brand -->
                  <div class="brand-logo pb-5">
                      <a href="/signup" class="logo-link">
                          <img class="logo-light logo-img logo-img-lg" src="/assets/images/ppdb-dark.png" srcset="/assets/images/ppdb-dark.png 2x" alt="logo">
                          <img class="logo-dark logo-img logo-img-lg" src="/assets/images/ppdb-light.png" srcset="/assets/images/ppdb-light.png 2x" alt="logo-dark">
                      </a>
                  </div>
                  <!-- Start Brand -->

                  @if (false)
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Thank you for submitting form</h5>
                            <div class="nk-block-des text-success">
                                <p>You now will be redirect to admin page</p>
                            </div>
                        </div>
                    </div>
                  @else
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Sign-Up</h5>
                        </div>
                    </div>

                    <!-- Start Form -->
                    <form action="/signup" class="form-validate is-alter" method="post">
                        @csrf
                        <div class="form-group">
                            <x-form.input-label for="fullname" text="Nama Lengkap" />
                            <div class="form-control-wrap">
                                <x-form.input-text name="fullname" place="Enter your full name" :error="$errors" />
                                <x-form.input-error name="fullname" :error="$errors" />
                            </div>
                        </div>

                        <div class="form-group">
                            <x-form.input-label for="email" text="Email" />
                            <div class="form-control-wrap">
                                <x-form.input-text type="email" name="email" place="Enter your email" :error="$errors" />
                                <x-form.input-error name="email" :error="$errors" />
                            </div>
                        </div>

                        <div class="form-group">
                            <x-form.input-label for="password" text="Password" />
                            <div class="form-control-wrap">
                                <x-form.input-password name="password" place="Enter your password" :error="$errors" />
                                <x-form.input-error name="password" :error="$errors" /> 
                            </div>
                        </div>

                        <div class="form-group">
                            <x-form.input-label for="confirm_password" text="Confirm Password" />
                            <div class="form-control-wrap">
                                <x-form.input-password name="confirm_password" place="Enter confirm password" :error="$errors" />
                                <x-form.input-error name="confirm_password" :error="$errors" /> 
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                        </div>
                    </form>
                    <!-- End Form -->

                    <div class="nk-block-head mt-4">
                        <div class="nk-block-head-content">
                            <div class="nk-block-des text-center">
                                <p>Already have account ? <a href="/signin">Sign In</a></p>
                            </div>
                        </div>
                    </div>

                  @endif

                </div>
                <div class="nk-block nk-auth-footer">
                  <div class="mt-3">
                      <p>&copy; <script>document.write(new Date().getFullYear())</script>
                        Build by
                        <a href="#" class="text-black">Zeiteim Tech</a>
                      </p>
                  </div>
                </div>
            </div>
            <!-- Start Left Side -->
            
            <!-- Start Right Side -->
            <div class="nk-split-content nk-split-stretch d-flex toggle-break-lg toggle-slide toggle-slide-right bg-primary" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="/assets/images/slides/promo-a.png" srcset="/assets/images/slides/promo-a2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5 text-white">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="/assets/images/slides/promo-b.png" srcset="/assets/images/slides/promo-b2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5 text-white">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="/assets/images/slides/promo-c.png" srcset="/assets/images/slides/promo-c2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5 text-white">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div>
            </div>
            <!-- End Right SIde -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="/assets/js/bundle.js?ver=3.1.1"></script>
  <script src="/assets/js/scripts.js?ver=3.1.1"></script>
</body>
</html>