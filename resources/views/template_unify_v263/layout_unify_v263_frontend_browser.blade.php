
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('general_layout.title')
    @include('general_layout.meta_frontend')
    @include($template.'.template.css.css_'.$page)
  </head>

  <body>
    <main>
      <!-- Header -->      
      @include($template.'.company.'.replace_to_underscore(dmha_326_what_is_my_perusahaan_mode()).'.header')  
      <!-- End Header -->

      
      <!-- Alumni Articles -->
      <div class="g-pos-rel">
        <div class="container">
          <div class="row justify-content-lg-between">
            <div class="col-md-4 col-lg-3 g-pt-100">
              <h3 class="mb-4">Related Links</h3>

              <!-- Links List -->
              <ul class="list-unstyled mb-5">
                <li class="py-1">
                  <a class="d-block active u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8" href="#">
                    <i class="align-middle mr-3 icon-hotel-restaurant-088 u-line-icon-pro"></i>
                    Alumni
                  </a>
                </li>
                <li class="py-1">
                  <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8" href="#">
                    <i class="align-middle mr-3 icon-finance-258 u-line-icon-pro"></i>
                    Alumni benefits &amp; awards
                  </a>
                </li>
                <li class="py-1">
                  <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8" href="#">
                    <i class="align-middle mr-3 icon-finance-075 u-line-icon-pro"></i>
                    Volunteer
                  </a>
                </li>
                <li class="py-1">
                  <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8" href="#">
                    <i class="align-middle mr-3 icon-education-143 u-line-icon-pro"></i>
                    Connect
                  </a>
                </li>
                <li class="py-1">
                  <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8" href="#">
                    <i class="align-middle mr-3 icon-finance-138 u-line-icon-pro"></i>
                    Give now
                  </a>
                </li>
              </ul>
              <!-- End Links List -->

              <!-- Twitter Feed -->
              <h3 class="mb-4">Twitter Feeds</h3>
              <ul class="list-unstyled mb-0">
                <li class="g-brd-bottom g-brd-secondary-light-v2 g-pb-20">
                  <h4 class="h6">RT <a class="g-font-weight-500" href="#">@UofA_Arts:</a> DON'T MISS</h4>
                  <p class="g-color-text-light-v1 g-font-size-13 mb-0">Political Science's “What Comes Next? The Political Afterlives of the <a class="g-font-weight-500" href="#">#TRC</a>, WED/OCT 4/4:30-6 pm… <a class="g-font-weight-500" href="#">twitter.com/i/web/status/9…</a></p>
                </li>
                <li class="g-pt-20">
                  <h4 class="h6">RT <a class="g-font-weight-500" href="#">@UofA_Arts:</a> DON'T MISS</h4>
                  <p class="g-color-text-light-v1 g-font-size-13 mb-0">Political Science's “What Comes Next? The Political Afterlives of the <a class="g-font-weight-500" href="#">#TRC</a>, WED/OCT 4/4:30-6 pm…</p>
                </li>
              </ul>
              <!-- End Twitter Feed -->
            </div>

            <div class="col-md-8 g-pt-50 g-pt-100--md g-pb-70">
              <div class="row">
                <!-- Alumni Article -->
                <div class="col-sm-6 g-mb-30">
                  <article>
                    <img class="img-fluid mb-4" src="assets/img-temp/600x350/img4.jpg" alt="Image Description">
                    <h2 class="h5"><a href="#">Lend a helping hand by volunteering</a></h2>
                    <p class="g-font-size-16">Give back to the University community by getting involved in volunteering opportunities to support our students, staff and fellow graduates.</p>
                  </article>
                </div>
                <!-- End Alumni Article -->

                <!-- Alumni Article -->
                <div class="col-sm-6 g-mb-30">
                  <article>
                    <img class="img-fluid mb-4" src="assets/img-temp/600x350/img5.jpg" alt="Image Description">
                    <h2 class="h5"><a href="#">Give a donation for the greater good</a></h2>
                    <p class="g-font-size-16">Help us pursue limitless possibilities and make countless lives better. There are numerous ways you can make a donation to the University.</p>
                  </article>
                </div>
                <!-- End Alumni Article -->

                <!-- Alumni Article -->
                <div class="col-sm-6 g-mb-30">
                  <article>
                    <img class="img-fluid mb-4" src="assets/img-temp/600x350/img6.jpg" alt="Image Description">
                    <h2 class="h5"><a href="#">We provide many opportunities for our community</a></h2>
                    <p class="g-font-size-16">Stay connected with your fellow alumni in Australia and around the world through our network of groups, publications and our social networks.</p>
                  </article>
                </div>
                <!-- End Alumni Article -->

                <!-- Alumni Article -->
                <div class="col-sm-6 g-mb-30">
                  <article>
                    <img class="img-fluid mb-4" src="assets/img-temp/600x350/img21.jpg" alt="Image Description">
                    <h2 class="h5"><a href="#">Your charitable gift can become the solution</a></h2>
                    <p class="g-font-size-16">You can support a specific cause or give us the choice of deciding where your donation will have immediate impact.</p>
                  </article>
                </div>
                <!-- End Alumni Article -->
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 col-lg-4 h-100 g-bg-secondary-gradient-v1 g-pos-abs g-top-0 g-left-0 g-z-index-minus-1"></div>
        </div>
      </div>
      <!-- End Alumni Articles -->

      <!-- Footer -->
      @include($template.'.company.'.replace_to_underscore(dmha_326_what_is_my_perusahaan_mode()).'.footer')    
      <!-- End Footer -->

      <!-- Go to Top -->
      <a class="js-go-to u-go-to-v1 u-shadow-v32 g-width-40 g-height-40 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-bg-main--focus g-font-size-12 rounded-circle" href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }' data-offset-top="400"
        data-compensation="#js-header"
        data-show-effect="slideInUp"
        data-hide-effect="slideInDown">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go to Top -->
    </main>

    @include($template.'.template.script.script_'.$page)
  </body>
</html>
