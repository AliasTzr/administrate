<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <title>Connexion</title>
    </head>
    <body class="pt-5 bg-light">
        <div class="container mt-5 p-5">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible col-md-4 m-auto fade show" role="alert">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-5 m-auto text-center mt-5 rounded-circle fond p-2 ">
                    <div class="row justify-content-center">
                        <div class="col-md-10 m-auto ms-3 me-3 text-center bg-light p-5">
                            <a class="btn fond text-uppercase fw-bold text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{route('connexion.submit')}}" class="modal-body text-center">
                        @csrf
                        <div class="mb-3">
                            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                        </div>
                        <button type="submit" class="btn fond text-light fw-bold text-uppercase">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>