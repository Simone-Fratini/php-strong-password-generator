<?php

$lengthFilter = 0;
$repetitionFilter = false;
$lettersFilter = false;
$numbersFilter = false;
$simbolsFilter = false;




if(isset($_GET["length"])){
    $lengthFilter = $_GET["length"];
}
if(isset($_GET["repetition"]) && $_GET["repetition"] == "on"){
    $repetitionFilter = true;
}
if(isset($_GET["letters"]) && $_GET["letters"] == "on"){
    $lettersFilter = true;
}
if(isset($_GET["numbers"]) && $_GET["numbers"] == "on"){
    $numbersFilter = true;
}
if(isset($_GET["simbols"]) && $_GET["simbols"] == "on"){
    $simbolsFilter = true;
}


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


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-r from-emerald-400 to-cyan-400">
    <main >
        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 max-w-xl mt-50 text-white mx-auto pt-5 rounded-lg shadow-lg flex justify-center pb-5">
            <div class="flex-col">
                <h1 class="text-4xl">Password Generator</h1>
                <form action="./index.php" class="mt-5">
                    <div>
                        <label for="length">1. Lunghezza password</label>
                        <input type="number" name="length" id="length" class="bg-white rounded text-black w-20 ml-5" required>
                    </div>
                    
                    <div class="mt-2">
                        <label for="repetition" class="mr-5">2. Consenti la ripetizione?</label>
                        <input type="checkbox" name="repetition" id="repetition">
                    </div>

                    <div class="mt-2">
                        <div>3. Quali caratteri vuoi:</div>
                        <div class="mt-2 ml-4">
                            <input type="checkbox" name="letters" id="letters">
                            <label for="letters">Lettere</label>
                        </div>
                        <div class="ml-4">
                            <input type="checkbox" name="numbers" id="numbers">
                            <label for="numbers">Numeri</label>
                        </div>
                        <div class="ml-4">
                            <input type="checkbox" name="simbols" id="simbols">
                            <label for="simbols">Simboli</label>
                        </div>

                    </div>
                    <button type="submit" class="bg-green-700 rounded px-2 py-1 cursor-pointer mt-5 hover:bg-green-500 delay-100 transition-all">Genera</button>
                    <button type="reset" class="border rounded px-2 py-1 cursor-pointer hover:bg-red-600 delay-100 transition-all">Reset</button>
                    
                </form>
                <div class="bg-gray-700 mt-5 p-2 text-white rounded">

                    <div>La tua password è:</div>
                    <div class="mt-2 font-mono text-lg">
                        <?php echo generatePassword($repetitionFilter, $lengthFilter, $lettersFilter, $numbersFilter, $simbolsFilter); ?>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>
</html>