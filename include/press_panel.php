<?php
    include_once('db.php');
    $sql = 'SELECT * from press';
    $result = mysqli_query($con, $sql);

?>
<div class="news-content">
            <ul>
            <?php
                while ($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $date = $row['date'];
            ?>
                <li>
                    <a href="#">
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