<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('index') }}" class="d-block"><b>{{ auth()->user()->name }}</b></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.works.index') }}" class="nav-link {{ request()->is('admin/works*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Bizim işlərimiz</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.supporters.index') }}" class="nav-link {{ request()->is('admin/supporters*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hand-holding-heart"></i>
                        <p>Dəstəkçilərimiz</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.slider-items.index') }}" class="nav-link {{ request()->is('admin/slider-items*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Slayder</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kateqoriyalar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->is('admin/services*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>Xidmətlər</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->is('admin/news*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Xəbərlər</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.references.index') }}" class="nav-link {{ request()->is('admin/references*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>Referanslar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.socials.index') }}" class="nav-link {{ request()->is('admin/socials*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-share"></i>
                        <p>Sosial medialar</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.texts.index') }}" class="nav-link {{ request()->is('admin/texts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Statik yazılar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ request()->is('admin/images*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Statik şəkillər</p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('admin/texts*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/texts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Statik yazılar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-2">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('admin/texts/home*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Giriş hissəsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('admin/texts/company*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Şirkət haqqında</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item has-treeview {{ request()->is('admin/mails*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/mails*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            E-poçtlar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-2">
                        <li class="nav-item">
                            <a href="{{ route('admin.mails.orders.index') }}" class="nav-link {{ request()->is('admin/mails/orders*') && !request()->is('admin/mails/orders/replies') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>Gələnlər</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mails.orders.replies') }}" class="nav-link {{ request()->is('admin/mails/orders/replies*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-paper-plane"></i>
                                <p>Göndərildi</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
