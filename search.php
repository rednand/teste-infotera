<?php include('./head.php') ?>

<body>
    <?php include('./header.php') ?>
    <main>
        <?php include('./form.php') ?>
        <section id="cards"></section>
        <?php include('./footer.php') ?>
    </main>
</body>
<script type="module" src="./js/createCardHotels.js">

</script>
<script>
    setInterval(function() {
        location.reload(true);
    }, 10000000);
</script>