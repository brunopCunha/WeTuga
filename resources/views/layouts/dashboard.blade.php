<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="{{asset('admin/fonts/fontawesome-all.min.css')}}">
    </head>
    <body id="page-top">
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 toggled">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                       href="{{route('home')}}">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">
                            <span>{{ config('app.name', 'Laravel') }}</span>
                        </div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"
                               href="{{route('admin.dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"
                               href="{{route('admin.dashboard')}}">
                                <i class="fas fa-user-friends"></i>
                                <span>Utilizadores</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"
                               href="{{route('admin.content')}}">
                                <i class="fas fa-video"></i>
                                <span>Conteudo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid">
                            <form
                                class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input class="bg-light form-control border-0 small" type="text"
                                           placeholder="Procurar ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary py-0" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav flex-nowrap ml-auto">
                                <li class="nav-item dropdown no-arrow" role="presentation">
                                    <div class="nav-item dropdown no-arrow">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                           href="#">
                                            <span
                                                class="d-none d-lg-inline mr-2 text-gray-600 small">{{Auth::user()->name}}</span>
                                        </a>
                                        <div
                                            class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                            role="menu">
{{--                                            <a class="dropdown-item" role="presentation" href="#">--}}
{{--                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item" role="presentation" href="#">--}}
{{--                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings--}}
{{--                                            </a>--}}
{{--                                            <a class="dropdown-item" role="presentation" href="#">--}}
{{--                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity--}}
{{--                                                log--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-divider"></div>--}}
                                            <a class="dropdown-item" role="presentation" href="{{route('logout')}}">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Terminar sessão
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid" style="min-width: 1344px;">
                        @yield('content')
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright">
                            <span>Copyright © {{ config('app.name', 'Laravel') }} 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/js/chart.min.js')}}"></script>
        <script src="{{asset('admin/js/bs-init.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="{{asset('admin/js/theme.js')}}"></script>
    </body>
    @yield('style')
    @yield('scripts')
</html>
