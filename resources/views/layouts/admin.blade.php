<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SERVI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        

        <!-- Js -->
        <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
         new WOW(
            ).init();
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-57708809-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    <body>


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    
                        <img src="https://static.miweb.padigital.es/var/m_7/79/79e/4922/84880-Icono-remedio.png" height="50px" width="50px">
                    
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#banner">PRODUCTOS</a></li>
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
					<li class="dropdown user user-menu">
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 		 <small class="bg-red"></small>
                  		<span class="hidden-xs">ADMINISTRADOR</span>
							</a>
					<ul class="dropdown-menu">
					<!-- User image -->
                  <li class="user-header">
                    
                    <p>
                     CERRAR SESION
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
				</div>
					<ul class="social-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
			</div>
			
		</div>
					
	</header>
	<section id="banner" class="wow fadeInUp">
					
        <div class="container">
            <div class="row">
		  		@yield('contenido')
			</div>
			<li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>IMPRIMIR</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
        </div>
    </section>
					
    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo"href="#">
                            <img class="img-responsive" src="images/footer-logo.png" alt="">
                        </a>
                    <p>FIS©UNCP</p>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
