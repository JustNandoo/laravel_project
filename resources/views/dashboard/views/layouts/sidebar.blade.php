<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} {{ Request::is('dashboard/profile*') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/all*') ? 'active' : '' }}" href="/dashboard/all">
                    <span data-feather="user"></span>
                    Students
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kelasall*') ? 'active' : '' }}" href="/dashboard/kelasall">
                    <span data-feather="book"></span>
                    Classes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/ekstraculicullar*') ? 'active' : '' }}" href="/dashboard/ekstraculicullar">
                    <span data-feather="award"></span>
                    Ekstraculicullar
                </a>
            </li>
            <hr>
            <li class="nav-item">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-light border-0">Log Out</button>
            </form>
        </div>
            </li>
        </ul>

        @can('admin')
        <hr class="my-2">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
    
        </ul>
        @endcan
    </div>
</nav>
