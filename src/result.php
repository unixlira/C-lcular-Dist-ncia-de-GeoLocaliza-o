<?php


echo '<center><h1 style="font-weigth:bold" class="text-primary mt-5">Resultados</h1></center><br><br><br><br>';


function getDistance($latitude1, $longitude1, $latitude2, $longitude2)
{

    $earthRadius = 6371;

    $latFrom = deg2rad($latitude1);
    $lonFrom = deg2rad($longitude1);
    $latTo   = deg2rad($latitude2);
    $lonTo   = deg2rad($longitude2);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angulo = 2 * asin(sqrt(pow(sin( $latDelta / 2 ), 2) + cos($latFrom) * cos($latTo) * pow(sin( $lonDelta / 2 ), 2)));

    return $angulo * $earthRadius;

}

    if ($_POST['lat1'] != 0 && $_POST['lon2'] != 0 && $_POST['lat2'] != 0  && $_POST['lon2'] != 0) {


        $latitude1 = $_POST['lat1'];
        $longitude1 = $_POST['lon2'];
        $latitude2 = $_POST['lat2'];
        $longitude2 = $_POST['lon2'];

        $distance = getDistance($latitude1, $longitude1, $latitude2, $longitude2);
        echo
            '<!DOCTYPE html>
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
            </head>
            <body>
        <center>
            <div class="container">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-5 text-primary">Distância</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="' . $distance . '">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-5 text-primary">Distância em KM</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="' . round($distance, 2) . ' Km">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></center></body></html><br><br><br>';

    }else{
        header('Location:http://localhost/distancia?return=false');
    }
