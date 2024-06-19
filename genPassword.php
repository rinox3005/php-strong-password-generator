<?php
// Inizializzo la sessione
session_start();

var_dump($_SESSION);

?>

<!-- Includo la parte iniziale dell'html -->
<?php include __DIR__ . '/includes/htmlHead.php'; ?>

<!-- Controllo se la password é stata generata e la mostro in pagina -->
<?php if (!empty($_SESSION['password'])) : ?>
    <div class="alert alert-success mt-5">
        Your generated password is: <strong><?php echo $_SESSION['password']; ?></strong>
    </div>
<?php endif; ?>


<!-- Includo la parte finale dell'html -->
<?php include __DIR__ . '/includes/htmlClose.php'; ?>