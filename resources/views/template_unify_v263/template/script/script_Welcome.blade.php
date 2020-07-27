
    <!-- JS Global Compulsory -->
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/popper.js/popper.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/hs.core.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/components/hs.header.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/components/hs.dropdown.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/helpers/hs.height-calc.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/components/hs.carousel.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/components/hs.popup.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="{{ asset('/public/').'/'.$root }}/assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of header's height equal offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });
    </script>