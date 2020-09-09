<nav class="navbar sticky-top  navbar-dark navbar-expand-md  bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img alt="" src="{{asset('img/logo.png')}}" style="width: 30px;filter:brightness(1000%)">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
               
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                        <a class="nav-link" href="{{ url('/posts') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ayuda') }}">Soporte</a>
                    </li>
                    <li>
                        <div class="navbar-nav navbar-right">
                            {{ Form::open(array('url' => '/busqueda', 'method' => 'get')) }}
                                
                            
                            <div class="input-group">
                                    {{Form::text('query','',['class'=>'form-control','placeholder'=>'Proyecto a buscar'])}}
                                <div class="input-group-append">
                                    
                                    {{Form::submit('Buscar',['class'=>'btn btn-outline-light'])}}
    
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                @endif
                
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                </li>

                @else
                <div class="nav-item mr-2 mt-1">
                    <a class="nav-link" href="{{ url('/posts') }}">Blogs</a>
                </div>
                <div class="nav-item mr-2 mt-1">
                        <div class="navbar-nav navbar-right">
                                {{ Form::open(array('url' => '/busqueda', 'method' => 'get')) }}
                                    
                                
                                <div class="input-group">
                                        {{Form::text('query','',['class'=>'form-control','placeholder'=>'Blog a buscar'])}}
                                    <div class="input-group-append">
                                        
                                        {{Form::submit('Buscar',['class'=>'btn btn-outline-light'])}}
        
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                </div>
                <!--
                <li class="nav-item mx-1">
                        <div class="btn-group" style="height: 100%">
                            <button type="button" class="btn btn-dark  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="colorSvg" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                    <path fill="white" fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5v2z"></path>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Nuevo Repositorio</a>
                                <a class="dropdown-item" href="#">Nuevo Articulo</a>
                            </div>
                        </div>
                    </li>
                -->
                <li class="nav-item dropdown">
                        
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img class="rounded"  style="max-height: 30px"
                        src="{{url('storage/PerfilesImg/'.Auth::user()->perfil->imagen)}}" alt="">
                         <span class="caret"></span>
                    </a>
                    
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <h3 class="dropdown-header"> <b>{{ Auth::user()->name }}</b></h3>
                            <a class="dropdown-item" href="{{ url('/home') }}">Tú inicio</a>
                            <a class="dropdown-item" href="{{ url('/posts/create') }}">nuevo blog</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
