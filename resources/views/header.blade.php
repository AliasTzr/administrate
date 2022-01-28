<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #156a9b; color:white">
            <div class="container-fluid">
              <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="bi bi-menu-button-wide-fill fs-3 text-light"></i></a>
              <div class="col pt-3 fs-5 fw-bold">
                  <p>CONNECT DASHBOARD</p>
              </div>
            </div>
          </nav>
          <div class="offcanvas offcanvas-start text-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header p-4 mb-2" style="background-color: #156a9b;">
              <h5 class="offcanvas-title m-auto" id="offcanvasExampleLabel">DASHBOARD MENU</h5>
              <button class="border border-0 bg-danger rounded-3" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg fs-"></i></button>
            </div>
            <div class="offcanvas-body pe-1 ps-0">
              <div class="items mt-3">
                <div class="border border-1 mb-1 @if(Route::getCurrentRoute()->uri()=="home" OR Route::getCurrentRoute()->uri()=="/")active @endif" data-bs-dismiss="offcanvas" aria-label="Close">
                  <a href="{{route('home')}}" class="btn p-3 rounded-0 dimension item">Acceuil</a>
                </div>
                <div class="border border-1 mb-1 @if(Route::getCurrentRoute()->uri()=='actu')active @endif"  data-bs-dismiss="offcanvas" aria-label="Close">
                    <a href="{{route('actualite')}}" class="btn p-3 rounded-0 dimension item">Actualités</a>
                </div>
                <div class="border border-1 mb-1 @if(Route::getCurrentRoute()->uri()=='agenda')active @endif" data-bs-dismiss="offcanvas" aria-label="Close">
                  <a href="{{route('agenda')}}" class="btn p-3 rounded-0 dimension item">Agenda</a>
                </div>
                <div class="border border-1 mb-1 @if(Route::getCurrentRoute()->uri()=='annuaire')active @endif" data-bs-dismiss="offcanvas" aria-label="Close">
                  <a href="{{route('annuaire')}}" class="btn p-3 rounded-0 dimension item">Annuaire</a>
                </div>
                <div class="border border-1 mb-1 @if(Route::getCurrentRoute()->uri()=='forum')active @endif" data-bs-dismiss="offcanvas" aria-label="Close">
                  <a href="{{route('forum')}}" class="btn p-3 rounded-0 dimension item">Forum</a>
                </div>
              </div>
              <div class="pt-5 mt-5">
                <div class="pt-4 text-center">
                  <a href="" class="btn fond text-light fw-bold">DECONNECTION</a>
                </div>
              </div>
            </div>
          </div>
    </header>
    <main>
