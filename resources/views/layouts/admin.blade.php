<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CONFIANZA</title>
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
                                        <li><a href="/almacen/categoria">PRODUCTOS</a></li>
                                        <li><a href="/ventas/cliente">CLIENTES</a></li>
                                        <li><a href="/ventas/venta">VENTAS</a></li>
                                        <li><a href="/seguridad/usuario">USUARIOS</a></li>
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
                  		<span class="hidden-xs">SALIR</span>
							</a>
					<ul class="dropdown-menu">
                  <li class="user-header">
                    
                    <p>
                     CERRAR SESION
                    </p>
                  </li>
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
                <i class="fa fa-plus-square"></i> <span>--></span>
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
                            <img class="img-responsive" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIREBUSEg8QFRMVDw8QFRUQDw8PFRAVFREXFhUVFRUYHSggGBolGxUVITQhJSkrLi4uFx8zODMuNygtLisBCgoKDg0OGxAQGy0lHx0tKy0tLS0uLy0tLS0rLy0rLS0tLS0uNy0tLTU3LS0tLS0tKy0tLS0tNS0tLS03LS0tN//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAADAAIDAQAAAAAAAAAAAAAAAQIGBwMFCAT/xABFEAACAQIDBQYCCAIIBAcAAAABAgADEQQhQQUGEjFxBxMiMlFhgZEUQlJicqGxwSOSFjNTY4Ki0dIkNESyF3ODwuHw8f/EABoBAQEBAQEBAQAAAAAAAAAAAAADAgQBBQb/xAArEQEAAgIBAwMCBQUAAAAAAAAAAQIDESEEEjEFIkETYRVSobHxFDJCUXH/2gAMAwEAAhEDEQA/AN4yeK/KDZ5RqLQCItE7aDnGi2gMRM1oO1okXU84FCBNoM1pCrfMwKUxkwnH5ukCwbyohIY3yEB8XpLiUWku2ggMtHEq2g7WgDNGJKLqecpmtAGa0Qkqt8zLvALxA3kebpOQQHJ4r8pJN8hylgWgERaJ20EaLaAxAmS7W6wRfWBUIQgEl20HONjBFtAEW0Ha0He0SLqecARNTzjZrQZrSQL5mAKL5mXeF5x+bpAPN0nJASGa+QgDG+QlqLRLlJd9BzgDtoOcpFtEq2gz2gNmtEi6nnBF1POUzWgDNaQq3zMFW+ZlkwAmR5ukXm6TkgAkE3yERa+QlqLQGBaSzaCDNoI0W0ARbRO9usbvaJE1POAImp5yrxM1olF8zAq8IRwFaJ2tBjaJF1POAIup5ymNoMbSFW+ZgCrfMyyYiZrztD7RBg70MPwviLeI80odfV/u/E+k9iNvJmIZVt/eTDYNOPEVlQfVXzO/sqjMzWe2+2OqxK4TDKi8g9c8bn/APCvzaa1x2NqV6hq1ajO7c2c3P/wPafRsnYuIxTcNChUqEGx4VyHU8h85aMcR5QnJM+Ha43f3aVUnixlQA6UwqD8hPjTezHg3GNxA/wDUmT4Hsjx7i7th6Xs7s5/ygz627HMVpi8MT6EVR+dp7usM6u6TZ3aXtKlzxAqDUVkVr/EWMzndzteoOQmLomixy7xD3lK/3h5kHzHuJhO1ezHaNEEiklVR/YuGJ6KbGYhXoNTYo6MrDmrqVI+BzjtrY7rVerKGMSogem6urAEMhDAj1uJyqup5zzRutvXidn1A1Frpfx0nJNNxrl9U+4/PlN/br7z0MfQFWicxYPTJHFSb0b/XWRtSYWpeLO7ZrSAL5mMC+ZmJb+7809nJwKBUxLrdKd8lH26h0HtzM8iNtzOo2yHa+2KGEpmpXqrTUascz7Acyek1jt/tizK4TDZaVMQSL+4pj9z8JrTbW2a+LqmriKpdjyubKg9FXkBOHZ+zq2Ifgo0nqP6IpNuvpKxjiPKFskz4d/je0PaVU/8ANsg9KSpTA+Qnwf0rx17/AE3EX/8AMMyDZ3ZTtCqLsKNIHP8AiVLkdQoNjOz/APBnFW/5vDX/AA1bfO01ukM9t5Y7gO0XaVE5YouPSqquD+UzTYXbEpsuMw/Bp3tAlgPdqZzt0J6TGNo9le0KQJVaVawv/CqWPwVgDMPx2Bq0HKVqT03H1XUqfhfmPcRqtjd6vUWydo0cRTFShVSoh+shB+fpPtd7dZ5b2Bt3EYKqKuHqFTqvNHHoy8jN97i740dpUyR4K6gd5SJvb7yeq/prJWppamSLMoRNTzjZrQLWkqt8zMKBVvmZyREyVN4FXhCOArQY2gTaQovmYAovmZZgZwVqoCl2NlUFieWQFzAw7tO3w+g0AlIj6RVBCf3ajJqhHxsPfoZoGrULEsxJJJJYm5JPMmdtvbttsbi6lc+Utw0x9mmuSgfDP4zv+yvdUY3EmpVW9CgVZgRk7nNV/K5+HrOiI7Y25bT3Wdn2f9mxxCriMYGWkbMlIeFqg58Tnmq+3Mzc2BwVOigp0qaIiiwVFCgfATnRQBYcpLtoJG1pl0VrEBm0EaJaNFtB2tMtE7WnSbx7q4bH0ylen4reGollqUz6q37G4M7tF1PONjaexOnkxE+XmvfTdCts2rwv46TE93VAsG+6fRvafHuvt+rgMQtekeXhdL5VUv4lP7HT5z0Zt/YtPG4d6FZbq4yI5owzV1OhBnmnbOzHwtepQqDx03Kn73ow9iM5alu6NS5717Z3Dfu8G/NGhs5cZTIc1VtRS+bOeYP4c79J59x+NqV6rVarl6jtxMx9f9NLTjasxVULMVUsVXiJVOLzWGl7Cd9uHu2doYxaRv3SjvKpGXgv5b+pyHznsViry1pvw7fs+7P3x9q1YtTwwORXJ6xBzCE8l9//ANm7dk7Jo4amKWHpJTQfZFifcnmx9zcz6sPRVFFOmoVFUKAoAAAyAAn0KLSNrTMr0pFYJRaS7aCN20EaLaZbCradbt3Y2HxdM0sRRWop5XyZT6qwzU+4nYu1oImp5wa35ee9/dxKmzj3iE1MMzWDkeKmTyWpbL468pjOydpVcNWWtRcrUQ3B0PqrDUH0nqTaGFp1qT0qqhkdSjKeTAixE81747AbAYt6BuVyemx+shvb46HpL0tviXPenbzD0Buht+ntDDLXWwPldL37tx5lP6+4IneEzz92SbfOFxwpM1qWIApsDyDi/dt8yR8Zv0Z9JK9dSrS3dA83ScsQk3vMtrhFaEBWjMCZx+bpAPN0mJdrO0vo+y6oU2aqUw40yc+P/IrzMZq7t4rf8Nhl0OJd/itIgf8AeZqvlm8+1pmejezPZIw2zaI4bPUXv6nqWfPPoLD4TzmicRC+pC/M2nq3CDhpoo0poOnhEpkniEsMczLmdtBzlKtoItoM1pFcO1okXU84Iup5yma0AZrSFW+Zgq3zMsmAEzS/blswLWo4lVt3itRY+rJZl+YJH+Gbk83Sa/7ccKX2ajAZUsZSdvZWp1Kf/dUSapPuYyR7Wi5vHsU2T3eBavbxV6rG+op0/Ao/mDn4iaPJtPTW4uGNLZuFQrZhhaPEPvFbt+ZMrlnhHFHO3eKLSXbQRu2gjRbSDpCLaJ2t1jdrdYkTU84AiannKZrRM1pKrfMwAC+ZmtO3PZQfC0sSB4qVXu2P93UGXycJ/MZs4mYn2mUuPZWKvyWkHHVHDA/lNV8s3j2vO1OoVIZTZlIZT6EG4PzE9TbBxwr4WjWHKpRp1PmoM8rT0T2W1S+ycN7LUT4JWdR+SiVyxwjhnllhN8hLUQUWiLSDoVCK0ICYXjtHOMm+QgBN8hNadu+H/wCDw7j6uL4P56Ln/wBk2cotMU7Ttm/SdmV0UXdFFdbZm9MhiB7leIfGarOpZvG4ec0fhIb0s3yznq3ZbhqNN1IIamhBGt1E8ok3m/8Ask28MRs5aRP8TDnuWGvBzpN0K5X9VMpkjjaOGedM3drQRdTzgq66xs1pF0GzWkKt8zBVvmZZgBM6Pbm8FPDkKQWYi4UG2XqTO4OfSaw23i++ru98uLhX8IyE+d6l1c9Pjjt8yxktqGdbD3gp4klQpRwL8LHmPUGfdjsKldGpVEDU3UqysLhgZrTY+L7rEU30DWPRsjNqpyyj03q7Z8fv8wUt3RywjB9lez6dYVeGowB4gj1CyA+41maE2yH5aRs2glItp9KZ21ERARbQd7Qd7dYkTU8549CJqecbNaDNaSq3zMAVb5mWTAmcfm6QDzdJi/aniRT2TiL/AFlSkPcvUVf3PymWTUfbltsFaODU58X0ipbSwK0wet2PwE1WNyxedVakno7swocGycKCPNTNT4VHZx+TTzrhcM1WolNR4ndUXXNjaep9n4cUaNOioySmlMW04VAlMs8JYY8vpdtBKVbQRbRkyLoEIRwIbPKUq2jkO2g5wB30HOLuxYg53BB+MpFtE7Wgead+dgHA42pStamSalI6FGOXyNx8J3PY5iai7TVEuVelUFQacKi4J6G03LvBuxhscgXE0uK1+FgSjJfnZhmJG7u62E2eG+j0uEtkzMzOzAZ24jmB7Ss39qMY5i23eFrSVW+ZnBicQtNTUqNwqBr/APc51uC3ow9V+AFlJNgXWwbob/ract8+Olu21uZVmYh3hkebpFz6frLldvXWbyYzucM5BsSvAvVsr/AXPwmr/aZZv7juJ0ojko426nIfvMZw1Au6ovNmCjqTb95+W9Uy/U6jsj44c+Sdzpx2myt3Md3uGQ/WA4G9iuU11jKJp1GpnmrFflrMl3CxfDUekfrLxjqtgR8j/lnnpeWcWftt/lwY51bTN1W0He3WJ2t1gi6nnP1ToCLqecbNaNmtIVb5mAKt8zLJgTOPzdIB5uk5ITrtt7WpYWi9aq/DTQXJ1NzYKBqScgPUiB8u9O8VLA4dq1Vsh4UUeaq5GSKNeXwAJnm7bG06mKrvXqG71G4j6AaKPYDKdlvhvPV2hXNR7rTW4p07/wBWv7sdT/pPj3f2LVxuIWhRW7NmSeSLq7egE6K1isblzXvNp0zDsb2Aa+LOJZf4dDyk8mqsMgPwi5PVZvVFtOt3c2LSwWHShSHhUZnV2PmY9TOxdrdZG1tytSvbAdrRovrEi6nnKvMtnCK8ICc+kSraVE7WgJ2tBF1POSBbMzoMVvjQRioWo9sroFt+ZEjlz48X986eTMQyJjaRa+ZmMf01ok3NKt8qf+6fLtbe9alIrSSorNlxNw5DW1ic5zX9S6etZmLb+zM3h8e922O+qd2p/hof521PQTHRCclSmVNmBBsGzFsiLg/Iz8vmy3y3nJP8OabTM7bL3d2h3+HVj5gOBx94a/Hn8Z2DNfpqZr3dDaXdV+AnwVLKfZtD8f3mXb0YvucK9jmw7sf4siflefpuk6yL9N3z5rHLprb27YBtXF99WepoXNvwjJfytO13KwnHiOO2VNSR+Jsh+V5jxM2JuZge7wwYjxVDxnpyH5CfF9Pxzn6nut/1HHG7bY/vtgeCuKg5VFz/ABDn+xnS7NxZo1kqD6rgnpyI+Rmd75YTvMMxA8VMioOgyb/KT8proCPUKTh6nur88l41bbb9KxHFe9wCJbNaYZsze9KdFUqU6jMq8JK8BBty5kHlPpG+lE5mlW+VP/dPuU9R6eaxM2iFovVlCi+ZlXmMf02o/wBlW+VP/dO72fjExCB0N15e4PoRL4uqw5Z1S22otE+H0+bpOSE4atQWJJAUAkkmwAHMk+k6Hrix+LSlTapUcLTRS7sxsFAGZnn3f7fF9o1rLdcOhPdofrf3je59NAZ9/aVvwca5oUCRhUbmMvpDD6x+76D4zCsPQZ3VEUs7MFVVFyxPICWpTXMufJffEOXZmz6mIqpRpIWqOwVQP1PoANZ6J3G3TpbOocAs1Z7GrUt5j9keiDQfvPh7Otyl2fS7yoA2JqL42592Ofdp7ep1PSZk7Wmb33xDeOmuZJ2t1gi+vOCL6842a0mqGa0SDUxKt8zOSArwjvCBLNEq6nnKtBmtA+fH0y1J1BsWRlB9CRNT1qDIxV1KkZWOU24q3zPyjekpzIB6gT53W9B/U6mJ1MMXp3NQcQ9RJv7zbgoKfqLb8Il/R0+wv8onz/wSfz/on9Fr3dfZBr1AzKe6U3Jtkx0UTuN99ncSLWQeQcLW1XT5H9ZlQXRRYe2UVbDh0KEXUgg/Gd1PTaVwTj+Z+fu3GOIjTUgynbbd20cQlJdVXx+78r/LP4z4Np4Q0ar0jzVsvdTmp+U+cCfmu++KLY/98ShzG4c2BwxqVEpjmzqvTPM/AXM2uihFCqMgAoHoALCYNuRheKs1QjyLYfibL9L/ADmdomp5z7/o+HtxTknzb9oWxRxtLUrgg6gj5zVe08G1CoyMCLE2J+sL5ETbDG04jRDZsoPpcXnV1vRR1MRzqYavTuahB94+Ies2+aKfZX5CcYoK31Vt0E+b+CT+f9E/o/dqMG+sz/cbCPTpMzAgOwKg+gHP4zIfo6/ZX5CI55DlOvo/TPoZO+bbbrj7ZNmvlpNMdqe/ffFsFhX/AIQPDWqKf60jmin7I19Z2varv33YbA4V/H5a9RT5BrTU/aOvpNO/p8gJ9ulPmWMmT4g1W9gBmbAADU5AATeXZhuIMIoxWIW+IZfAp/6dT6ffOp05es6zsq3D4eHG4pPFk9Cmw8npVYfa9AeXPny2s5t1i998Q9x0+ZNmt1iRdTzgi6nnGzWklgzWkqt8zBVvmZZMAJkqbxebpOQQFCO8ICY2kKt8zKIjMAM4/N0j83SXAJDG+QgxvkJai0AVbSHbQQZtBKVbQMT332ZdBWUZr4W91Jy+R/WYSxm366ggqRcEWIOdxOjo7n4YNxFWI58Jbwj26T4nXemWy5e/HrnylfHudw5Nz8D3eGUkeJ/4h+PL8v1nds1oslESrfMz6+HHGOkUj4UiNQFW+ZlkwJnH5uko9HmPtOSE42N8hAGa+QmAdp2/IwaHDYdh9JZfEw/6dWHm/ERy+c7HtD3zTZ1HgQqcTUU92vPgHLvHGgvy9SPYzz9iK7VHao7Fndi7MxuWJzJJMpSm+ZRyZNcQgknM3uTc3uTc5kn9fjNk9lu4v0grjMSl6IIalTYXFYjkzDVQeQ1I9J1vZruQcfU76sp+io1jp3zD6gPoNT8JvpVCKFUAAAKAoAAAyAAHITV7/EM46b5lbNaCLqecETU842a0i6AzWkqt8zBVvmZZgBMjzdIDxdJcAkg3kk3yHKcgEAtCFoQAmR5ukoi8doBaQxvkIE3yEtRaAKLSHbQRu2gjRbQBVtE7W6wdrQRdTzgCLqecbG0bNaQq3zMAVb5mWTaBnH5un6wMI347RKeAqCitI1avCGZeLhVAeXEfU+k+vcbfyjtLip8PdVlXjNMsDxrexZDqBcX6ia37ZNhvRxv0mxNKuBZtFdVsVPpkLiYXsjaNTC10r0jZ0YMPfQg+xGXxlopE14QnJMW5eqCb5DlMf3z3rpbNw/GxBqvxClTvnUYcyfRRcXPuBqJ8x38wq7OGOLeFvAKdxxmtb+qA9ciegvymh94tt1cdiGr1jdjkqjlTUHJF9hf876zFabnlu+TUcPn2nj6mJrPWrMWqO1yTl0AGgA09BO/3C3PfaVbO64dCDVflf+7X7x/IT4d0N2au0cQKVPJBZqlS2VNL/mx0E9F7G2ZSwlBKFFOFFFgNWOrMdSTzMpe/bxCVKd3MufCYanQprSpIFRFCKqjIAT6ETXWCJrrGzWkHSGa0lVvmYKt8zLJgBMgeLpAZ9JcAkE3yHKBN8hylqLQBRFxSXbQSkW0BwjhAJxk3yEps8o1FoAotJdtBB20EaLaAItona3WDtbrBE1POAIup5yma0TNaSq3zMAVb5mWTAmcY8XSAebpOSEgm+QgdZvHsenjsO+HqDwsLhtUYZqw9wf3nmvbeyqmErvQrCzoxHsw0YexGc9UgWmBdqu6JxtEVqCXxFIcv7an9ZOo5j4jXKlLalLJTcbaH4ja1za5IGlyACbaXAGfsJ2GwNiVsbXWhRW7Mcyb8NNRzdvaGB2Fiq1UUUw9UuW4bNTZeH3YkZCb/ANyN1KezcOEFmrPZqtS3nb0Hoo5AfGUteIhKlJmeX27sbAo7Pw60KQz8zufNVfVm/YaCdwi6nnBF1PONmtOeeXTEaDNaSq3zMFW+Zlkw9BMjn0h5ukuASCb5DlAm+Q5SwLQBRaQ7aCN20EaLaAItoyZLtbrBFgVCEIDkO2gjYwVbQBFtE726xu9usSJqecARNTzjZrQZrSVW+ZgCrfMyyYEzj83SAebpOSEgm+QgBN8hLUWgBaQ7aCAO2gjVLRotona3WAmsNMzGi6nnBF11jZrQBmtJVb5mCrfMyyYATI83SIeLpOSASCbmw5RE3yHKcgFoABaSzaCDNoI1W0AVbRO9usHe3WCJqecARNTzlXiZrRKNTAq8I4QFaS726yiZKrrrAETU842a0Zkhb5mAlW+ZlkxyCL9IE+bpOSOQ2cBE3yEsC0ALRN7QJdtBKRbQRbRmBLtbrBF1POCrrKvATNaSq3zMYXO5lwETOMeLpKK3lQCcZN8hylMLylEAAtIZtBKaCraAKtone3WUTJVYAiannGzWjMkLqYCVb5mckJPOA7wjhAUBCEBwhCAjCEIDhCEAihCACOEIBEYQgEcIQCEIQFHCEAhCEBQEIQHCEICMI4QJhCED/9k=" alt="">
                        </a>
                    <p>FIS©UNCP</p>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
