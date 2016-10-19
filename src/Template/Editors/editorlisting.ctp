<?php echo $this->Html->css('bootstrap.css'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard | Editor Listing
      </h1>
        
        <button class="pull-left btn btn-info m_left"> <?php echo $this->Html->link('Add New',array('action'=>'addnew')); ?></button>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Editor Listing</li>
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Created On</th>
                  <th>Status</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php foreach ($editors as $editor): ?>
                <tr>
                  
                    <td><?php echo $editor->first_name;  ?></td>
                    <td><?php echo $editor->last_name;  ?></td>
                    <td><?php echo $editor->email;  ?></td>
                    <td><?php echo $editor->phone;  ?></td>
                    <td><?php echo $editor->created;  ?></td>
                    <?php 
                       $status = $editor->active;  
                       if($status == 1)
                       { ?>
                    <td> <?php echo 'Active'; ?>  </td>
                    <?php  }
                    else{ ?>
                    <td> <?php echo 'Inactive'; ?> </td>
                    <?php } ?>
                    <td>
                         <?php if($editor->verified == 1){
             echo $this->Html->link('Edit', ['action' => 'edit', $editor->id]); } else { ?>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $editor->id]) ?>
                                |            
                       <?= $this->Form->postLink(
                    'Delete',['action' => 'delete', $editor->id],
                    ['confirm' => 'Are you sure you want to delete this Editor?']);
            } ?>
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
<script>
  $(function () {
    $("#example1").DataTable({
       "order": [[ 4, 'desc' ]]
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
