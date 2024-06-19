<?php
// Inizializzo la sessione
session_start();

// Includo il file .php che contiene le funzioni
include __DIR__ . '/functions.php';

// Prendo il valore passato in GET dall'input range
$passwordLength = $_GET['length'] ?? 0;

// Assegno alla variabile password il risultato della funzione
$password = passwordRandomizer($passwordLength);

// Aggiungo il valore di password alla chiave genPassword all'interno di SESSION
$_SESSION['password'] = $password;

if (!empty($_SESSION['password'])) {
    header('Location: ./genPassword.php');
}

var_dump($_SESSION);
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