<?php
function generatePassword($repetition, $length, $letters, $numbers, $simbols){
    
    if (!$letters && !$numbers && !$simbols) {
        return "Errore: seleziona almeno un tipo di carattere";
    }
    
    $generatedPassword = "";
    $generatedLength = 0;

    while($generatedLength < $length){
        $randomNumber = rand(1,3);

        if($randomNumber == 1 && $letters == true){
            $tempVar = chr(rand(0, 9) > 5 ? rand(65, 90) : rand(97,122));
            if($repetition == true){
                $generatedPassword .= $tempVar;
                $generatedLength++;
            }else{
                if(strpos($generatedPassword, $tempVar) === false){
                    $generatedPassword .= $tempVar;
                    $generatedLength++;
                }
            }
        }elseif ($randomNumber == 2 && $numbers == true){
            $tempVar = rand(0,9);
            if($repetition == true){
                $generatedPassword .= $tempVar;
                $generatedLength++;
            }else{
                if(strpos($generatedPassword, (string)$tempVar) === false){
                    $generatedPassword .= $tempVar;
                    $generatedLength++;
                }
            }
        }elseif ($randomNumber == 3 && $simbols == true){
            $tempVar = chr(rand(33, 47));
            if($repetition == true){
                $generatedPassword .= $tempVar;
                $generatedLength++;
            }else{
                if(strpos($generatedPassword, $tempVar) === false){
                    $generatedPassword .= $tempVar;
                    $generatedLength++;
                }
            }
        }
    }

    return $generatedPassword;
}
?>