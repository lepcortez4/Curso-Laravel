<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>@yield('titulo', 'Biblioteca') | Flia. Parra</title>
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     @yield("styles")
     
     <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">


</head>
<body class="hold-transition sidebar-mini layout-boxed">
     <!-- Site wrapper -->
     <div class="wrapper">
          <!-- Content Wrapper. Contains page content -->
          {{-- Header --}}
          @include('theme/'.$theme.'/header')
          {{-- Side Bar --}}
          @include('theme/'.$theme.'/aside')
          {{-- Content --}}
          <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               {{-- <section class="content">
                    <div class="callout callout-info">
                         <h4>Tip!</h4>
                         <p>
                              add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on large screens because it prevents the site from stretching very wide.
                         </p>
                    </div>
               </section> --}}
               <!-- Main content -->
               <section class="content">

                    @yield('content')

               </section>
          </div>
          @include('theme/'.$theme.'/footer')
     </div>

     <!-- jQuery -->
     <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}" type="text/javascript"></script>
     <!-- Bootstrap 4 -->
     <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}" type="text/javascript"></script>
     <!-- AdminLTE App -->
     <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}" type="text/javascript"></script>
     <!-- AdminLTE for demo purposes -->
     @yield("scriptsPlugins")
     <script src="{{asset("assets/$theme/dist/js/demo.js")}}" type="text/javascript"></script>
     <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
     <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script src="{{asset("assets/js/funciones.js")}}"></script>
     <script src="{{asset("assets/js/scripts.js")}}"></script>
     @yield('scripts')

</body>
</html>
