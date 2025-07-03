<!-- Footer -->
<footer class="text-center text-lg-start bg-standard text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center  p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>{{ __('ui.footerFollow') }}</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div >
      <a href="" class="me-4 text-reset text-decoration-none ">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset text-decoration-none">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset text-decoration-none">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com/bigboidelvo?igsh=czR3aXNuYnV3cHMz" class="me-4 text-reset text-decoration-none">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset text-decoration-none">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset text-decoration-none">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
   <!-- Section: Form -->
    <section class="container">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-5">
              <strong >{{ __('ui.footerNews') }}</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mt-5">
              <input type="email" id="form5Example24" class="form-control" />
              <label class="form-label" for="form5Example24">{{ __('ui.footerMail') }}</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn card-button2 mt-5">
             {{ __('ui.footerSub') }}
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase font-gen fs-3 mb-4">
            Presto.it
          </h6>
          <p>
            {{__('ui.footerDescr')}}
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            {{ __('ui.footerArticle') }}
          </h6>
          <p>
            <a href="{{route('articles.index')}}" class="text-reset">{{ __('ui.navArticle') }}</a>
          </p>
          <p>
            <a href="" class="text-reset">{{ __('ui.navCategorie') }}</a>
          </p>
          <p>
            <a href="#!" class="text-reset">##</a>
          </p>
          @auth
            <p>
              <a href="{{route('articles.create')}}" class="text-reset">{{ __('ui.insertArticle') }}</a>
            </p>
          @endauth
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            {{ __('ui.footerLink') }}
          </h6>
          <p>
            <a href="{{route('homepage')}}" class="text-reset">HomePage</a>
          </p>
          @auth
          <p>
            <a href="{{route('contact')}}" class="text-reset">{{ __('ui.navWork') }}</a>
          </p>
            <p>
              <a href="{{route('dashboard', Auth::user())}}" class="text-reset">{{ __('ui.navProfilo') }}</a>
            </p>
            <p>
              <a href="" class="text-reset">{{ __('ui.navRevisor') }}</a>
            </p>
          @endauth
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">{{ __('ui.footerContact') }}</h6>
          <p><i class="fas fa-home me-3"></i> Milano, MI 20019, IT</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@prest.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 39 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 39 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2025 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Presto.it</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

