<div class="m-grid m-grid--hor m-grid--root m-page" style="flex: unset;martgin-left:50px;">
    <!-- BEGIN: Header -->
    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
        <!-- BEGIN: Aside Menu -->
        <div
                id="m_ver_menu"
                class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                data-menu-vertical="true"
                data-menu-scrollable="false" data-menu-dropdown-timeout="500"
        >
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a
                            href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i
                                class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span
                                    class="m-menu__link-wrap">      <span class="m-menu__link-text">Dashboard</span>      <span
                                        class="m-menu__link-badge"><span
                                            class="m-badge m-badge--danger">2</span></span>  </span></span></a>
                </li>
                <li class="m-menu__section">
                    <h4 class="m-menu__section-text">Components</h4>
                    <i class="m-menu__section-icon flaticon-more-v3"></i>
                </li>

                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                    data-menu-submenu-toggle="hover"><a
                            href="{{route('admin.user.users')}}" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Users</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                </li>
                <li class="m-menu__item " aria-haspopup="true">
                    <a class="m-menu__link " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>>
    </div>



</div>