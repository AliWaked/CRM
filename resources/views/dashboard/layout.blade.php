<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.min.css
    " rel="stylesheet">
    <style>
        a.style {
            text-transform: capitalize;
            font-size: 22px;
            border-bottom: 2px solid #2878EB;
            padding: 12px 20px;
            margin-left: -50px;
            /* padding-top: 12px; */
            display: inline-block;
            width: calc(100% + 60px);
            transition: 0.3s;
            color: #2878EB !important;
            text-wrap: nowrap;
            /* border-radius: 8px; */
            /* word-wrap: none; */
        }

        a.style span {
            margin-right: 15px;
            width: 55px;
            display: inline-block;
        }

        a.style:hover {
            opacity: .6;
        }

        a.style:hover,
        a.style.active {
            background-color: #2878EB;
            color: #fff !important;
        }
    </style>
    <style>
        form.form {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 30px;
        }

        form.form .group {
            padding-bottom: 30px;
        }

        form.form .group label {
            font-size: 22px;
            color: #666;
            width: 170px;
            font-weight: normal;
        }

        form.form input,
        form.form select {
            border: noen;
            border: none;
            background: #80808030;
            padding: 8px;
            border-radius: 5px;
            outline: none;
            color: #2878EB;
            transition: 0.2s;
            width: 250px;
            border: 2px solid transparent;
        }

        form.form input:focus,
        form.form select:focus {
            border-color: inherit;
        }

        form.form div.button {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        form.form button {
            border: 2px solid #2878EB;
            padding: 2px 10px;
            border-radius: 5px;
            width: fit-content;
            margin-left: auto;
            width: 150px;
            font-size: 25px;
            margin-right: auto;
            color: #2878EB;
            transition: 0.3s;
        }

        form.form button:hover {
            color: #fff;
            background: #2878EB;
        }

        small {
            color: red;
            position: relative;
            left: 180px;
            /* margin-left: 170px; */
        }
    </style>
    <style>
        div.icon {
            width: 150px;
            height: 150px;
            margin-left: auto;
            margin-right: auto;
            background: #80808012;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-bottom: 45px;
            cursor: pointer;
        }

        div.icon.hidden {
            display: none;
        }

        div.icon i {
            color: #2878eb45;
            font-size: 20px;
            margin: 0;
            font-size: 70px;
        }

        form.form .avatar-image.hidden {
            display: none;
        }

        form.form img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* margin-bottom: 45px; */
            cursor: pointer;
        }

        section.change-avatar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        section.change-avatar.hidden {
            width: 0;
            overflow: hidden;
        }

        section.change-avatar .overlay {
            background: #33333347;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        section.change-avatar img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            border-radius: 5px
        }

        form.form img+label i {
            position: relative;
            top: -55px;
            left: 276px;
            font-size: 22px;
            color: #fff;
            cursor: pointer;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #2729b031;
            border-radius: 50%;
            transition: 0.2s;
        }

        form.form img+label i:hover {
            color: rgba(0, 0, 255, 0.582);
        }

        form.form input+i {
            color: #008000a3;
            margin-left: 15px;
            cursor: pointer;
            border-radius: 50%;
            transition: 0.2s;
            visibility: hidden;
        }

        form.form input:focus+i {
            visibility: visible;
        }

        form.form input+i:hover {
            color: #008000de;
        }

        form.form input+i.clos {
            color: #800000a3;
            margin-left: 15px;
            cursor: pointer;
            border-radius: 50%;
            transition: 0.2s;
        }

        form.form input+i.clos:hover {
            color: #800000da;
        }

        section.change-avatar i {
            position: relative;
            top: 75%;
            font-size: 20px;
            color: red;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            left: 62%;
            z-index: 5;
            /* display: none; */
            transition: 0.4s;
            cursor: pointer;
        }

        section.change-avatar i:hover {
            background: #ff000030;
        }
        i#remove-avatar {
            position: absolute;
            top: 96px;
                    left: 150px;
                    color: #fff;
                    cursor: pointer;
                    width: 30px;
                    height: 30px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: #2729b031;
                    border-radius: 50%;
                    transition: 0.2s;
                }
                i#remove-avatar:hover {
                    color: rgba(255, 0, 0, 0.596);
                    background-color: rgba(255, 0, 0, 0.144);
                }

        /* section.change-avatar img:hover + i {
            display: block;
        } */
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake" src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60"> --}}
            {{-- <i class="fas fa-book-reader ml-3" style="color: #2878EB ; font-size:80px;"></i> --}}
            <span style="color: #2878EB;font-size:100px;">Contacts</span>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <form action="{{ route('logout') }}" method='post' style="display: inline-block">
                    @csrf
                    <button type="submit"
                        style="background:transparent;border:none;color:#666;margin-top:6px;margin-right:5px;font-size:16px; text-transform:uppercase;">logout</button>
                </form>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                {{-- <i class="fas fa-book-reader ml-3" style="color: #2878EB ; font-size:30px;"></i> --}}
                <span class="brand-text font-weight-bold ml-2"
                    style="font-size:25px;color:#2878EB; display:block; text-align:center; margin-right:30px;">Contact</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if ($avatar = Auth::user()?->avatar)
                            <img src="{{ asset('storage/' . $avatar) }}"
                                style="margin-right:7px;margin-top:3px;height: 35px; width:35px; border-radius:50%;"
                                alt="User Image">
                        @else
                            <i class="fas fa-user ml-1 mt-2 mr-2" style="color: #2878EB;font-size:20px;"></i>
                        @endif
                    </div>
                    <div class="info">
                        @auth
                            <a href="#" class="d-block text-capitalize">{{ Auth::user()->name }}</a>
                            {{-- <form action="{{ route('logout') }}" method='post'>
                                @csrf
                                <button type="submit"
                                    style=" color: #2878EB;border:2px solid #2878EB; border-radius:10px; background-color:transparent;padding:5px 30px;margin-top:15px;margin-left:-10px; ">logout</button>
                            </form> --}}
                        @endauth
                    </div>
                </div>
                <div>
                    {{-- <ul> --}}
                    {{-- {{dd($links)}} --}}
                    {{-- @foreach ($links as $link)
                                <a href="{{ route($link['route']) }}" class="style {{ Route::is($link['active']) ? 'active' : '' }}"><span><i
                                            class="{{ $link['icon'] }}"></i></span>{{ $link['title'] }}</a>
                                        </ul>
                            @endforeach --}}
                    <ul id="ul-links">
                        {{-- {{dd($links)}} --}}

                        <a href="{{ route('contact.index') }}" class="style active"><span><i
                                    class="fa-solid fa-users"></i></span>Contacts</a>
                        <a href="{{ route('contact.create', Auth::id()) }}" class="style"><span><i
                                    class="fa-solid fa-user-plus"></i></span>Create Contact</a>
                        <a href="{{ route('contact.trash', Auth::id()) }}" class="style"><span><i
                                    class="fa-solid fa-user-xmark"></i></span>Trashed</a>
                        {{-- <a href="" class="style "><span><i class=""></i></span></a> --}}
                        {{-- <a href="" class="style "><span><i class=""></i></span>Add Contact</a> --}}
                        {{-- <a href="" class="style "><span><i class=""></i></span>Add Contact</a> --}}

                    </ul>


                </div>

                <!-- SidebarSearch Form -->


            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1 class="m-0">{{ $title }}</h1> --}}
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            {{-- <x-dashboard.partials.breadcrumb :items="$items ?? []" /> --}}
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ (new \Carbon\Carbon())->format('Y') }} <a href="/">Contact</a>.</strong>
            All rights reserved.
            {{-- <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div> --}}
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <script>
        // function changeImage() {
        document.getElementById('avatar').onchange = function() {
            console.log('hi');
            value = this.files[0];
            document.getElementById('image_avatar').classList.remove('hidden');
            document.getElementById('avatar_image_default').classList.add('hidden');
            document.getElementById('avatar_image').src = URL.createObjectURL(value);
            document.getElementById('avatar_image_big').src = URL.createObjectURL(value);
        }
        function removeImage() {
            document.getElementById('image_avatar').classList.add('hidden');
            document.getElementById('avatar_image_default').classList.remove('hidden');
        }

        function addNewEmail() {
            document.getElementById("add-new-email").innerHTML +=
                `
            <div class="group">
            <label for="" style='color:#ff777780'>Other Email</label>
            <input type="email" style='color:#ff777780;' name="email[]">
            <i class="fa-regular fa-circle-xmark clos"></i>
        </div>
        `;
            removeElement();
        }

        function addNewPhoneNumber() {
            document.getElementById("add-new-phone-number").innerHTML +=
                `
            <div class="group">
            <label for="" style='color:#ff777780'>Other Phone</label>
            <input type="number" style='color:#ff777780;' name="phone_number[]">
            <i class="fa-regular fa-circle-xmark clos"></i>
        </div>
        `;
            removeElement();
        }

        function removeElement() {
            icons = document.getElementsByClassName('fa-circle-xmark');
            for (let i = 0; i < icons.length; i++) {
                icons[i].onclick = function() {
                    this.parentNode.remove();
                }
            }
        }

        // }
    </script>
    <script>
        links = document.getElementById('ul-links').children;
        for (let i = 0; i < links.length; i++) {
            links[i].onclick = function() {
                window.sessionStorage.setItem('active', i);
            }
        }
        if (num = window.sessionStorage.getItem('active')) {
            for (let i = 0; i < links.length; i++) {
                links[i].classList.remove('active');
                if (num == i) {
                    links[i].classList.add('active');
                }
            }
        }
    </script>
    <!-- ./wrapper -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    <script src="
                                                                                https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.all.min.js
                                                                                "></script>

    <script>
        if ("{{ Session::has('success') }}") {
            Swal.fire(
                'Success',
                "{{ Session::get('success') }}",
                'success'
            )
        }
        if ("{{ Session::has('info') }}") {
            Swal.fire(
                'Change Status  Success',
                "{{ Session::get('info') }}",
                'info'
            )
        }
        if ("{{ Session::has('delete') }}") {
            Swal.fire({
                icon: 'warning',
                iconColor: 'red',
                // color: 'red',
                // confirmButtonColor: 'red',
                title: 'Deleted Success',
                text: "{{ Session::get('delete') }}",
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        }
    </script>
</body>

</html>
