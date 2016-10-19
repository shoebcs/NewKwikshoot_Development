<?php echo $this->Html->css('bootstrap.css'); ?> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User | Job Details
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">View Details</li>
      </ol>
    </section>
   
    <section class="content">
        <div class="row">
            <?php echo $this->Form->create('View Detail', array(
                                           'role' => 'form',
                                           'type' => 'post',
                                           'class' => 'form-horizontal',
                                          
                                           )
                                   );
                           ?>
            
        
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Objective Of your video</label>
                  <div class="col-sm-10">
                      <div class="top-value"><?php echo $view_details->objective_of_your_video ; ?> </div>
                  </div>
                </div>
                  
                 
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Objective Of your video other</label>
                  <div class="col-sm-10">
                     <div class="top-value">
                         <?php echo $view_details->objective_of_your_video_other ==''?'Not Provided  yet': $view_details->objective_of_your_video_other; ?> 
                     </div>
                  </div>
                </div>
                 
                 
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Required video length</label>
                  <div class="col-sm-10">
                      <div class="top-value">  <?php echo $view_details->required_video_length ,'   Minutes' ; ?></div>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Raw Video length File(<?php echo $view_details->raw_video_length ; ?> Minutes) </label>
                  <div class="col-sm-10">
                      <div class="top-value"> 
                     <?php $this->Common->fileStatus($view_details['raw_video_length'], $view_details['raw_video_length_file']) ; ?>
                      </div>
                  </div>
                </div>
                 
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Free Title page</label>
                       <div class="col-sm-10">
                           <div class="top-value">
                         <?php echo $view_details->free_title_page==''?'Not Provided Yet':$view_details->free_title_page;  ?>     
                              </div> 
                       </div>
               </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Speaker Title</label>
                          <div class="col-sm-10">
                           <div class="top-value">
                              <?php echo $view_details->speaker_title==''?'Not Provided Yet':$view_details->speaker_title;  ?>     
                                   </div>  
                         </div>
                </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Closing Page Content</label>
                    <div class="col-sm-10">
                      <div class="top-value">
                        <?php echo $view_details->closing_page_content==''?'Not Provided Yet':$view_details->closing_page_content;  ?>     
                             </div>  
                   </div>
                </div>
                 
            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra custom Title page File</label>
                        <div class="col-sm-10">
                            <div class="top-value">
                                <?php $this->Common->fileStatus($view_details['extra_custom_title_page'], $view_details['extra_custom_title_page_file']) ; ?>
                            </div>        
                        </div>
                  </div>
                    
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Single graphic overlay File</label>
                  <div class="col-sm-10">
                      <div class="top-value">
                          <?php $this->Common->fileStatus($view_details['extra_single_graphic_overlay'], $view_details['extra_single_graphic_overlay_file']) ; ?>
                      </div>           
                    </div>
                </div>
                   
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Extra green screen keying File</label>
                    <div class="col-sm-10">
                        <div class="top-value"> 
                          <?php $this->Common->fileStatus($view_details['extra_green_screen_keying'], $view_details['extra_green_screen_keying_file']) ; ?>
                        </div>
                   </div>
                  </div>
                                            
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Extra Music overlay</label>
                        <div class="col-sm-10">
                            <div class="top-value"> 
                         <?php echo $view_details->extra_music_overlay == 1?'YES':'N/A'; ?>
                            </div>
                        </div>
                  </div>
                            
            
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Extra image screen takeover File</label>
                    <div class="col-sm-10">
                        <div class="top-value">
                      <?php $this->Common->fileStatus($view_details['extra_image_screen_takeover'], $view_details['extra_image_screen_takeover_file']) ; ?>
                          </div>
                    </div>
                  </div>
                                           
            
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image overlay on screen</label>
                    <div class="col-sm-10">
                        <div class="top-value"> 
                <?php $this->Common->fileStatus($view_details['extra_image_overlay_on_screen'], $view_details['extra_image_overlay_on_screen_file']) ; ?>
                        </div>
                    </div>
                  </div>
            
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minimum of Subtitles</label>
                  <div class="col-sm-10">
                      <div class="top-value">
                        <?php echo $view_details->extra_minimum_for_subtitles == 0?'N/A': $view_details->
                                extra_minimum_for_subtitles_text ; ?>
                      </div>
                         </div>
                  </div>
                                           
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Information</label>
                   <div class="col-sm-10">
                      <div class="top-value">
                          <?php echo $view_details->extra_information == ''?'Not Provided Yet':$view_details->extra_information; ?>
                      </div>
                      </div>
                </div>
                  
              </div>   
              <!-- /.box-body -->
              <div class="box-footer">
              
                 <div class="container_1">
              <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-10">
                  <button class="pull-left btn btn-info m_left"> <?php echo $this->Html->link('Back',array('action'=>'joblisting')); ?></button>
                           </div>
                              </div>
                                 </div>
                        
                        
              </div>
              <!-- /.box-footer -->
           <?php  echo $this->Form->end();  ?>
        </div>
      <!-- /.row -->
    </section>
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
