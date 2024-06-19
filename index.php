<?php

$passwordLength = $_GET['length'];

?>



<?php include __DIR__ . '/includes/htmlHead.php'; ?>


<main>

    <section class="container text-center">
        <form action="index.php" method="GET">
            <h1 class="p-4">Strong Password Generator</h1>
            <div class="row justify-content-center">
                <div class="col-3 mb-4">
                    <label for="passLength" class="form-label">Select password length: <span id="passLengthValue">0</span></label>
                    <input type="range" class="form-range" min="0" max="18" value="0" id="passLength" name="length" />

                </div>
            </div>
            <button class="btn btn-primary">Generate</button>
        </form>
    </section>
</main>

<script>
    document.getElementById('passLength').addEventListener('input', function() {
        document.getElementById('passLengthValue').textContent = this.value;
    });
</script>


<?php include __DIR__ . '/includes/htmlClose.php'; ?>