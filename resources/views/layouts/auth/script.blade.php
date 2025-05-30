<script src="{{ url('assets/admin/js/bundle.js') }}"></script>
<script src="{{ url('assets/admin/js/scripts.js') }}"></script>

<script src="{{ url('assets/js/sweetalert2.js') }}"></script>

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

