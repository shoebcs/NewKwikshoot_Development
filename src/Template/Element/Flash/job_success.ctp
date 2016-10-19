<script>
     $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Job Price</h4>
            </div>
            <div class="row">
                    
                
                <div class="col-md-8" style="margin-left: 150px;"><h1>$<?php echo $params['total_price']; ?></h1></div>
                    <div class="col-md-2">&nbsp;</div>
            </div>
          
            <div class="row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-3">
             <?php //echo $this->Html->link('Accepted',array('controller' => 'Jobs','action' => 'index'),array('escape' => false,'class'=>"btn btn-primary"));  ?>
               
                     <?php if($this->request->session()->read('ID')){ ?>
                    <?php echo $this->Html->link('Accepted',array('controller' => 'Users','action' => 'dashboard'),array('escape' => false,'class'=>"btn btn-primary"));  ?>   
                     <?php }else{?>
                        <a href="#" data-toggle="modal" data-target="#myModal-signup"  class="btn btn-primary" >Accepted</a>
                     <?php } ?>

                    
               </div>
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-3"><a href="/git/kwikshoot/jobs" class="btn btn-primary" data-dismiss="modal">Cancel</a></div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
      </div>
      
    </div>
  </div>