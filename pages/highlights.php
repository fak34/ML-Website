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
            <li><a href="courses.php"><h5>Courses</h5></a>
            </li>
            <li class="active"><a href="highlights.php"><h5>News & Awards</h5></a>
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
                Program News & Awards
              </div>
            </div>

            <?php

            $highlights_txt_file    = file_get_contents('../data/highlights.csv');
            $rows        = explode("\n", $highlights_txt_file);
            array_shift($rows);

            foreach($rows as $row => $data)
            {
                //get row data
                $row_data = explode('\t', $data);
            
                $info[$row]['header']     = $row_data[0];
                $info[$row]['text']       = $row_data[1];
                $info[$row]['link']       = $row_data[2];
            
                if ($info[$row]['link'] == " null"){
                  if (strpos($info[$row]['text'],'???') == False){
                    echo '<h5><b>'.$info[$row]['header'].':</b>'.$info[$row]['text'].'</h5>';
                  }
                  else {
                    echo '<h5><b>'.$info[$row]['header'].':</b>';
                    $text_data = explode('???', $info[$row]['text']);
                    echo '<ul>';

                    foreach($text_data as $text){
                      echo '<li type="disc"><h5>'.$text.'</h5></li>';
                    }
                    echo '</ul>';
                  }
                }
                else {
                  echo '<h5><b>'.$info[$row]['header'].':</b><a href="'.$info[$row]['link'].'" target="_blank">'.$info[$row]['text'].'</a></h5>';
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