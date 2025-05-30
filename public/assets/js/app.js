// loader
document.body.style.overflow = 'hidden';
window.addEventListener('load', function () {
    var loader = document.querySelector('.loader-full-elem');
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
        document.body.style.overflow = 'auto';
    }, 100);
});
