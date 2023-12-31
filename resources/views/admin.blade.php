<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Admin</title>
</head>
<style>
    .error-help-block{
        color: red;
    }
    .tags-input-wrapper {
        background: transparent;
        padding: 3px;
        border-radius: 4px;
        width: 100%;
        border: 1px solid #ccc
    }

    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        max-width: 1000px;
        margin-left: 8px;
    }

    .tags-input-wrapper .tag {
        display: inline-block;
        background-color: #fa0e7e;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        box-shadow: 0 5px 15px -2px rgba(250, 14, 126, .7)
    }

    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }
</style>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="{{ url('/') }}" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Laravel</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ url('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/cate') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Danh muc</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/deletecate') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Danh muc delete</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('cate.create') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Thêm Danh muc</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/genre') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Genre</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('genre.create') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Thêm Genre</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('movie.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">video</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('movie.create') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Tạo video</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" style="border: none">Logout</button>
                        </form>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Laravel</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>

        </nav>
        @yield('content')
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jsvalidation.js')}}"></script>
   {!! JsValidator::formRequest('App\Http\Requests\TestRequest') !!}
    @stack('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>
