<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div>
    <div class="page-title section nobg" style="padding: 15px 0!important;">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="title-area pull-left">
                    <h2>Student account <small></small></h2>
                </div>
                <!-- /.pull-right -->
                <div class="pull-right" style="background: transparent;">
                    <div class="bread" style="background: transparent;">
                        <ol class="breadcrumb" style="background: transparent; color: white;">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li> &nbsp;/ &nbsp;
                            <li><a class="active" style="pointer-events: none;">Quiz Summary</li>
                        </ol>
                        <a href="#menu-toggle" class="menuopener" id="menu-toggle" style=""><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- end bread -->
                </div>
                <!-- /.pull-right -->
            </div>
            <!-- end clearfix -->
        </div>
    </div>
    <!-- end page-title -->
</div>
<div class="container mt-3 pt-4">
    <div class="alert alert-primary shadow text-center" role="alert">
        <b>
            <h4>Quiz Attempted yet!!</h4>
        </b>
        <div class="row px-4 d-flex justify-content-center">
           <?php
           if(isset($query)){
            foreach($query->result() as $row){?>
                <div class="card shadow border-info m-3" style="max-width: 18rem;">
                    <div class="card-header">Quid Id: <?= $row->q_id?></div>
                    <div class="card-body text-info">
                        <h5 class="card-title">
                            <!--<a href="<?php echo base_url() ?>quizes/quiz_summary/<?= $result['q_id'] ?>"> Check Summary<br></a>-->
                            Score: <?= $row->score ?>
                        </h5>
                    </div>
                
          <?php   }
           }?>
                    <div class="card-footer">
                       <!-- Attempted at: <?= $result['at']; ?>-->
                    </div>
           
        </div>
    </div>


</body>
</html>
