

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">NHDB V2</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class="{{ (request()->is('serveurs_datatable_index')) ? 'active' : '' }} nav-item"><a href="{{ route('serveurs_datatable_index') }}"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Email">Serveurs</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Chat">Mailing</span></a>
                </li>
                <li class="{{ (request()->is('clients')) ? 'active' : '' }} nav-item"><a  href=""><i class="feather icon-users"></i><span class="menu-title" data-i18n="Todo">Clients</span></a>
                </li>
                <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Formules & NDD</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-layers"></i><span class="menu-title" data-i18n="Ecommerce">Produits</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Certificat ssl</span></a>
                        </li>
                        <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Passerelle de sécurité emails</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Infogérance</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Abonnements</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Options</span></a>
                        </li>
                        <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Details</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>


                <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title" data-i18n="User">Options</span></a>
                    <ul class="menu-content">
                        <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Type Clients</span></a>
                        </li>
                        <li><a href=""><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Modele Des E'Mail</span></a>
                        </li>
                        <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Modele Des Factures</span></a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
