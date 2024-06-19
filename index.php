<?php

// Prendo il valore passato in GET dall'input range
$passwordLength = $_GET['length'] ?? 0;


function passwordRandomizer($length)
{
    // Utilizzo 4 stringhe di caratteri e uso str_split per traformarli in array
    $lowLetters = str_split('abcdefghijklmnopqrstuvwxyz');
    $uppLetters = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numbers = str_split('0123456789');
    $symbols = str_split('!@#$%^&*()-_=+[]{}|;:,.<>?/');

    // Creo un nuovo array unendo i 4 array generati precedentemente
    $arrayOfChar = array_merge($lowLetters, $uppLetters, $numbers, $symbols);

    // Mescolo i caratteri del nuovo array
    shuffle($arrayOfChar);

    // Utilizzo un ciclo for per generare la password randomizzando il carattere da concatenare alla password
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $arrayOfChar[array_rand($arrayOfChar)];
    }
    // Restituisco la password generata
    return $password;
}

// Assegno alla variabile password il risultato della funzione
$password = passwordRandomizer($passwordLength);


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
                    <label for="passLength" class="form-label">Select password length: <span id="passLengthValue">0</span></label>
                    <input type="range" class="form-range" min="0" max="18" value="0" id="passLength" name="length" />

                </div>
            </div>
            <button class="btn btn-primary">Generate</button>
        </form>
        <!-- Controllo se la password é stata generata e la mostro in pagina -->
        <?php if ($password) : ?>
            <div class="alert alert-success mt-5">
                Your generated password is: <strong><?php echo $password; ?></strong>
            </div>
        <?php endif; ?>
    </section>
</main>

<!-- Creo un piccolo script per mostrare in pagina il valore numerico del range -->
<script>
    document.getElementById('passLength').addEventListener('input', function() {
        document.getElementById('passLengthValue').textContent = this.value;
    });
</script>

<!-- Includo la parte finale dell'html -->
<?php include __DIR__ . '/includes/htmlClose.php'; ?>