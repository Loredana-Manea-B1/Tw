<?php
session_start();
include "../myAccount/database.php";
$con = BD::get_con();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SkiVi </title>
    <link rel="stylesheet" href="../css/coursesstyle.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="../assets/logo.png" alt="">
            </div>
            <ul class="nav-area">
                <li><a href="../html/front_page.php">Home</a></li>
                <li><a href="../html/service.html">Services</a></li>
                <li><a href="../php/courses.php">Courses</a></li>
                <li><a href="../myAccount/login.php">Login</a></li>
                <li><a href="../html/about.html">About</a></li>
            </ul>
        </div>
    </header>

    <?php

$result = mysqli_query($con, "SELECT * FROM courses");
 ?>


<?php mysqli_close($con); ?>
</body>

    <div class="container">
        <div class="details">
            <h2>Courses</h2>

        </div>
        <!-- <div class="main-box">
            <div class="box box-grey">
                <div class="icon">
                    <i class="fas fa-desktop"></i>
                </div>
                <h2>Web Design</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#">Read More</a>
            </div>

            <div class="box box-red">
                <div class="icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h2>Life style</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#" class="white-border">Read More</a>
            </div>

            <div class="box box-blue">
                <div class="icon">
                    <i class="fas fa-pen"></i>
                </div>
                <h2>Drawing</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#">Read More</a>
            </div>
            <div class="box box-grey">
                <div class="icon">
                    <i class="fas fa-bacon"></i>
                </div>
                <h2>Cooking</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#">Read More</a>
            </div>

            <div class="box box-blue">
                <div class="icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <h2>Personal Development</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#" class="white-border">Read More</a>
            </div>
            <div class="box box-red">
                <div class="icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h2>Photography</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#" class="white-border">Read More</a>
            </div>

            <div class="box box-blue">
                <div class="icon">
                    <i class="fas fa-magic"></i>
                </div>
                <h2>Magic tricks</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#" class="white-border">Read More</a>
            </div>
            <div class="box box-grey">
                <div class="icon">
                    <i class="fas fa-music"></i>
                </div>
                <h2>Music</h2>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda labore.</p>
                <a href="#">Read More</a>
            </div>


        </div> -->

 
        <div class="main-box">
    <?php
    while ($row = mysqli_fetch_array($result)) {

        // echo '<div class="box box-grey">'.
        //     "Title:  " . $row['title'] . "<br />" .'<hr>'.
        //     "Description:  " . $row['description'] . "<br />" .'<hr>'.
        //  '<img src="C:/xampp/htdocs/TW/Proiect/assets/'. $row['icon'] .'"/>'.
        //     '</div>';


            $files = glob("../photos/*.*");
            for ($i = 0; $i < count($files); $i++) {
                $image = $files[$i];
                echo '<div class="box box-grey">'.
                "Title:  " . $row['title'] . "<br />" .'<hr>'.
                "Description:  " . $row['description'] . "<br />" .'<hr>'.
                 '<img class="temeplate_imagine" src="' . $image . '" alt="Random image" />' . //aici trebuie gasita o metoda de a afisa pozele direct din DB, nu cu glob(linia 141)
                '</div>';

            }
            }
     ?>
</div>
    </div>

</body>

</html>