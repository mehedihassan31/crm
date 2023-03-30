<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <title>Easytrax App Log in test</title>
</head>
<body>


    <!-- Image and text -->
    <div class="bg-dark shadow ">
        <div class="container">
            <nav class="navbar navbar-light">
                <a class="navbar-brand flex-row text-white text-center" href="#">
                  <img src="https://www.easytrax.com.bd/wp-content/uploads/2021/06/main-logo.png" width="135px" height="35px" class="d-inline-block align-top" alt="">
                </a>
            </nav>
        </div>

    </div>

    <div class="container pt-5">
        <div class="card m-5">
            <div class="card-body m-auto">
                <h1> Welcome to easytrax</h1>

            </div>
        </div>

        @if( Session::has( 'success' ))

            <div class="alert alert-danger m-5"  role="alert">
                <h5>
                    ****{{ Session::get( 'success' ) }}
                </h5>
                <p>First log out from other device.Then try again</p>
            </div>
        @endif
        @if( Session::has( 'errors' ))

            <div class="alert alert-danger m-5" role="alert">
                <h5>
                    ****{{ Session::get('errors') }}***
                </h5>
                <p>Please visit- <a href="www.easytrax.com">www.easytrax.com<a></p>
            </div>
        @endif

        @if( Session::has( 'flash_message' ))

            <div class="alert alert-success m-5" role="alert">
                <h5>
                    {{-- {session('flash_message')[1]} --}}
                    {{ Session('flash_message')[1] }}
                </h5>
            </div>
        @endif
    </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
