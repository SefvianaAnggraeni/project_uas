<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Freast Official Store. Self Confidence is The Best Outfit">
    <meta name="author" content="Freast Official Store">
    <link rel="apple-touch-icon" href="{{ asset ('vendor/vendor/assets/icon/152.png')}}">
    <link rel="icon" href="{{ asset ('vendor/vendor/assets/images/icon/16.png')}}">
    <link rel="icon" href="{{ asset ('vendor/vendor/assets/images/icon/32.png')}}">
    <link rel="icon" href="{{ asset ('vendor/vendor/assets/images/icon/64.png')}}">
    <link rel="icon" href="{{ asset ('vendor/vendor/assets/images/icon/96.png')}}">
    <meta name="msapplication-TileImage" content="{{ asset ('vendor/vendor/assets/images/icon/16.png')}}">

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('admin.includes.style')
    @stack('addon-style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- Sidebar --}}
        @include('admin.includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- Topbar --}}
                @include('admin.includes.topbar')

                {{-- Page Content --}}
                @yield('content')

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SB ADMIN</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <button class="btn btn-danger" type="button">Logout</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Script --}}
    @stack('prepend-script')
    @include('admin.includes.script')
    @stack('addon-script')

</body>

</html>