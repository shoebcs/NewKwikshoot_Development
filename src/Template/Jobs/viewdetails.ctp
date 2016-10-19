<?php //extension_loaded('ffmpeg') or die('could not find');
echo $this->Html->css('bootstrap.css'); ?> 
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
            <?php echo $this->Form->create($view_details, array(
                                           'role' => 'form',
                                           'type' => 'post',
                                           'class' => 'form-horizontal',
                                           'enctype'=>'multipart/form-data'
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
                      <?php  echo $this->Form->input('objective_of_your_video_other', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Objective Of your video other',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>1000
                                             )
                            );
                    ?>
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
                     <?php  echo $this->Form->input('raw_video_length_file', array(
                                                              'class' =>'form-control',
                                                              'type'=>'file', 
                                                              'label' => false
                                                              
                                                             
                                                       )
                                      );
                              ?>
                      <?php if($view_details->raw_video_length != '') { 
                      echo $view_details->raw_video_length_file; } ?>
                     <span>(Please Provide Only mp4 , flv ,mkv and avi type files)</span>
                  </div>
                  
                </div>
                  
                  <!---  start of Free title Page --->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Free Title page</label>
                               <div class="col-sm-10">
                                <?php  echo $this->Form->input('free_title_page', array(
                                                              'class' =>'form-control',
                                                              'placeholder' => 'Free title page',
                                                              'type'=>'text', 
                                                              'label' => false,
                                                              'maxlength'=>255
                                                             
                                                       )
                                      );
                              ?>
                                      </div>
                                  
                       </div>
                  <!---  End  of Free title Page --->
                  
                   <!---  Start  of Speaker title  --->
                  <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Speaker Title</label>
                             <div class="col-sm-10">
                                <?php  echo $this->Form->input('speaker_title', array(
                                                                'class' =>'form-control',
                                                                'placeholder' => 'Speaker title',
                                                                'type'=>'text', 
                                                                'label' => false,
                                                                'maxlength'=>50
                                                                
                                             )
                                         );
                                 ?>
                            </div>
                </div>
            <!---  End  of Speaker title  --->
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Closing Page Content</label>
                             <div class="col-sm-10">
                                <?php  echo $this->Form->input('closing_page_content', array(
                                                                'class' =>'form-control',
                                                                'placeholder' => 'Closing page content',
                                                                'type'=>'text', 
                                                                'label' => false,
                                                                'maxlength'=>50,
                                                                
                                                               
                                                             )
                                                    );
                                 ?>
                            </div>
                </div>
                  
             
             <?php if ($view_details->extra_custom_title_page == 1) { ?>
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra custom Title page file</label>
                  
                        <div class="col-sm-10">
                                         <?php  echo $this->Form->input('extra_custom_title_page_file', array(
                                                                      'class' =>'form-control',
                                                                      'placeholder' => 'Extra custom Title page',
                                                                      'type'=>'file', 
                                                                      'label' => false
                                                               )
                                              );
                                      ?>
                            <?php echo $view_details->extra_custom_title_page_file; ?>
                  <span>(Please Provide Only jpg , jpeg , png and gif  type files)</span>
                        </div>
                  </div>
                    <?php } else {?>
                   <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label">Extra custom Title page file</label>
                     <div class="col-sm-10">
                         <div class="top-value">  <?php echo 'N/A' ; ?></div>
                      </div>
                   </div>
                    <?php } ?>
            
                    <?php  if ($view_details->extra_single_graphic_overlay == 1) { ?> 
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Single graphic overlay File</label>
                  
                  <div class="col-sm-10">
                                        <?php  echo $this->Form->input('extra_single_graphic_overlay_file', array(
                                                                      'class' =>'form-control',
                                                                      'placeholder' => 'Extra Single graphic overlay',
                                                                      'type'=>'file', 
                                                                      'label' => false,
                                                                      'maxlength'=>50
                                                               )
                                              );
                                      ?>
                      <?php echo $view_details->extra_single_graphic_overlay_file; ?>
                  <span>(Please Provide Only jpg , jpeg , png and gif type files)</span>
                    </div>
                  </div>
                    <?php } else {?>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Single graphic overlay File</label>
                    <div class="col-sm-10">
                        <div class="top-value"> <?php echo 'N/A' ;  ?></div>
                    </div>
                 </div>
                   <?php } ?>
                  
                  <?php if ($view_details->extra_green_screen_keying == 1) { ?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra green screen keying File</label>
                 
                  <div class="col-sm-10">
                                        <?php  echo $this->Form->input('extra_green_screen_keying_file', array(
                                                                      'class' =>'form-control',
                                                                      'placeholder' => 'Extra green screen keying',
                                                                      'type'=>'file', 
                                                                      'label' => false,
                                                                      'maxlength'=>50
                                                               )
                                              );
                                      ?>
                       <?php echo $view_details->extra_green_screen_keying_file; ?>
                  <span>(Please Provide Only jpg , jpeg , png and gif type files)</span>
                                    </div>
                  </div>
                                            <?php } else {?>
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra green screen keying File</label>
                                             <div class="col-sm-10">
                                                 <div class="top-value"> <?php echo 'N/A' ;  ?></div>
                                             </div>
                </div>
                   <?php } ?>
            
                 <?php if ($view_details->extra_music_overlay == 1){ ?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Music overlay</label>
                            <div class="col-sm-10">
                                <div class="top-value">    <?php echo 'YES' ; ?></div>
                            </div>
                  </div>
                            <?php } else {?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Music overlay</label>
                             <div class="col-sm-10">
                                 <div class="top-value">   <?php echo 'N/A' ;  ?></div>
                          </div>
                    </div>
                     <?php } ?>
            
                     <?php if ($view_details->extra_image_screen_takeover == 1) { ?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image screen takeover File</label>
                
                  <div class="col-sm-10">
                                            <?php  echo $this->Form->input('extra_image_screen_takeover_file', array(
                                                                          'class' =>'form-control',
                                                                          'type'=>'file', 
                                                                          'label' => false
                                                                   )
                                                  );
                                          ?>
                        <?php echo $view_details->extra_image_screen_takeover_file; ?>
                  <span>(Please Provide Only jpg , jpeg , png and gif type files)</span>
                                        </div>
                  </div>
                                            <?php } else {?>
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image screen takeover</label>
                                             <div class="col-sm-10">
                                                 <div class="top-value">    <?php echo 'N/A' ;  ?></div>
                                             </div>
                </div>
                   <?php } ?>
            
                <?php if ($view_details->extra_image_overlay_on_screen == 1) { ?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image overlay on screen</label>
                  
                  
                                <div class="col-sm-10">
                                                <?php  echo $this->Form->input('extra_image_overlay_on_screen_file', array(
                                                                              'class' =>'form-control',
                                                                              'placeholder' => 'Extra image overlay on screen',
                                                                              'type'=>'file', 
                                                                              'label' => false,
                                                                              'maxlength'=>50
                                                                       )
                                                      );
                                              ?>
                                    <?php echo $view_details->extra_image_overlay_on_screen_file; ?>
                  <span>(Please Provide Only jpg , jpeg , png and gif type files)</span>
                                </div>
                  </div>
                                        <?php } else {?>
                                        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image overlay on screen</label>
                                             <div class="col-sm-10">
                                                 <div class="top-value">  <?php echo 'N/A' ;  ?></div>
                                             </div>
                </div>
                   <?php } ?>
            
             <?php if ($view_details->extra_minimum_for_subtitles == 1) { ?>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minimum of Subtitles</label>
                  <div class="col-sm-10">
                                            <?php  echo $this->Form->input('extra_minimum_for_subtitles_text', array(
                                                                          'class' =>'form-control',
                                                                          'placeholder' => 'Extra Minimum of Subtitles',
                                                                          'type'=>'text', 
                                                                          'label' => false,
                                                                          'maxlength'=>255
                                                                   )
                                                  );
                                          ?>
                         </div>
                  </div>
                                            <?php } else {?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minimum of Subtitles</label>
                                             <div class="col-sm-10">
                                                 <div class="top-value">  <?php echo 'N/A' ;  ?></div>
                                             </div>
                  </div>
                   <?php } ?>
            
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Information</label>
                  <div class="col-sm-10">
                      <?php  echo $this->Form->input('extra_information', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Information',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  
              </div>   
              <!-- /.box-body -->
              <div class="box-footer">
              
                 <div class="container_1">
              <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-10">
                  <button class="pull-left btn btn-info m_left"> <?php echo $this->Html->link('Cancel',array('action'=>'joblisting')); ?></button>
<!--                <button type="submit" class="btn btn-default">Cancel</button>-->
                 <?php echo $this->Form->submit('Submit', array(
                                     'class' => 'btn btn-info pull-left m_left',
                                 ));
                        ?>
                        
                           </div>
                              </div>
                                 </div>
                        
                        
              </div>
              <!-- /.box-footer -->
           <?php  echo $this->Form->end();  ?>
        </div>
        <button onclick="myFunction()" type="button">Get video length</button><br>
                       <?php echo $imageFileName;?>  
      
      <?= $this->Html->media(
     [$view_details->raw_video_length_file, ['src' => 'my_video.ogg', 'type' => "video/ogg; codecs='theora, vorbis'"]]
     , array('id'=>'myVideo')
 ) ?>
 
<script>
var vid = document.getElementById("myVideo");

function myFunction() {
    alert(vid.duration);
}

</script>
      <!-- /.row -->
    </section>
    
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <style>
      .col-sm-10 {
    width: 47.333333%;
}
      </style>
    
    