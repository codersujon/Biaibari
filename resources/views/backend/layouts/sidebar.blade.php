<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon"
                alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Biaibari</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-store'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Pending Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Processing Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Delivery Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Completed Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Return Orders</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Declined Orders</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All User</a></li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Create User</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <div class="parent-icon"><i class='bx bx-log-out'></i></div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>