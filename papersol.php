<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPA-Practise</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="papers.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">
    <div id="home">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="index.html" class="navbar-brand"><img src="images/PPA-edit.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"> 
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="team.php" class="nav-link">Team</a>
                </li>
                <?php
                            if(isset($_SESSION["useruid"]))
                            {
                                echo "<li class='nav-item'><a href='profile.php' class='nav-link'>Profile</a></li>";
                                echo "<li class='nav-item'><a href='includes/logout.inc.php' class='nav-link'>Logout</a></li>";
                            }
                            else
                            {
                                echo "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
                                echo "<li class='nav-item'><a href='signup.php' class='nav-link'>Signup</a></li>";  
                            }
        		?>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        </nav>
        <!--Start landing page-->
        <div class="landing">
            <div class="home-wrap">
                <div class="home-inner">
                    <img src="images/humberto-chavez-InrNz281-S8-unsplash.png" alt="" id="bimg">
                    <div class="section">
                        
                        <div class="image-section">
                            <h1 id="title">O/L</h1>
                            <table class="table table-bordered" id="table">
                                <tr>
                                    <th>#</th>
                                    <th colspan="2">2017</th>
                                    <th colspan="2">2018</th>
                                    <th colspan="2">2019</th>
                                    <th colspan="2">2020</th>
                                </tr>
                                <tr>
                                    <td>Biology</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>Mathematics</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                    <td>Sinhala</td>
                                    <td>English</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
            
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>

</html>