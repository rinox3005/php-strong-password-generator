<?php
// Inizializzo la sessione
session_start();

?>

<!-- Includo la parte iniziale dell'html -->
<?php include __DIR__ . '/includes/htmlHead.php'; ?>

<section class="container text-center">
    <h2 class="pt-5">Strong Password Generator</h2>
    <!-- Controllo se la password é stata generata e la mostro in pagina -->
    <?php if (!empty($_SESSION['password'])) : ?>
        <div class="alert alert-success mt-5">
            Your generated password is: <strong><?php echo $_SESSION['password']; ?></strong>
        </div>
    <?php endif; ?>
</section>

<!-- Includo la parte finale dell'html -->
<?php include __DIR__ . '/includes/htmlClose.php'; ?>