<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Magic Series - @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <!--external css-->
        <link href="{{ url('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/zabuto_calendar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('js/gritter/css/jquery.gritter.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('lineicons/style.css') }}">    

        <!-- Custom styles for this template -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/style-responsive.css') }}" rel="stylesheet">

        <script src="{{ url('js/chart-master/Chart.js') }}"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="{{ url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
          <script src="{{ url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body>
        
        @section('sidebar')

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Esconder"></div>
                </div>
                <!--logo start-->
                <a href="{{url ('index')}}" class="logo"><b>Magic Series</b></a>
                
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="">Sair</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href=""><img src="{{ url('img/ui-sam2.jpg') }}" class="img-circle" width="60"></a></p>
                        <h5 class="centered">Átila Soares</h5>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-desktop"></i>
                                <span>Listar</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="{{ url('/setor')}}">Setor</a></li>
                            </ul>
                            <ul class="sub">
                                <li><a  href="{{ url('/cargo')}}">Cargo</a></li>
                            </ul>
                            <ul class="sub">
                                <li><a  href="{{ url('/funcionario')}}">Funcionário</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-cogs"></i>
                                <span>Cadastrar</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="{{url('setor/cadastrar')}}">Setor</a></li>
                            </ul>
                            <ul class="sub">
                                <li><a  href="{{url('cargo/cadastrar')}}">Cargo</a></li>
                            </ul>
                            <ul class="sub">
                                <li><a  href="{{ url('/funcionario/cadastrar')}}">Funcionário</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">

                    <div class="row">
                        <div class="col-lg-12 container main-chart">

                            @yield('content')
                            
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ url('js/jquery.js') }}"></script>
        <script src="{{ url('js/jquery-1.8.3.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script class="include" type="text/javascript" src="{{ url('js/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ url('js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ url('js/jquery.sparkline.js') }}"></script>


        <!--common script for all pages-->
        <script src="{{ url('js/common-scripts.js') }}"></script>

        <script type="text/javascript" src="{{ url('js/gritter/js/jquery.gritter.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/gritter-conf.js') }}"></script>

        <!--script for this page-->
        <script src="{{ url('js/sparkline-chart.js') }}"></script>    
        <script src="{{ url('js/zabuto_calendar.js') }}"></script>	

        <script type="application/javascript">
            $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
            $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
            action: function () {
            return myDateFunction(this.id, false);
            },
            action_nav: function () {
            return myNavFunction(this.id);
            },
            ajax: {
            url: "show_data.php?action=1",
            modal: true
            },
            legend: [
            {type: "text", label: "Special event", badge: "00"},
            {type: "block", label: "Regular event", }
            ]
            });
            });


            function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>

        @show   
        
    </body>
</html>
