<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset('css/app.css')">

    {{--  <link rel="stylesheet" href="css/bootstrap.min.css">  --}}

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title></title>
  </head>

  <body>

    <div>


        <div class="d-flex p-2 bd-highlight min-h-screen bg-gray-100 alert-danger">
            <div class="p-2 bd-highlight">
                <img src="{{ Storage::url('/Appimages/er.png') }}" style="width: 70px; height: 50px;" />
            </div>
            <div class="p-2 bd-highlight">Flex item 1</div>
        </div>
    {{--
        <div class="d-flex flex-column bd-highlight mb-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bd-highlight alert-dark">Flex item 1</div>
        </div>  --}}

        <header>
            <div class="py-12 max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                      </div>
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                      </ul>
                    </div>
                  </nav>

             </div>
        </header>

            <div class="min-h-screen bg-gray-100">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-info border-b border-gray-200">

                            You''re logged in!

                            <br>

                            You''re logged in!


                            <br>

                            You''re logged in!
                        </div>
                    </div>
                </div>
            </div>


</div>


    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
