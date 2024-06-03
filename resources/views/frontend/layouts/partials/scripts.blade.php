<script src="{{asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('public/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('public/frontend/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('public/frontend/assets/js/main.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session('message'))
    toastr.info('{{ session('message') }}')
    @endif

    @if(session('warning'))
    toastr.warning('{{ session('warning') }}')
    @endif

    @if(session('success'))
    toastr.success('{{ session('success') }}')
    @endif

    @if(session('error'))
    toastr.error('{{ session('error') }}')
    @endif

    //Jquery On ecnyer event bonding
    (function($) {
        $.fn.onEnter = function(func) {
            this.bind('keypress', function(e) {
                if (e.keyCode === 13) func.apply(this, [e]);
            });
            return this;
        };
    })(jQuery);
</script>

@yield('footer.js')