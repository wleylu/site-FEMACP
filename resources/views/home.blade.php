<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FEMACP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>


            <div class="d-flex p-2 bd-highlight min-h-screen bg-gray-100 alert-danger">
                <div class="p-2 bd-highlight">
                    <img src="{{ Storage::url('/Appimages/er.png') }}" style="width: 70px; height: 50px;" />
                </div>
                <div class="p-2 bd-highlight">Flex item 1</div>
            </div>

            <header>
                <div class="py-12 max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                    <div class="p-2 bd-highlight bg-light">
                    <nav class="nav navbar-expand-sm navbar-light">
                        <div class="container-fluid">

                          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Palaka de Koumbala
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item " href="{{ route('koumbala') }}">Sous-Préfecture de Koumbala</a></li>
                                        <li><a class="dropdown-item " href="{{ route('togoniere') }}">Sous-Préfecture de Togoniéré</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('sikolo') }}">Palaka de Sikolo</a>
                                      </li>

                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('histpalaka') }}">Histoire du peuple Palaka</a>
                                      </li>

                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('culture') }}">Culture</a>
                                      </li>

                                      <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                                      </li>


                                    </ul>
                                </li>
                                </ul>
                           </div>
                        </div>
                      </nav>
                    </div>
                 </div>
            </header>

        <main>
            <div class="py-3">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div lass="align-middle inline-block min-w-full shadow
                                overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">


                               @yield('content')

                            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


     </div>
    {{--  <div class="footer text-center">
        FEMACP
    </div>  --}}

</body>
</html>
