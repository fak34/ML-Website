<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Machine Learning at Cornell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link href="../css/styles.css" rel="stylesheet">
  </head>

<body>
<div class="wrapper">
  <div class="box">
      <div class="row">

        <!-- sidebar -->
        <div class="column col-sm-3" id="sidebar">
          <a href="../index.php">
            <img src="../img/logo-white.png" style="height:100px; width:100px; margin-top:15px; margin-left: 15px; float:left;"></img>
            <img src="../img/logo.png" style="height:85px; width:150px; margin-top:25px; margin-left: 15px;"></img>
          </a>
          <br><hr>
          <ul class="nav nav-main">
            <li><a href="../index.php"><h5>Home</h5></a>
            </li>
            <li><a href="people.php"><h5>People</h5></a>
            </li>
            <li class="active"><a href="courses.php"><h5>Courses</h5></a>
            </li>
            <li><a href="highlights.php"><h5>News & Awards</h5></a>
            </li>
            <li><a href="products.php"><h5>Software</h5></a>
            </li>
            <li><a href="join.php"><h5>Join Us</h5></a>
            </li>
          </ul>
          <ul class="nav hidden-xs text-center" id="sidebar-footer">
            <li>
              <h3>Machine Learning at Cornell</h3>
            </li>
            <br><br>
          </ul>
        </div>
        <!-- /sidebar -->
          
        <!-- main -->
        <div class="column col-sm-9" id="main">
               
          <div class="padding">

            <!-- Faculty -->
            <div class="col-sm-12">
              <div class="page-header text-muted divider" align="center">
                Cornell Courses
              </div>
            </div>

            <?php

            $courses_txt_file    = file_get_contents('../data/courses.csv');
            $rows        = explode("\n", $courses_txt_file);
            array_shift($rows);

            foreach($rows as $row => $data)
            {
                //get row data
                $row_data = explode('\t', $data);
            
                $info[$row]['number']     = $row_data[0];
                $info[$row]['name']       = $row_data[1];
                $info[$row]['link']       = $row_data[2];
                $info[$row]['image']      = $row_data[3];
        
                if ($info[$row]['link'] == " null "){  
                  echo '<div class="col-md-4 text-center" id="course">
                    <img src="'.$info[$row]['image'].'" class="img-respsonsive img-circle img-no-hover">
                    <h5><b>'.$info[$row]['number'].'</b></h5><h5>'.$info[$row]['name'].'</h5>
                  </div>';
                }
                else {
                  echo '<div class="col-md-4 text-center" id="course">
                    <a href="'.$info[$row]['link'].'" target="_blank"><img src="'.$info[$row]['image'].'" class="img-respsonsive img-circle"></a>
                    <h5><a href="'.$info[$row]['link'].'" target="_blank"><b>'.$info[$row]['number'].'</b></h5><h5>'.$info[$row]['name'].'</a></h5>
                  </div>';
                }

              
            }
            
            ?>        
            
                      
            <!-- Contact -->
            <?php #include "../elements/contact.php" ?>

                      
        </div><!-- /padding -->
      </div>
      <!-- /main -->
          
    </div>
  </div>
</div>
<!-- script references -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>