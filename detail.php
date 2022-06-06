<?php
$id = $_GET['id'];
$url = 'http://localhost:3333/hotels/' . $id;
$data = json_decode(file_get_contents($url), true);
?>
<?php include('./head.php') ?>

<body>
    <?php include('./header.php') ?>
    <main>
        <?php include('./form.php') ?><div class="card-detail">
            <div class="card-info">
                <img id="card-hotel" src="<?php echo $data['hotel']['image'] ?>" alt="<?php echo $data['hotel']['name'] ?>">
                <div class="card-text">
                    <p id="card-name"><?php echo $data['hotel']['name'] ?></p>
                    <p id="card-address"><img src="./img/address.svg" alt="icon_address" width="12px"><?php echo $data['hotel']['address'] ?></p>
                    <p id="card-description"><?php echo $data['hotel']['description'] ?></p>
                </div>
            </div>
            <?php
            foreach ($data['rooms'] as $room) {

                $div = "<div id='card-rooms'>";
                $divRight = "<div id='card-rooms-right'>";
                $divLeft = "<div id='card-rooms-left'>";
                $IconTrue = "<img id='true' src='./img/true.svg' alt='icon_true' width='12px'>";
                $IconFalse = "<img id='false' src='./img/false.svg' alt='icon_false' width='12px'>";
                $buttonReserve = '<button id="button-reserve" type="button">Reservar Agora</button>';
                $roomType = $room['roomType']['name'];
                $amount = $room['price']['amount'];
                $cancelation = $room['cancellationPolicies']['refundable'] == 1 ?  $IconTrue . "<span id='true'>Cancelamento gratuito</span>" : $IconFalse . "<span id='false'>Multa de cancelamento</span>";

                echo $div;
                echo $divRight;
                echo "<p id='card-rooms-tipe'>$roomType</p>";
                echo "<p>$cancelation</p>";
                echo '</div>';
                echo $divLeft;
                echo "<div>R$ $amount <span id='noite'>/noite</span><p id='pagamento'>Pagamento no hotel</p> </div>";
                echo $buttonReserve;
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

    </main><?php include('./footer.php') ?>
</body>
<script>
    setInterval(function() {
            location.reload(true);
        }

        , 10000);
</script>