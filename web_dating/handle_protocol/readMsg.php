<?php
session_start();
require_once("../connect.php");

$q = "SELECT * FROM `msg`";
if ($rq = mysqli_query($conn, $q)) {

    if (mysqli_num_rows($rq) > 0) {

        while ($data = mysqli_fetch_assoc($rq)) {
            if ($data["username"] == $_SESSION["username"]) {
?>
                <p class="sender">
                    <span><?= $data["username"] ?></span>
                    <?= $data["msg"] ?>
                </p>

            <?php
            } else {
            ?>
                <p>
                    <span><?= $data["username"] ?></span>
                    <?= $data["msg"] ?>
                </p>

<?php
            }
        }
    } else {

        echo "<h3> Chat is empty at this moment!!</h3>";
    }
}




?>