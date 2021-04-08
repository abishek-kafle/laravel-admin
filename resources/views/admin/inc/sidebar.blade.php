

        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./"><img src="{{ asset('admin/images/logo.png') }}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/logo2.png') }}" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                            <a href="{{url('about')}}"> <i class="menu-icon fa fa-dashboard"></i>About </a>
                            <a href="{{url('image')}}"> <i class="menu-icon fa fa-dashboard"></i>Image </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->
