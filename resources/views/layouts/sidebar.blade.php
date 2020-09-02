<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">RHC Members</a>
            <a class="navbar-brand hidden" href="./"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
                <h3 class="menu-title">Players</h3><!-- /.menu-title -->
            <ul>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Account </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>COVID-19 Guiance </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Club News </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Membership Fees </a>
                </li>
            </ul>

                <h3 class="menu-title">Captains</h3><!-- /.menu-title -->

                <ul>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>List Team Players </a>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Resources </a>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Captains Handbook </a>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>COVID-19 Guidance</a>
                    </li>
                </ul>


                <h3 class="menu-title">Commitie</h3><!-- /.menu-title -->
                <ul>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Club Players </a>
                    </li>

                </ul>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
