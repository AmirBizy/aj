<script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/appear.min.js') }}"></script>
<script src="{{ url('assets/js/gsap.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('assets/js/slick.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('assets/js/wow.min.js') }}"></script>
<script src="{{ url('assets/js/script.js') }}"></script>

{{-- loader --}}
<script>
    document.body.style.overflow = 'hidden';
    window.addEventListener('load', function () {
        var loader = document.querySelector('.loader-full-elem');
        loader.style.opacity = '0';
        setTimeout(() => {
            loader.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 100);
    });
</script>
{{-- loader --}}

@yield('script')
