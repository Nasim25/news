<div id="sidebar" class="navbar-collapse collapse">
    <!-- BEGIN Navlist -->
    <ul class="nav nav-list">
        <!-- BEGIN Search Form -->
        <li>
            <form target="#" method="GET" class="search-form">
                <span class="search-pan">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                </span>
            </form>
        </li>
        <!-- END Search Form -->
        <li class="active">
            <a href="{{route('dashboard')}}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="typography.html">
                <i class="fa fa-text-width"></i>
                <span>Typography</span>
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-desktop"></i>
                <span>Categories</span>
                <b class="arrow fa fa-angle-right"></b>
            </a>

            <!-- BEGIN Submenu -->
            <ul class="submenu">
                <li><a href="{{route('category.index')}}">Category</a></li>
                <li><a href="{{route('subcategory.index')}}">Subcategory</a></li>
            </ul>
            <!-- END Submenu -->
        </li>
        
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-desktop"></i>
                <span>District</span>
                <b class="arrow fa fa-angle-right"></b>
            </a>

            <!-- BEGIN Submenu -->
            <ul class="submenu">
                <li><a href="{{route('category.index')}}">District</a></li>
                <li><a href="{{route('subcategory.index')}}">Subdistrict</a></li>
            </ul>
            <!-- END Submenu -->
        </li>

    </ul>
    <!-- END Navlist -->

    <!-- BEGIN Sidebar Collapse Button -->
    <div id="sidebar-collapse" class="visible-lg">
        <i class="fa fa-angle-double-left"></i>
    </div>
    <!-- END Sidebar Collapse Button -->
</div>
