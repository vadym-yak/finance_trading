<?php
    include_once('db.php');
    $sql = 'SELECT * from presses';
    $result = mysqli_query($con, $sql);

?>
<div class="news-content">
            <ul>
            <?php
                while ($row = $result->fetch_assoc()) {
                $img = ( $row['image'] == 'not available ' || strpos($row['image'], 'spaceball')) ? '' : $row['image'];
                $title = $row['title'];
                $date = $row['date'];
            ?>
                <li>
                    <a href="#">
                        <?php
                        if ( $img != '' ) { 
                        ?>
                        <div class="p-left">
                            <img src="<?= $img ?>" />
                        </div>
                        <?php } ?>
                        <div class="p-right">
                            <p><?= $title ?></p>
                            <span> <?= $date ?> - yahoofinace.com News</span>
                        </div>
                    </a>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>