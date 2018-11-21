<?php
    include_once('db.php');
    $sql = 'SELECT * from news';
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
                <!-- <li>
                    <a href="#">
                        <div class="p-left">
                            <img src="./assets/blog-img/gettyimages-857015410-1_large.jpg" />
                        </div>
                        <div class="p-right">
                            <p>Better Buy: Intuitive Surgical (ISRG) vs. Align Technology (ALGN)</p>
                            <span> 11/12/2018 1:17:00 PM - Motley Fool</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-left">
                            <img src="./assets/blog-img/finance76.jpg" />
                        </div>
                        <div class="p-right">
                            <p>Oversold Conditions For Align Technology (ALGN)</p>
                            <span> 11/9/2018 6:21:27 PM - BNK Invest</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-left">
                            <img src="./assets/blog-img/finance68.jpg" />
                        </div>
                        <div class="p-right">
                            <p>Align Technology (ALGN) Gains As Market Dips: What You Should Know</p>
                            <span> 11/8/2018 10:45:20 PM - Zacks.com</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-left">
                            <img src="./assets/blog-img/finance08.jpg" />
                        </div>
                        <div class="p-right">
                            <p>Market Close Report: NASDAQ Composite index closes at 7,570.75 up 194.79 points</p>
                            <span> 11/7/2018 9:45:15 PM - NASDAQ.com News</span>
                        </div>
                    </a>
                </li> -->
            </ul>
        </div>