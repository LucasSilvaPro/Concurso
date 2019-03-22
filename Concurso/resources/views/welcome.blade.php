
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' type='text/css' href='css/uikit.css'>
<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
<link rel='stylesheet href='css/princessSophia.blade.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'>

<body>   
<div>
    <div class='uk-position-relative'>
        <div class='uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light' data-src='imgs/SOBRE.jpg' uk-img><br>
            <h1>Concurso de Talentos CVDD</h1>
        </div>
            <div class='uk-position-top'>
                <div uk-sticky='bottom: #transparent-sticky-navbar'>
                <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
                      <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href='#'><img id='logu' src='imgs/logo.png'/></a>
                            </li>
                            <li>
                                <a href="/Concursos">Concursos</a>
                            </li>
                            <li>
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                 <li>
                                    <a href="{{ route('register') }}">Register</a>
                                 </li>
                                @endif
                            @endauth
                            </li>
                        </ul>
                    </div>
                </nav>
              </div>
           </div>
        </div>
    <br><br>

    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: microphone; ratio: 4'></span>
                <h3>Concursos de Talentos</h3>
                <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
        <div>
            <div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon:user; ratio: 4'></span>
                <h3>Inscrições Gratuitas</h3>
                <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
        <div>
            <div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: users; ratio: 4'></span>
                <h3>Jurados da Casa</h3>
                <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
    </div><br><br>

    <div id="segunda"><br><br><br><br>
        <center>
            <h1>Como é o Concurso?</h1><br>
            <video playsinline controls width='50%' height='50%' >
                <source src='imgs/video.mp4' type='video/mp4'>
            </video>
        </center>
        <br><br><br>
    </div>

</div>
</body>
    <script src='js/jquery.js'></script>
    <script type="text/javascript" src="js/uikit.js"></script>
    <script type="text/javascript" src="js/uikit-icons.js"></script>
</html>
