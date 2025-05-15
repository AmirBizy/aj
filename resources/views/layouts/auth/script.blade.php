<script src="{{ url('assets/auth/js/bundle.js') }}"></script>
<script src="{{ url('assets/auth/js/scripts.js') }}"></script>

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
