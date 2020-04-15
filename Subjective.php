<div class="container p-3 mt-3">
    <div class="card bg-light border-primary mb-3 ">
        <div class="card-header d-flex justify-content-between">
            <h3 style="width: 100%;height: 50px; background: #27293d !important; position: relative; color: white;" class="p-4">
                <a href="#menu-toggle" class="menuopener" id="menu-toggle" style="position: absolute!important;right: 0!important;">
                    <i class="fa fa-bars"></i>
                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Create Quiz
            </h3>

        </div>

         <div class="card p-3" style=""><font style=" font-size: 1.5em;color: #0A2F31;">Add contacts</font>
                <hr>
             <div class="form form-inline" style="display: block;">
                                                       <form  method="POST" action="<?php echo base_url('Teacher_subquiz/contact'); ?>">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Student Name</label>
                                                                <input type="text" class="form-control" name="Student_name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Student Contact</label>
                                                                <input type="number" class="form-control" name="Number" id="exampleInputPassword1" minlength="10" maxlength="10" required>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="exampleInputPassword1">Class&nbsp;&nbsp;&nbsp;<prev></label>
                                                                <select name="Class[]" class="form-control" id="class">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                             <div class="form-group ">
                                    <button type="submit" class="btn" style="background: #008A91; margin-top: 20px;" name="submit">Submit</button>
                                                            </div>
                                                            </form>
                                                       </div>
                                                       <!-- form -->
                                                       </div>
  
        <h3>Quiz Created:</h3>
            <div class="col-md-10 offset-md-1">
                <table class="table table-bordered" style="">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Class</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Quiz at</th>
                            <th scope="col">Share</th>
                            <th scope="col">Attempts</th>
                        </tr>
                    </thead>
                    <?php $count = 1;
                   	if(isset($data)){
                    foreach ($data->result() as $row) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $count++; ?></th>
                                <td><?php echo $row->title;
	?></td>
                                <td><?php echo $row->class;
	?></td>
                                <td><?php echo $row->subject;
	?></td>
                                <td><?php echo $row->date; ?></td>
          <?php echo '
          <form method="post" action = "'.base_url('Teacher_subquiz/show').'">
       
        <input type="hidden" name="hidden_id" value="'.$row->id.'"/>
        <td>

                                    <a target="_blank" href="https://api.whatsapp.com/send?text=You can participate in quiz by clicking here '.base_url('Teacher_subquiz/apply/').$row->id.'">
                                        <img src="https://image.flaticon.com/icons/svg/2111/2111728.svg" height="30px" width="30px">
                                    </a>
                                    <a href="mailto: '.base_url('Teacher_subquiz/apply/').$row->id.'?Subject=Invitation link&Body=I would like to invite you to attend quiz.Click on following
                                    link and attend quiz: '.base_url('Teacher_subquiz/apply/').$row->id.'" class="mx-3"><img src="https://image.flaticon.com/icons/svg/888/888853.svg" height="30px" width="40px"></a>

                                
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter'.base_url('Teacher_subquiz/apply/').$row->id.'">
                                                SMS</button>';?>



                                                <button type="submit" name="submit" value ="Link" class="btn btn-primary">Link</button> </td>
        </form>
                       
                                </tr>
                            </tbody>
                             <?php } }
            ?>

                        </table>
                    </div>
                </div>
            </div>
