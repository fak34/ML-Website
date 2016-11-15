<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Machine Learning at Cornell</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<link href="css/styles.css" rel="stylesheet">
	</head>

<body>
<div class="wrapper">
  <div class="box">
      <div class="row">

        <!-- sidebar -->
        <?php include 'elements/menu-main.php' ?>
        <!-- /sidebar -->
          
        <!-- main -->
        <div class="column col-sm-9" id="main">
               
          <div class="padding">
            <div class="col-sm-12" align="center">
              <img src="img/gateshall.jpg" style="height:100%; width:100%;">
            </div>

            <div class="col-sm-12">
              <div class="page-header text-muted divider" align="center">
                About Machine Learning at Cornell
              </div>
            </div>
            
            <?php 

            $txt        = file_get_contents('data/main-text.txt');
            $sections   = explode("\n", $txt);

            echo '<div class="row">    
              <div class="col-sm-6 text-center">
                <h3>What is Machine Learning?</h3>
                <p>'.$sections[1].'</p>
              </div>
              <div class="col-sm-6 text-center">
                <h3>What is ML at Cornell?</h3>
                <p>'.$sections[2].'</p>
              </div>
            </div>
          </div>

          

          <div class="full col-sm-9">
             
            <!-- History -->        
            <div class="col-sm-12">
              <div class="page-header text-muted divider" align="center">
                History of Machine Learning at Cornell
              </div>
            </div>';

            $history_sections   = explode("||", $sections[3]);

            foreach ($history_sections as $section) {
              if (strpos($section,'::') == False){
                echo '<p>'.$section.'</p>';
              }
              else {
                $split   = explode("::", $section);
                $url = $split[1];
                echo '<img src="'.$url.'"" align="'.$split[2].'" height="150" width="150" style="margin:20px; border-radius:500px;">';
              }
            }

            ?>
                    
            <div class="col-sm-12">
              <div class="page-header text-muted divider" align="center">
                Related Links at Cornell
              </div>
            </div>


            <div class="text-center">
              <a class="col-sm-4" href="http://www.cs.cornell.edu/research/ai" target="_blank">
                <img src="img/related/ai.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Artificial Intelligence</h5>
              </a>
              <a class="col-sm-4" href="http://www.cogstud.cornell.edu/" target="_blank">
                <img src="img/related/cogsci.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Cognitive Science</h5>
              </a>
              <a class="col-sm-4" href="http://nlp.cornell.edu/" target="_blank">
                <img src="img/related/nlp.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Natural Language Processing</h5>
              </a>
              <a class="col-sm-4" href="http://www.robotics.cornell.edu/" target="_blank">
                <img src="img/related/robotics.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Robotics</h5>
              </a>
              <a class="col-sm-4" href="http://stat.cornell.edu/" target="_blank">
                <img src="img/related/stsci.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Statistical Science Department</h5>
              </a>
              <a class="col-sm-4" href="http://bscb.cornell.edu/" target="_blank">
                <img src="img/related/biostat.jpg" class="img-respsonsive img-circle">
                <br><br>
                <h5>Biological Statistics and Computational Biology Department</h5>
              </a>
              <a class="col-sm-4" href="http://cornellds.com/" target="_blank">
                <img src="img/related/cds.jpg" class="img-respsonsive img-circle">
                <br>
                <h5>Data Science Project Team</h5>
              </a>
            </div>

            <!-- Contact -->
            <?php #include "elements/contact.php" ?>      
                      
          </div><!-- /col-9 -->
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