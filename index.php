<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-r from-emerald-400 to-cyan-400">
    <main >
        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 max-w-2xl mt-50 text-white mx-auto pt-5 rounded-lg shadow-lg flex justify-center">
            <div class="flex-col">
                <h1 class="text-4xl">Password Generator</h1>
                <form action="" class="mt-5">
                    <div>
                        <label for="length">1. Lunghezza password</label>
                        <input type="number" name="length" id="length" class="bg-white rounded text-black w-20 ml-5">
                    </div>
                    
                    <div class="mt-2">
                        <label for="repetition" class="mr-5">2. Consenti la ripetizione?</label>
                        <input type="checkbox" name="repetition" id="repetition">
                    </div>

                    <div class="mt-2">
                        <div>3. Quali caratteri vuoi:</div>
                        <div class="mt-2 ml-4">
                            <input type="checkbox" name="filter" id="filter">
                            <label for="filter">Lettere</label>
                        </div>
                        <div class="ml-4">
                            <input type="checkbox" name="filter" id="filter">
                            <label for="filter">Numeri</label>
                        </div>
                        <div class="ml-4">
                            <input type="checkbox" name="filter" id="filter">
                            <label for="filter">Simboli</label>
                        </div>

                    </div>
                    
                </form>
            </div>
        </div>
    </main>
</body>
</html>