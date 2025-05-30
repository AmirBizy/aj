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

<script src="{{ url('assets/js/app.js') }}"></script>

<script>
    let startTime;

    function startTimer() {
        startTime = Date.now();
    }

    function endTimer() {
        const endTime = Date.now();
        const duration = (endTime - startTime) / 1000;
        if(duration.toFixed(2) >= 5) {
            window.location.href = `{{ route('admin.index') }}`;
        }
    }
</script>

@yield('script')
