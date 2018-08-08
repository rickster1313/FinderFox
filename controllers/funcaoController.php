<?php 
    class funcaoController extends Controller{
        
        public function distanciaPontos($lat1, $lon1, $lat2, $lon2) {

            $lat1 = deg2rad($lat1);
            $lat2 = deg2rad($lat2);
            $lon1 = deg2rad($lon1);
            $lon2 = deg2rad($lon2);

            $dist = (6371 * acos( cos( $lat1 ) * cos( $lat2 ) * cos( $lon2 - $lon1 ) + sin( $lat1 ) * sin($lat2) ) );
            $dist = number_format($dist, 2, '.', '');
            return $dist;
        }

        public function coordenadasCep($cep){
            $url =file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$cep);
            $json = json_decode($url);
            if($json->status == "OK"){
                echo "certo";
            }else if($json->status == "ZERO_RESULTS"){
                echo "sem resultados";
            }else if ($json->status == "OVER_QUERY_LIMIT"){
                echo "tente novamente";
            }
        }
    }

?>