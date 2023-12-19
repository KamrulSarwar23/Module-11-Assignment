<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Admin Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            
            </li>
            <li class="menu-header">Starter</li>

        
            <li class="dropdown">
                <a href="{{ route('products.index') }}" class=""><i class="fa-solid fa-bars"></i>
                    <span>Manage Product</span></a>

            </li>

            <li class="dropdown">
                <a href="{{ route('manage.sale') }}" class=""><i class="fa-solid fa-bars"></i>
                    <span>Manage Sale</span></a>

            </li>
         

        </ul>

    </aside>
</div>
