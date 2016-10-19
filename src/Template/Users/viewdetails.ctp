<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User | Profile
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Profile</li>
      </ol>
    </section>
    
    <section class="content">
        <div class="row">
      <?php echo $this->Form->create($view_details); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Objective Of your video</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Objective Of your video">-->
                    <?php  echo $this->Form->input('objective_of_your_video', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Objective Of your video',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>  
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Objective Of your video other</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Other Objective Of your video">-->
                      <?php  echo $this->Form->input('objective_of_your_video_other', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Objective Of your video other',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Required video length</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Required video length">-->
                      <?php  echo $this->Form->input('required_video_length', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Required video length',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Raw Video length</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Raw Video length">-->
                      <?php  echo $this->Form->input('raw_video_length', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Raw Video length',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video Start End Points</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Video Start End Points">-->
                      <?php  echo $this->Form->input('video_start_end_points', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Video Start End Points',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Free color balancing</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Free color balancing">-->
                      <?php  echo $this->Form->input('free_color_balancing', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Free color balancing',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Free sound enhancement</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Free sound enhancement">-->
                      <?php  echo $this->Form->input('free_sound_enhancement', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Free sound enhancement',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Free title page</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Free title page">-->
                      <?php  echo $this->Form->input('free_title_page', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Free title page',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Speaker title</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Speaker title">-->
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
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Closing page content</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Closing page content">-->
                      <?php  echo $this->Form->input('closing_page_content', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Closing page content',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minutes of Edited video over 3 minutes</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Extra Minutes of edited video">-->
                      <?php  echo $this->Form->input('extra_minute_of_edited_video_over_3_minutes', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Minutes of Edited video over 3 minutes',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minutes of Raw video above 10 minutes</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Extra Minutes of raw video">-->
                      <?php  echo $this->Form->input('extra_minute_of_raw_video_above_10_minutes', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Minutes of Raw video above 10 minutes',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra custom Title page</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="custom Title">-->
                      <?php  echo $this->Form->input('extra_custom_title_page', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra custom Title page',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra custom Title page file</label>

                  <div class="col-sm-10">
<!--                    <input type="file" class="form-control" id="inputEmail3" placeholder="file">-->
                      <?php  echo $this->Form->input('extra_custom_title_page_file', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra custom Title page file',
                                                    'type'=>'file', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Single graphic overlay</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Graphic overlay">-->
                      <?php  echo $this->Form->input('extra_single_graphic_overlay', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Single graphic overlay',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Single graphic overlay file</label>

                  <div class="col-sm-10">
<!--                    <input type="file" class="form-control" id="inputEmail3" placeholder="file">-->
                      <?php  echo $this->Form->input('extra_single_graphic_overlay_file', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Single graphic overlay file',
                                                    'type'=>'file', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra green screen keying</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="green screen keying">-->
                      <?php  echo $this->Form->input('extra_green_screen_keying', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra green screen keying',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra green screen keying file</label>

                  <div class="col-sm-10">
<!--                    <input type="file" class="form-control" id="inputEmail3" placeholder="file">-->
                      <?php  echo $this->Form->input('extra_green_screen_keying_file', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra green screen keying file',
                                                    'type'=>'file', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Music overlay</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Music overlay">-->
                      <?php  echo $this->Form->input('extra_music_overlay', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Music overlay',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div><div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image screen takeover</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="image screen takeover">-->
                      <?php  echo $this->Form->input('extra_image_screen_takeover', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra image screen takeover',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image screen takeover file</label>

                  <div class="col-sm-10">
<!--                    <input type="file" class="form-control" id="inputEmail3" placeholder="file">-->
                      <?php  echo $this->Form->input('extra_image_screen_takeover_file', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra image screen takeover file',
                                                    'type'=>'file', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image overlay on screen</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="overlay on screen">-->
                      <?php  echo $this->Form->input('extra_image_overlay_on_screen', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra image overlay on screen',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra image overlay on screen file</label>

                  <div class="col-sm-10">
<!--                    <input type="file" class="form-control" id="inputEmail3" placeholder="file">-->
                      <?php  echo $this->Form->input('extra_image_overlay_on_screen_file', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra image overlay on screen file',
                                                    'type'=>'file', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Minimum of Subtitles</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Subtitles">-->
                      <?php  echo $this->Form->input('extra_minimum_for_subtitles', array(
                                                    'class' =>'form-control',
                                                    'placeholder' => 'Extra Minimum of Subtitles',
                                                    'type'=>'text', 
                                                    'label' => false,
                                                    'maxlength'=>50
                                             )
                            );
                    ?>
                  </div>
                </div><div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Extra Information</label>

                  <div class="col-sm-10">
<!--                    <input type="text" class="form-control" id="inputEmail3" placeholder="Extra information">-->
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
                  
                
         <!--       <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>   --->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
<!--                <button type="submit" class="btn btn-info pull-right">Submit</button>-->
                 <?php echo $this->Form->submit('Submit', array(
                                     'class' => 'btn btn-info pull-right',
                                 ));
                        ?>
              </div>
              <!-- /.box-footer -->
            <!--</form>-->
           <?php  echo $this->Form->end();  ?>
        </div>
      <!-- /.row -->
    </section>
    
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


