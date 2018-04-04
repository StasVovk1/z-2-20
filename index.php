<?php 
    $mass = [-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $mass_number = [];
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){        
        for ($j = 0; $j < counts($mass); $j++){
            if ($mass[$i] == $mass[$j] && $i != $j){                
                $bool = true;
                break;
            }
        }
        if (!$bool){
            $mass_number[] = $mass[$i];
        }
        $bool = false;
    }

    echo '<br> Ответ '.json_encode($mass_number);
    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>