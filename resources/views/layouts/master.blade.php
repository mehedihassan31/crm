@include('layouts.head')

<body>
    <div class="page">
        <!-- Sidebar -->

        @include('layouts.sidebar')

        <div class="page-wrapper">
            <!-- Page header -->

            @include('layouts.page-header')


            <!-- Page body -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row row-cards">
                        @yield('page-content')
                    </div>
                </div>
            </div>


            @include('layouts.footer')

        </div>
    </div>

    @include('layouts.modal')

    <!-- Libs JS -->
    @include('sweetalert::alert')

    @stack('custom-scripts')

</body>

</html>
