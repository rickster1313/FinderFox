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
            $retorno = array('status' => '', 'lat' => '', 'lon' => '');
            if($cep != ""){
                do{
                    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$cep;
                    $json = json_decode(file_get_contents($url));
                }while($json->status == "OVER_QUERY_LIMIT");
                if($json->status == "ZERO_RESULTS"){
                    $return['status'] = "erro";
                }else if($json->status == "INVALID_REQUEST"){
                    $return['status'] = "erro";
                }else{
                    $return['status'] = "ok";
                    $return['lat'] = $json->results[0]->geometry->location->lat;
                    $return['lon'] = $json->results[0]->geometry->location->lng;
                }
            }else{
                $return['status'] = "erro";
            }
            
            return $return;
        }
    }

?>