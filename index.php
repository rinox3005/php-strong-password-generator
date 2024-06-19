<?php
// Inizializzo la sessione
session_start();

// Includo il file .php che contiene le funzioni
include __DIR__ . '/functions.php';

// Prendo il valore passato in GET dall'input range
$passwordLength = $_GET['length'] ?? 0;
$includeLett = $_GET['includeLett'] ?? 'off';
$includeNum = $_GET['includeNum'] ?? 'off';
$includeSym = $_GET['includeSym'] ?? 'off';

// Assegno alla variabile password il risultato della funzione
$password = passwordRandomizer($passwordLength, $includeLett, $includeNum, $includeSym);

// Aggiungo il valore di password alla chiave genPassword all'interno di SESSION
$_SESSION['password'] = $password;

// Se la password é stata generata reindirizza sulla pagina della password e termina i processi della pagina attuale
if (!empty($_SESSION['password'])) {
    header('Location: ./genPassword.php');
    die();
}
?>

<!-- Includo la parte iniziale dell'html -->
<?php include __DIR__ . '/includes/htmlHead.php'; ?>

<main>
    <section class="container text-center">
        <form action="index.php" method="GET">
            <h1 class="p-4">Strong Password Generator</h1>
            <div class="row justify-content-center">
                <!-- Input range per selezionare la lunghezza della password desiderata -->
                <div class="col-3 mb-4">
                    <label for="passLength" class="form-label">Password length (min: 6) : <span id="passLengthValue" class="fw-bold">6</span></label>
                    <input type="range" class="form-range" min="6" max="18" value="6" id="passLength" name="length" />
                </div>
            </div>
            <div class="mb-4">
                <h5>Include:</h5>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="letters" autocomplete="off" name="includeLett">
                    <label class="btn btn-outline-primary" for="letters">Letters</label>

                    <input type="checkbox" class="btn-check" id="numbers" autocomplete="off" name="includeNum">
                    <label class="btn btn-outline-primary" for="numbers">Numbers</label>

                    <input type="checkbox" class="btn-check" id="symbols" autocomplete="off" name="includeSym">
                    <label class="btn btn-outline-primary" for="symbols">Symbols</label>
                </div>
            </div>
            <button class="btn btn-primary">Generate</button>
        </form>
    </section>
</main>

<!-- Creo un piccolo script per mostrare in pagina il valore numerico del range -->
<script>
    document.getElementById('passLength').addEventListener('input', function() {
        document.getElementById('passLengthValue').textContent = this.value;
    });
</script>