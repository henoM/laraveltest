@extends('admin.layouts.app')
@section('styles')

    <style>
        sdfs
    </style>
@endsection
@section('content')
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
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
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Base</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd68c.html?page=components/base/state&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">State Colors</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4b55.html?page=components/base/typography&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Typography</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index762e.html?page=components/base/stack&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Stack</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index70fa.html?page=components/base/tables&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tables</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9c73.html?page=components/base/progress&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Progress</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4c34.html?page=components/base/modal&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Modal</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd2bb.html?page=components/base/alerts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Alerts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd729.html?page=components/base/popover&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Popover</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5e77.html?page=components/base/tooltip&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tooltip</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb2f8.html?page=components/base/blockui&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Block UI</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index68d9.html?page=components/base/spinners&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Spinners</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexbc58.html?page=components/base/scrollable&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Scrollable</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexbd9f.html?page=components/base/dropdown&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Dropdown</span></a></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tabs</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1f9d.html?page=components/base/tabs/bootstrap&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Bootstrap Tabs</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index64cb.html?page=components/base/tabs/line&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Line Tabs</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index6e4a.html?page=components/base/accordions&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Accordions</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index363a.html?page=components/base/navs&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Navs</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index8d6b.html?page=components/base/lists&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Lists</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4452.html?page=components/base/treeview&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tree View</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index78ac.html?page=components/base/bootstrap-notify&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Bootstrap Notify</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexad9a.html?page=components/base/toastr&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Toastr</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index0dbd.html?page=components/base/sweetalert2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">SweetAlert2</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-share"></i><span
                                    class="m-menu__link-text">Icons</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb4bb.html?page=components/icons/flaticon&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Flaticon</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index860a.html?page=components/icons/fontawesome&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Fontawesome</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9b69.html?page=components/icons/lineawesome&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Lineawesome</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexa2ac.html?page=components/icons/socicons&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Socicons</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-multimedia-1"></i><span
                                    class="m-menu__link-text">Buttons</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Base</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index8f18.html?page=components/buttons/base/default&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Default Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbcd9.html?page=components/buttons/base/square&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Square Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index6c27.html?page=components/buttons/base/pill&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Pill Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index57af.html?page=components/buttons/base/air&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Air Style</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexea05.html?page=components/buttons/group&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Group</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4259.html?page=components/buttons/dropdown&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Dropdown</span></a></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Icon</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa96d.html?page=components/buttons/icon/lineawesome&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Lineawesome Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index8e01.html?page=components/buttons/icon/fontawesome&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Fontawesome Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb319.html?page=components/buttons/icon/flaticon&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Flaticon Icons</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-7"></i><span
                                    class="m-menu__link-text">Forms</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Forms</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Controls</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index528a.html?page=components/forms/controls/base&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Base Inputs</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index529c.html?page=components/forms/controls/checkbox-radio&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Checkbox & Radio</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb45c.html?page=components/forms/controls/input-group&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Input Groups</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index67e1.html?page=components/forms/controls/switch&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Switch</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index53f8.html?page=components/forms/controls/option&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Mega Options</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Widgets</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexe42e.html?page=components/forms/widgets/bootstrap-datepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Datepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexec34.html?page=components/forms/widgets/bootstrap-datetimepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Datetimepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0f4e.html?page=components/forms/widgets/bootstrap-timepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Timepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index47d4.html?page=components/forms/widgets/bootstrap-daterangepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Daterangepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index305d.html?page=components/forms/widgets/bootstrap-touchspin&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Touchspin</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbf79.html?page=components/forms/widgets/bootstrap-maxlength&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Maxlength</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index84e1.html?page=components/forms/widgets/bootstrap-switch&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Switch</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexf2cf.html?page=components/forms/widgets/bootstrap-multipleselectsplitter&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Multiple Select Splitter</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index5569.html?page=components/forms/widgets/bootstrap-select&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Bootstrap Select</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index87d2.html?page=components/forms/widgets/select2&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Select2</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1244.html?page=components/forms/widgets/typeahead&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Typeahead</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index947b.html?page=components/forms/widgets/nouislider&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">noUiSlider</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index38c2.html?page=components/forms/widgets/form-repeater&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Repeater</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index68b1.html?page=components/forms/widgets/ion-range-slider&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ion Range Slider</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index7918.html?page=components/forms/widgets/input-mask&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Input Masks</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index871d.html?page=components/forms/widgets/summernote&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Summernote WYSIWYG</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3729.html?page=components/forms/widgets/bootstrap-markdown&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Markdown Editor</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa7ca.html?page=components/forms/widgets/autosize&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Autosize</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index356e.html?page=components/forms/widgets/clipboard&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Clipboard</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index74e2.html?page=components/forms/widgets/dropzone&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Dropzone</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index9c8a.html?page=components/forms/widgets/recaptcha&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Google reCaptcha</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Layouts</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0c23.html?page=components/forms/layouts/default-forms&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Default Forms</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index4ba7.html?page=components/forms/layouts/multi-column-forms&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Multi Column Forms</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1911.html?page=components/forms/layouts/action-bars&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Action Bars</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Validation</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index35a9.html?page=components/forms/validation/states&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Validation States</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index949a.html?page=components/forms/validation/form-controls&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Controls</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0a6d.html?page=components/forms/validation/form-widgets&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Widgets</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0725.html?page=components/forms/wizard/wizard-1&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Wizard 1</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexcea7.html?page=components/forms/wizard/wizard-2&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Wizard 2</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0972.html?page=components/forms/wizard/wizard-3&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Wizard 3</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index65cc.html?page=components/forms/wizard/wizard-4&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Wizard 4</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index74e9.html?page=components/forms/wizard/wizard-5&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Wizard 5</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Datatables</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span
                                                class="m-menu__link-text">Datatables</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Base</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3b4e.html?page=components/datatables/base/data-local&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexfc61.html?page=components/datatables/base/data-json&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">JSON Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa09f.html?page=components/datatables/base/data-ajax&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ajax Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb8a6.html?page=components/datatables/base/html-table&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">HTML Table</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3e66.html?page=components/datatables/base/record-selection&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Record Selection</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb642.html?page=components/datatables/base/local-sort&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Sort</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd02d.html?page=components/datatables/base/row-details&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Row Details</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa841.html?page=components/datatables/base/column-rendering&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Rendering</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index29ba.html?page=components/datatables/base/column-width&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Width</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa26b.html?page=components/datatables/base/responsive-columns&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Responsive Columns</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0768.html?page=components/datatables/base/translation&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Translation</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Scrolling</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa4d5.html?page=components/datatables/scrolling/vertical&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Vertical Scrolling</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbcbc.html?page=components/datatables/scrolling/horizontal&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Horizontal Scrolling</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexcb34.html?page=components/datatables/scrolling/both&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Both Scrolling</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Locked Columns</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index6bdf.html?page=components/datatables/locked/left&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Left Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index6333.html?page=components/datatables/locked/right&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Right Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0ef3.html?page=components/datatables/locked/both&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Both Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd635.html?page=components/datatables/locked/html-table&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">HTML Table</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Child Datatables</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index9ae5.html?page=components/datatables/child/data-local&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb694.html?page=components/datatables/child/data-ajax&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Remote Data</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">API</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexcfc0.html?page=components/datatables/api/methods&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">API Methods</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index2a14.html?page=components/datatables/api/events&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Events</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-1"></i><span
                                    class="m-menu__link-text">Portlets</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Portlets</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index7cd6.html?page=components/portlets/base&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Base Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3417.html?page=components/portlets/advanced&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Advanced Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5e78.html?page=components/portlets/creative&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Creative Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexc614.html?page=components/portlets/tabbed&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tabbed Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index8f4f.html?page=components/portlets/draggable&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Draggable Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4a4c.html?page=components/portlets/tools&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Portlet Tools</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-6"></i><span
                                    class="m-menu__link-text">Timeline</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd43d.html?page=components/timeline/timeline-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Timeline 1</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5be0.html?page=components/timeline/timeline-2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Timeline 2</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9e5e.html?page=components/widgets/general&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">General Widgets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexadf5.html?page=components/widgets/chart&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Chart Widgets</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-calendar"></i><span
                                    class="m-menu__link-text">Calendar</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="{{route('admin.basic')}}"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Basic Calendar</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexa3d2.html?page=components/calendar/list-view&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">List Views</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index63b8.html?page=components/calendar/google&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Calendar</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexf25d.html?page=components/calendar/external-events&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">External Events</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index80c1.html?page=components/calendar/background-events&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Background Events</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Charts</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Charts</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover"><a href="#" class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">amCharts</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa0f1.html?page=components/charts/amcharts/charts&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Charts</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index11c8.html?page=components/charts/amcharts/stock-charts&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Stock Charts</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index4d61.html?page=components/charts/amcharts/maps&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Maps</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4252.html?page=components/charts/flotcharts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Flot Charts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index2649.html?page=components/charts/google-charts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Charts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3c90.html?page=components/charts/morris-charts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Morris Charts</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-placeholder-1"></i><span
                                    class="m-menu__link-text">Maps</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3924.html?page=components/maps/google-maps&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Maps</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index0bec.html?page=components/maps/jqvmap&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">JQVMap</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="hover"><a
                                href="#" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-signs-2"></i><span
                                    class="m-menu__link-text">Utils</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Utils</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb3f2.html?page=components/utils/session-timeout&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Session Timeout</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexe4cb.html?page=components/utils/idle-timer&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Idle Timer</span></a></li>

                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexe4cb.html?page=components/utils/idle-timer&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Idle Timer</span></a></li>


                            </ul>
                        </div>
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
            </div>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->


    </div>

@endsection

@section('scripts')
    <script>
        haG
    </script>
@endsection