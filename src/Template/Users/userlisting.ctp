<?php echo $this->Html->css('bootstrap.css'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard | User Listing
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">User Listing</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Country</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                   
                    <td><?php echo $user->name;  ?></td>
                    <td><?php echo $user->email;  ?></td>
                    <td><?php echo $user->phone;  ?></td>
                    <td><?php echo $user->city;  ?></td>
                    <td><?php echo $user->state;  ?></td>
                    <td><?php echo $user->country;  ?></td>
                    <td><?php echo $user->created;  ?></td>
                    
                  <td> 

            <?php if($user->verified == 1){
                $status = $user->active;
                    if( $status != 0){
                     echo 'Delete | Inactive';
                } else{
                    echo 'Delete | Active';
                }
            }
             else {
            $status = $user->active; 
                 echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Whoa, hold on a second… are you sure you want to delete this user? Contact us if there is an issue.')])
                    . " | ";
                 if( $status != 0){
                     echo $this->Html->link("Inactive", array('action'=>'activate', $user->id));
                } else{
                    echo $this->Html->link("Active", array('action'=>'activate', $user->id));
                }
            }
            ?>
                   </td>
                  
                </tr>
                <?php endforeach; ?>
                </tbody>
                
              </table>
            </div>
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
</div>
<script>
  $(function () {
     $("#example1").DataTable({
       "order": [[ 6, 'desc' ]]
    });
    $('#example2').DataTable({
       "order": [[ 1, 'desc' ]],
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
