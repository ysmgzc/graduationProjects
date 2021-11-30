<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('Backend/assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('Backend/assets/images/dashboard/man.png')}}" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{route('admin.index')}}"><i data-feather="home"></i><span>Anasayfa</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Ürünler</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Ürün İşlemleri</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="category-digital.html"><i class="fa fa-circle"></i>Ürün Ekle</a></li>
                            <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Ürün Listesi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Marka İşlemleri</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('marka.create')}}"><i class="fa fa-circle"></i>Marka Ekle</a></li>
                            <li><a href="{{route('marka.index')}}"><i class="fa fa-circle"></i>Marka Listesi</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--
            <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Satış</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="order.html"><i class="fa fa-circle"></i>Siparişler</a></li>
                    <li><a href="transactions.html"><i class="fa fa-circle"></i>İşlemler</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Kuponlar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="coupon-list.html"><i class="fa fa-circle"></i>Kupon Listesi</a></li>
                    <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Kupon Oluştur </a></li>
                </ul>
            </li>
            -->
            <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Sayfalar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('sozlesme.index')}}"><i class="fa fa-circle"></i>Sayfa Listesi</a></li>
                    <li><a href="{{route('sozlesme.create')}}"><i class="fa fa-circle"></i>Sayfa Oluştur</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menü</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('menu.index')}}"><i class="fa fa-circle"></i>Menü Listesi</a></li>
                    <li><a href="{{route('menu.create')}}"><i class="fa fa-circle"></i>Ana Menü Oluştur</a></li>
                    <li><a href="{{route('submenu.index')}}"><i class="fa fa-circle"></i>Alt Menü Listesi</a></li>
                    <li><a href="{{route('submenu.create')}}"><i class="fa fa-circle"></i>Alt Menü Oluştur</a></li>
                </ul>
            </li>
            <!--
            <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Kullanıcılar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="user-list.html"><i class="fa fa-circle"></i>Kullanıcı Listesi</a></li>
                    <li><a href="create-user.html"><i class="fa fa-circle"></i>Kullanıcı Oluştur</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Satıcılar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Satıcı Listesi</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Satıcı Ekle</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Yerelleştirme</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Döviz Kurları</a></li>
                    <li><a href="taxes.html"><i class="fa fa-circle"></i>Vergiler</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Satış Raporu</span></a></li> -->
            <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Ayarlar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.profil')}}"><i class="fa fa-circle"></i>Profil</a></li>
                    <li><a href="{{route('admin.site.settings')}}"><i class="fa fa-circle"></i>Site Ayarları</a></li>
                    <li><a href="{{route('admin.site.mail.settings')}}"><i class="fa fa-circle"></i>Mail Ayarları</a></li>
                    <li><a href="{{route('admin.contact.settings')}}"><i class="fa fa-circle"></i>İletişim Ayarları</a></li>
                </ul>
            </li>
            <!--
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Kesilen Faturalar</span></a>
            </li>
            -->
            <li><a class="sidebar-header" href="{{route('logout')}}"><i data-feather="log-in"></i><span>Çıkış Yap</span></a>
            </li>
        </ul>
    </div>
</div>
