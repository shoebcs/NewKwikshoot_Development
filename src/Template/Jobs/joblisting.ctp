<?php echo $this->Html->css('bootstrap.css'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard | Job Listing
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Job Listing</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <div class="box-body">
             <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Expected Video length</th>
                  <th>Raw Video length</th>
                  <th>Start End Points</th>
                  <th>Submission Date</th>
                  <th>Price</th>
                  <th>Job Status</th>
                  <th>View Details</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $array_id = array();
                $uarray_id = array();
                foreach ($jobs as $job): 
                $array_id[]=$job->id;
                $uarray_id[] = $job->user_id;
                 ?>
               <?php if($job->user_id != 0)
                   {?> <tr>
                   
                    <td><?php echo $job->id;  ?> </td>
                    <td><?php echo $job->required_video_length; echo '      Minutes';  ?></td>
                    <td><?php echo $job->raw_video_length; echo '      Minutes';  ?></td>
                    <td><?php echo $job->video_start_end_points==""?'N/A':$job->video_start_end_points;  ?></td>
                    <td><?php echo $job->created;  ?></td>
                    <td><?php echo '$'; echo $job->total_price;  ?></td>
                    <td><?php echo $job->job_status;  ?></td>
                    <td><?= $this->Html->link('View Details', ['action' => 'viewdetails', $job->id],array('escape'=>'false', 'class'=>'btn btn-fprimary btn-block btn-info')) ?> </td>
                     <td><?php if($this->request->session()->read('login_type')=='user'){
                        echo $this->Form->postLink('Delete', ['action' => 'delete', $job->id], ['class'=>'btn btn-fprimary btn-block btn-info','confirm' => __('Whoa, hold on a second… are you sure you want to delete this job? Contact us if there is an issue.')]); 
                     }elseif($this->request->session()->read('login_type')=='admin' && $job->deleted == 1) { 
                            echo 'User Deleted';
                     }elseif($this->request->session()->read('login_type')=='admin' && $job->editor_id !=0 && $job->accepted == 0) { ?>
                           <a href="" data-toggle="modal" data-target="#myModal<?php echo $job->id ?>">Re Assign</a>  
               <?php }elseif($this->request->session()->read('login_type')=='admin' && $job->editor_id !=0 && $job->accepted == 1) { 
                           echo 'Job Accepted By Editor'; 
                     
                     }elseif($this->request->session()->read('login_type')=='editor' && $job->accepted != 0){
                           echo    '<span class = "btn-fprimary btn-block btn-info" 
                                    style ="font-size: 18px;
                                    font-weight: normal;
                                    line-height: 1.42857143;
                                    text-align: center;
                                    padding: 12px 22px;color: #fff;
                                    background-color: red;
                                    border-color: #1b6d85;">Accepted</span>';
                     }elseif($this->request->session()->read('login_type')=='editor' && $job->accepted == 0){
                           echo  $this->Html->link('Accept', ['action' => 'jobaccept', $job->id],array('escape'=>'false', 'class'=>'btn btn-fprimary btn-block btn-info'));      
                     }else {?>
                           <a href="" data-toggle="modal" data-target="#myModal<?php echo $job->id ?>">Assign job</a>    
                     <?php } ?></td>
                 
                </tr>
                  <?php } ?>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
              <?php if($job == '') { ?>
              <div class="center-data" style="text-align:center;"> <?php echo  'No Record  Found'; } ?> </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  $(function () {
    $("#example1").DataTable({
     'order':[4,'desc']
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php for($i=0; $i<count($array_id); $i++){?>
<div class="modal fade" id="myModal<?php echo $array_id[$i] ?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Assign job to Editor</h4>
        </div>
        <div class="row-inner" style="display: table;padding-top: 14px;">
            <div class="col-md-12">
                    <?php echo $this->Form->create(User, array(
                                           'url' =>  array('controller'=>'jobs','action'=>'jobassign'),
                                           'role' => 'form',
                                           'type' => 'post',
                                           ));
                                ?>
                <div class="form-group">
                    <label class="sr-oyyunly">Please Select the Editor</label>
                    <?php  echo $this->Form->input('editornewid',array('type'=>'select','label' => false,'options'=>$editor,'style'=>'width: 200px; padding: 8px;')); ?>
                    <?php  echo $this->Form->input('jobid',array('type'=>'hidden','value'=>$array_id[$i])); ?>   
                    <?php  echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$uarray_id[$i])); ?>     
                </div>
                <div class="form-group">
                     <?php echo $this->Form->submit('Submit', array(
                                                    'class' => 'btn btn-primary btn-block',
                                                    'label' => false,
                                                    'div' => false,
                                                    'value' =>'Submit',
                                                    'style'=>'padding: 7px 5px; width: 94px; font-size: 16px;'
                                ));
                          ?>
                </div>
              <?php echo $this->Form->end();?>
            </div>
        </div>
      </div>
      
    </div>
  </div>
<?php } ?>