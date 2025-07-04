<footer class="main-footer">
    <div class="footer-bottom pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($setting && $setting->getTranslation('footer_text'))
                        <div class="copyright-text text-center">
                            {!! $setting->getTranslation('footer_text') !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
