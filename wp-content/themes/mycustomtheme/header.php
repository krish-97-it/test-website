<header class="header">
    <nav class="navbar navbar-expand-md navbar-custom-style bg-dark navbar-dark fixed-top">
        <div class="navbar-container-style" id="navbar-container-style" navbar-collapse="false">
            <div class="brand-logo-img">
                <a class="navbar-brand" href="javascript:void(0)"><img src="<?=get_template_directory_uri();?>/assets/brand-logo.webp" alt="Brand" width="76px" height="auto"/></a>
            </div>
            <div class="navbar-toggle-btn">
                <button class="navbar-toggle" id="navbar-toggle-bar" onclick="showNavItems()" data-btn-show="true">
                    <span class="icon-bar"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
                <button class="navbar-toggle navbar-toggle-x" id="navbar-toggle-x" onclick="hideNavItems()" data-btn-show="false">x</button>
            </div>
            <div class="nav-menu-items" id="nav-menu-items" data-collapse="false">
                <div class="header-left-elements">
                    <ul class="navbar-nav-ul">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>Storie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>Loev</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>One</a>
                        </li>
                        <li class="nav-item" style="position: relative;"> 
                            <a class="nav-link nav-link-badge" href="javascript:void(0)" onClick={closeOffCanvas}>
                                <span>Super Bike</span>
                                <span class="badge-box">new</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-right-elements">
                    <ul class="navbar-nav-ul">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>Book Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>Book a Test ride</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="javascript:void(0)" onClick={closeOffCanvas}>Become a Delear</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>