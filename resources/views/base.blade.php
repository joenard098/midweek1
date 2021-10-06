<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>verification App</title>
</head>
<body>
<style>
    body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
    }

    @keyframes gradient {
	    0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
      
    </style>   
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-gradient  p-md-3">
        <div class="container">
        
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link box text-white  " href="/">Home</a>
                    </li>
                   
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/logout">Logout</a>
                            </li>
                        @else
                                    <li><a class=" nav-link box text-white " href="/login">Login</a></li>
                                    <li><a class=" nav-link box text-white" href="/register">Register</a></li>
                               
                            </li>
                            
                        @endif
                    </ul>
                </form>
            </div>
        </div>
    </nav>
<br>
<br>
    @if (session ('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session ('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session ('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </div>

    
    
        @yield('content')
    </div>
</body>
</html>