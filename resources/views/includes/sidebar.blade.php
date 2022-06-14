<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Projects
                </a>
            </li>
            @if(Route::currentRouteName() != 'project_list')
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Integrations
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Users
                </a>
            </li>
        </ul>


    </div>
</nav>
