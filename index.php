<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <h1 style="font-weigth:bold" class="text-primary mt-5">Cálculo de Distância</h1>

            <?php
                if(!empty($_GET['return'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Oloco, meu!</strong> Sua solicitação não pode ser enviada!
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                }else{
                    echo '';
                }
            ?>
        </div>
   <form action="src/result.php" method="POST">
        <div class="container">
            <div clas="col-12">
                <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-5 text-primary">Local do Candidato</h5>
                            <div class="form-group">
                                <label for="lat1">Latitude</label>
                                <input type="text" class="form-control" id="lat1" name="lat1" required>
                                <label for="lon1">Longitude</label>
                                <input type="text" class="form-control" id="lon1" name="lon2" required >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-5 text-primary">Local da Vaga</h5>
                            <div class="form-group">
                                <label for="lat2">Latitude</label>
                                <input type="text" class="form-control" id="lat2" name="lat2" required>
                                <label for="lon2">Longitude</label>
                                <input type="text" class="form-control" id="lon2" name="lon2" required>
                            </div>
                        </div>   
                    </div>
                </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-2 btn-block" value="CALCULAR">
        </div>    
    </form>

        <script src="" async defer></script>
    </body>
</html>