@yield('header-content')

<body>
    <div id="app">
        @yield('left-sidebar')
        <div id="main">
            @yield('nav-bar')
            <div class="main-content container-fluid">
                @yield('dashboard-heading')
                <section class="section">
                    <div class="row mb-2">
                        @yield('banner')
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            @yield('listing-content')
                            @yield('chart')
                        </div>
                    </div>
                </section>
            </div>

            {{----------- service form modal start -----------}}
            @yield('service-content')
            {{----------- service form modal end -----------}}
            @yield('footer-content')