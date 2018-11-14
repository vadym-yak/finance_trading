<?php
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon"/>
    <title>ML Predictive</title>
    <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="http://www.amcharts.com/lib/3/serial.js"></script>
    <script src="http://www.amcharts.com/lib/3/amstock.js"></script>
    <script src="./assets/js/dataloader.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login_signup.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./assets/js/myChart.js"></script>
    <script type="text/javascript" src="./assets/js/login_signup.js"></script>
</head>

<body>

    <header class="header-body">
        <div class="header-limiter">
            <h1><a href="#">Company<span>logo</span></a></h1>
            <nav>
                <div class="header-user-menu"><span>ALGN</span>
                    <table class="tbl-stock-list">
                        <thead>
                            <th>Name</th>
                            <th>Change</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Volume</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ALGN</td>
                                <td style="color: #22caac;">0.15%</td>
                                <td>36.58</td>
                                <td>35.58</td>
                                <td>38.7</td>
                                <td>37.98</td>
                                <td>1578954</td>
                            </tr>
                            <tr>
                                <td>POLY</td>
                                <td style="color: #fd3d73;">0.08%</td>
                                <td>69.52</td>
                                <td>68.22</td>
                                <td>70.56</td>
                                <td>69.87</td>
                                <td>59875512</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </nav>
            <ul>
                <?php
                    if ( !isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
                ?>
                <li><a href="#login-box" class="login-window">Login</a></li>
                <li><a href="#signup-box" class="login-window">Sign up</a></li>
                <?php 
                    } else {
                ?>
                <div class="dropdown" style="float:right;">
                    <a class="dropbtn"><?php echo $_SESSION['username'] ?></a>
                    <div class="dropdown-content">
                        <a href="#" id="logout_btn">Logout</a>
                        <!-- <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
                    </div>
                </div>
                <?php
                    }
                ?>
            </ul>
        </div>
    </header>
    <div class="main-body">
        <div class="content">
            <div class="charttools">
                Group by:
                <input type="button" value="days" onclick="setGrouping('DD', this);" class="selected" />
                <input type="button" value="weeks" onclick="setGrouping('WW', this);" />
                <input type="button" value="months" onclick="setGrouping('MM', this);" />
            </div>
            <div id="chartdiv">
            
            </div>
        </div>
        <div class="sidebar">
            <div class="header-user-menu" style="margin-top: 30px;"><h2 style="color:white; margin-left: 10px;">ALGN</h2>
                <table class="tbl-stock-list right-list">
                    <thead>
                        <th>Name</th>
                        <th>Change</th>
                        <th>Open</th>
                        <th>Close</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Volume</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ALGN</td>
                            <td style="color: #22caac;">0.15%</td>
                            <td>36.58</td>
                            <td>35.58</td>
                            <td>38.7</td>
                            <td>37.98</td>
                            <td>1578954</td>
                        </tr>
                        <tr>
                            <td>POLY</td>
                            <td style="color: #fd3d73;">0.08%</td>
                            <td>69.52</td>
                            <td>68.22</td>
                            <td>70.56</td>
                            <td>69.87</td>
                            <td>59875512</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="news-body">
        <h2>Recent News</h2>
        <hr>
        <div class="news-content">
            <ul>
                <li>
                    <a href="#">
                        <div class="p-left">
                            <img src="./assets/blog-img/finance32.jpg" />
                        </div>
                        <div class="p-right">
                            <p>Market Close Report: NASDAQ Composite index closes at 7,200.87 down -206.03 points</p>
                            <span> 11/12/2018 9:45:14 PM - NASDAQ.com News</span>
                        </div>
                    </a>
                </li>
                <li>
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
                </li>
            </ul>
        </div>
    </div>

    <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="./assets/img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="post" class="signin" action="#">
            <fieldset class="textbox">
                <label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                <button class="submit button" type="button" id="signin_btn">Sign in</button>     
            </fieldset>
        </form>
    </div>

    <div id="signup-box" class="login-popup">
        <a href="#" class="close"><img src="./assets/img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="post" class="signin" action="#">
            <fieldset class="textbox">
                <label class="username">
                <span>Username</span>
                <input id="up-username" name="up-username" value="" type="text" autocomplete="on" placeholder="Username">
                <label class="username">
                <span>Email</span>
                <input id="up-email" name="up-email" value="" type="email" autocomplete="on" placeholder="Email">
                </label>
                <label class="password">
                <span>Password</span>
                <input id="up-password" name="up-password" value="" type="password" placeholder="Password">
                </label>
                <label class="password">
                <span>Confirm Password</span>
                <input id="up-password1" name="up-password1" value="" type="password" placeholder="Confirm Password">
                </label>
                <button class="submit button" type="button" id="signup_btn">Register</button>
            </fieldset>
        </form>
    </div>

</body>
</html>