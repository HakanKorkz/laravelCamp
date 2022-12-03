<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset("assets/admin/images") }}/logo.svg" width="25" alt="Aero"><span
                class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset("assets/admin/images") }}/profile_av.jpg"
                                                              alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="javascript:void()"><i class="zmdi zmdi-home"></i><span>Ana sayfa</span></a></li>
            @if(false)
                <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-map"></i><span>Maps</span></a>
                    <ul class="ml-menu">
                        <li><a href="google.html">Google Map</a></li>
                        <li><a href="yandex.html">YandexMap</a></li>
                        <li><a href="jvectormap.html">jVectorMap</a></li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</aside>
