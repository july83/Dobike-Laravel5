<!DOCTYPE html>
<html lang="es">
  @include('layouts.head.head')
  <body>
    <header>
        <h1 class="usabilidadH1">Bienvenido a Dobike</h1>
        <section>
            <!-- Opciones cabecera -->
            <nav class="navbar-default menu" role="navigation">
                <div class="navbar-collapse cabecera hidden-xs" >
                    <ul id="authNav" class="nav pull-right navbar-nav ancho">
                        <li><a href="/tiendas"><img src="{{ asset('img/iconos/tiendas.png') }}" alt="tiendas"> TIENDAS</a></li>
                        <!--Si usuario actual no esta conectado(invitado)-->
                        @if (Auth::guest())
                        <li><a href="/auth/login">LOGIN</a></li>
                        <li><a href="/usuario/create">REGÍSTRATE</a></li>
                        @else
                            <li class="dropdown">
                                <a href="/auth/logout">SALIR</a>
                                <li><a href="/usuario/{{Auth::user()->id}}">{{strtoupper(Auth::user()->name)}}</a></li>
                            </li>
                        @endif
                    </ul>

                </div>
                <div class="container-fluid">
                    <!-- Imagen logo empresa -->
                    <div class="navbar-header">
                        <a href="/" class="navbar-brand" ><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                    </div>
                    <!-- Menus -->
                    <div class="collapse navbar-collapse" id="acolapsar">	
                        <!-- Menu superior -->
                        <ul class="nav navbar-nav visible-xs">
                            <li><a href="#"><img src="{{ asset('img/iconos/tiendas.png') }}" alt="bicicletas" class="hidden-xs"> TIENDA</a></li>
                            <li><a href="#">CONTACTO</a></li>
                            <li><a href="Formulario.html">REGÍSTRATE</a></li>
                            <li><a href="#">MI CUENTA</a></li>
                        </ul>
                        <!-- Menu inferior -->
                        <div>
                            <ul class="nav navbar-nav">
                            @foreach($categorias as $categoria)
                                <li>
                                    <a class="text-capitalize" href="/categoria/{{$categoria->id}}">{{$categoria->nombre}}</a>
                                </li>
                            @endforeach
                            @if (Auth::check())
                            <li><a href="/ofertas" class="menuOferta">OFERTAS</a></li>
                            @endif
                            </ul>
                            <!-- Buscador -->
                            {!! Form::open(['url' => '/search', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                                <div class="form-group">
                                    <button id="boton" type="submit" alt="buscar"></button>
                                    <input id="cajaBuscador" title="Buscador" class="search-query" type="text" value="" name="producto" required/>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div> 
                </div>
            </nav>
        </section>
    </header>
  <section>
  @yield('content')
  </section>
<footer id="footer" class="margen PiePagina container-fluid">
        <div class="borde-separativo container-fluid">
            <div class=" col-xs-12 col-sm-7 col-md-7 col-lg-8">
                <p>© 2014. Dobike S.A. Todos los derechos reservados.</p>
            </div>
            <!-- Redes sociales -->
            <div class=" col-xs-1 col-sm-2 col-md-2 col-lg-2 hidden-xs">
                <p class="text-right">SÍGUENOS EN</p>
            </div>
            <div class=" col-xs-2 col-sm-3 col-md-3 col-lg-2 hidden-xs">
                <section>
                    <ul class="navbar-nav redes-sociales" >
                        <li>
                            <a href="https://www.facebook.com/Dobike-482707235251554/" rel="external" >		
                                <img class="pulse" src="{{ asset('img/Redes_sociales/imagenFacebook.png') }}" alt="facebook"/></a>
                        </li>
                        <li>
                            <a href="https://Twitter.com/" rel="external">
                            <img class="pulse" src="{{ asset('img/Redes_sociales/imagenTwitter.png') }}" alt="twitter"/></a>
                        </li>
                         <li>
                            <a href="https://www.instagram.com/" rel="external">
                            <img class="pulse" src="{{ asset('img/Redes_sociales/imagenInstagram.png') }}" alt="instagram"/></a>
                        </li>	     
                    </ul>
                </section>
            </div>
        </div>  
        <div>
            <section class="container menu-foot PiePagina">
                <div>
                        <ul class="list-inline col-md-12">
                            <li class="col-md-3 enlacesFooter"><a href="/quien-somos">QUIÉNES SOMOS</a></li>
                            <li class="col-md-2 enlacesFooter"><a href="/tiendas">DÓNDE ESTAMOS</a></li>
                            <li class="col-md-2 enlacesFooter"><a href="/aviso_legal">AVISO LEGAL</a></li>
                            <li class="col-md-2 enlacesFooter"><a href="/condiciones_generales">CONDICIONES DE VENTA</a></li>
                            <li class="col-md-3 enlacesFooter"><a href="/politica_cookies">POLÍTICA DE COOKIES</a></li>
                        </ul>
                </div>
			</section>
        </div>
    </footer>
  </body>
</html>