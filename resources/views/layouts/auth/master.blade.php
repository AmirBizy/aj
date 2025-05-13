<!DOCTYPE html>
<html lang="fa" class="js">

@include('layouts.auth.head')

<body class="has-rtl nk-body bg-white dark-mode npc-general pg-auth" dir="rtl">
@yield('content')
<!-- app-root @e -->
<!-- JavaScript -->
@include('layouts.auth.script')
<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">کشور خود را انتخاب کنید</h5>
                <div class="nk-country-region">
                    <ul class="country-list text-center gy-2">
                        <li>
                            <a href="#" class="country-item">
                                <img src="{{ url('assets/auth/images/flags/iran.png') }}" alt="" class="country-flag"/>
                                <span class="country-name">ایران</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="{{ url('assets/auth/images/flags/english.png') }}" alt="" class="country-flag"/>
                                <span class="country-name">ایالات متحده آمریکا</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .modal-content -->
    </div>
    <!-- .modla-dialog -->
</div>
<!-- .modal -->
</body>
</html>
