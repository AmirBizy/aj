<footer class="main-footer">
    <div class="footer-bottom pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(LaravelLocalization::getCurrentLocale())
                        @if(LaravelLocalization::getCurrentLocale() == 'fa')
                            <div class="copyright-text text-center"><p>کليه حقوق و محتوای اين سایت متعلق به <a href="{{ route('home.index') }}">امیررضا جعفری</a> می باشد و هر گونه کپی برداری از محتوا سایت غیر مجاز و بدون رضایت است.</p></div>
                        @else
                            <div class="copyright-text text-center"><p>Copyright {{ now()->year }} , <a href="{{ route('home.index') }}">Amirreza Jafari</a> All Rights Reserved.</p></div>
                        @endif
                    @endif
                </div>
                {{--                <div class="col-lg-6">--}}
                {{--                    <div class="copyright-text extra-copyright"><p>Crafted with ❤️ Amirreza Jafari</p></div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
