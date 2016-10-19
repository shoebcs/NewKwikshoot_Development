<?php $req_lenth = $this->request->session()->read('Req_Video_Length'); ?>
<?php $raw_lenth = $this->request->session()->read('Raw_Video_Length'); ?>
<?php $Obj_of_video = $this->request->session()->read('Obj_of_video'); ?>
<?php $obj_other = $this->request->session()->read('obj_other'); ?>
<?php $video_start_end_point = $this->request->session()->read('video_start_end_point'); ?>
<?php $extra_minute = $this->request->session()->read('extra_minute'); ?>
<?php $extra_custom_title = $this->request->session()->read('extra_custom_title'); ?>
<?php $extra_overlay = $this->request->session()->read('extra_overlay'); ?>
<?php $extra_keying = $this->request->session()->read('extra_keying'); ?>
<?php $extra_music_overlay = $this->request->session()->read('extra_music_overlay'); ?>
<?php $extra_image_keying = $this->request->session()->read('extra_image_keying'); ?>
<?php $extra_image_overlay = $this->request->session()->read('extra_image_overlay'); ?>
<?php $extra_subtitle = $this->request->session()->read('extra_subtitle'); ?>
<?php $extra_information = $this->request->session()->read('extra_information'); ?>
<section id="job-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Video Edit Brief</h2>
                    <h3 class="section-subheading text-muted">Please complete the brief below so our editors can give you the video you want. You can save this brief and finish it later by logging in here if you are already registered.
</h3>
                </div>
            </div>
            
            
             <?php echo $this->Form->create($job); ?>
             <?php // echo $this->Form->create('Job', array(
//                                           'url' =>  array('controller'=>'jobs','action'=>'index'),
//                                           'role' => 'form',
//                                           'type' => 'post',
//                                           'id' => 'Jobsubmit',
//                                           'onSubmit' => 'return ajaxjobform();' 
//                                           )
//                                   );
               // echo $this->Form->input('userValid',array('type'=>'hidden','id'=>'userValid','value'=>0)); 
                ?>
             <div class="row">
            
                <div class="col-lg-12">
                <h3 class="small-title">What is the objective of your video (How will you use it?)</h3>
                <?php 
                echo $this->Form->radio(
            'objective_of_your_video',
            [
                ['value' => 'Internal web site (Intranet)', 'text' => 'Internal web site (Intranet)', 'style' => 'color:green;'],
                ['value' => 'External web site (Desktop PC)', 'text' => 'External web site (Desktop PC)', 'style' => 'color:red;'],
                ['value' => 'Mobile web (iPhone/Android/Tablet)', 'text' => 'Mobile web (iPhone/Android/Tablet)', 'style' => 'color:blue;'],
                ['value' => 'Social post (Facebook, LinkedIn, Instagram)', 'text' => 'Social post (Facebook, LinkedIn, Instagram)', 'style' => 'color:green;'],
                ['value' => 'Blog', 'text' => 'Blog', 'style' => 'color:green;']
               
            ]
            
                );

                ?>
                

                  <h3 class="small-title">Other</h3>
                  <?php echo $this->Form->textarea('objective_of_your_video_other',array('class'=>'other-input','rows'=>'2','id'=>'objective_of_your_video_other','value'=>$obj_other)); ?>
                   
                 
                </div>
                
                       <div class="col-lg-12">
                <h3 class="small-title">What is the expected length of your video?</h3>
                <table width="100%" class="custom-time">
                <tr><td>
                        <?php echo $this->Form->checkbox('required_video_length',array('id' =>'required_video_length','value'=>$req_lenth)); ?>
                       3 minutes or less</td><td>OR</td><td>
                    <?php 
                    echo $this->Form->input('required_video_length1', array(  'type' => 'number',
                                                        'placeholder' => 'Fill your time in minutes',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'label' => false,
                                                        'div' => false,
                                                        'id' =>'required_video_length1',
                                                        'step' =>'1',
                                                        'min' =>'4',
                                                        'max' =>'15',
                                                        'maxlength'=>2,
                                                        'required'=>true,
                                                        'value'=>$req_lenth
                                                    )
                                    );
                 ?>
                </td></tr>
                </table>
                
                </div>
                
                <div class="col-lg-12">
                <h3 class="small-title">What is the length of the raw files you will upload?</h3>
                <table width="100%" class="custom-time">
                <tr><td>  <?php echo $this->Form->checkbox('raw_video_length',array(  'id' =>'raw_video_length','value'=>$raw_lenth)); ?>10 minutes or less</td><td>OR</td><td>
                        
                        <?php 
                    echo $this->Form->input('raw_video_length1', array(  'type' => 'number',
                                                        'placeholder' => 'Fill your time in minutes',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'label' => false,
                                                        'div' => false,
                                                        'id'=>'raw_video_length1',
                                                        'step' =>'1',
                                                        'min' =>'11',
                                                        'max' =>'30',
                                                        'maxlength'=>2,    
                                                        'maxlength'=>2,
                                                        'required'=>true,
                                                        'value'=>$raw_lenth
                                                    )
                                    );
                 ?>
                        
                        </td></tr>
                </table>
                
                </div>
               
                <div class="col-lg-12">
                <h3 class="small-title">Do you want to provide specific beginning and ending points your files?</h3>
             <?php 
                   echo $this->Form->radio(
                        'video_start_end_points',
                        [
                            ['value' => 'No, leave it up to the editors', 'text' => 'No, leave it up to the editors', 'style' => 'color:red;'],
                            ['value' => 'Yes, here are the beginning and end points to include in the video', 'text' => 'Yes, here are the beginning and end points to include in the video', 'style' => 'color:blue;'],
                            
                        ]
                          
                    );

                 
                 ?>
        <!--    <input type="checkbox" name="" value="">No, leave it up to the editors<br />
                    <input type="checkbox" name="" value="">Yes, here are the beginning and end points to include in the video -->
               <p>(For example, FilenameX.mov, Start 0:32sec-1:15min Stop)</p>
             
                </div>
               
               
                 <div class="col-lg-12">
                <h3 class="small-title">With your video, you get the following for free:</h3>
                
                <?php echo $this->Form->checkbox('free_color_balancing',array('id'=>'free_color_balancing')); ?>Free color balancing<br>
		<?php echo $this->Form->checkbox('free_sound_enhancement',array('id'=>'free_sound_enhancement'));?>Free sound enhancement<br> 
                <?php echo $this->Form->checkbox('free_title_page',array('id'=>'free_title_page')); ?>Free title page (Text)<br> 
                <?php echo $this->Form->checkbox('speaker_title',array('id'=>'speaker_title')); ?>Free speaker title (Lower third text) <br> 
                <?php echo $this->Form->checkbox('closing_page_content',array('id'=>'closing_page_content')); ?>Free closing page (Text or provided logo)<br> 
             
                 
                </div>
                
                   <div class="col-lg-12">
                <h3 class="small-title">With your video, you get the following for free:</h3>
                <p>$25 / minute of edited video over 3 minutes (note: quote based on $195 base video, unless user specifies higher expected length of video)</p>
<?php echo $this->Form->checkbox('extra_minute_of_raw_video_above_10_minutes',array('id'=>'extra_minute_of_raw_video_above_10_minutes')); ?>         $1 / extra minute of raw video above 10 minutes.<br>
<?php echo $this->Form->checkbox('extra_custom_title_page',array('id'=>'extra_custom_title_page')); ?>    $5 / Custom title page (Please upload image) <a href="#">See example</a><br> 
<?php echo $this->Form->checkbox('extra_single_graphic_overlay',array('id'=>'extra_single_graphic_overlay')); ?>   $25 / Single graphic overlay (Please upload image) <a href="#">See example</a><br> 
<?php echo $this->Form->checkbox('extra_green_screen_keying',array('id'=>'extra_green_screen_keying')); ?>    $100 / Green screen keying (Background image/video provided)  <a href="#">See example</a> <br> 
<?php echo $this->Form->checkbox('extra_music_overlay',array('id'=>'extra_music_overlay')); ?>    $75 / Music overlay<br> 
<?php echo $this->Form->checkbox('extra_image_screen_takeover',array('id'=>'extra_image_screen_takeover')); ?>    $10 / Image screen takeover (Please upload image) <a href="#">See example</a><br> 
<?php echo $this->Form->checkbox('extra_image_overlay_on_screen',array('id'=>'extra_image_overlay_on_screen')); ?>    $25 / Image overlay on screen (Please upload image)  <a href="#">See example</a><br> 
<?php echo $this->Form->checkbox('extra_minimum_for_subtitles',array('id'=>'extra_minimum_for_subtitles')); ?>    $20 minimum for Subtitles (per 3 min video), $5/min afterwards <a href="#">(English only at this time)</a><br> 

             
                 
                </div>
                     <div class="col-lg-12">
                 <h3 class="small-title">With your video, you get the following for free:</h3>
                   <?php echo $this->Form->textarea('extra_information',array('class'=>'other-input inputtext','id'=>'extra_information')); ;?>
                 
                   </div>
                   
                        <div class="col-lg-12">
                <p>You will upload files on the payment page after you accept the quote.</p>
                <p>Get quote (Please note, the editor will validate the brief and if the price is higher then what is quoted, you will be contacted with the new price, and be entitled to a full refund if you decide not to go ahead. </p>
                </div>
                
                     <div class="col-lg-12">
                    <?php echo $this->Form->Submit(__('Get Quote'),array('type'=>"submit",'name'=>"submit", 'class'=>"submit-input")); ?>
                
<!--                         <input type="button" name="" value="Get Quote" class="submit-input">-->
                </div>
                
                </div>
            
             <?php echo  $this->Form->end(); ?>
            
            
        </div>
    </section>    




   <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
  <script>
$(document).ready(function(){
    $(".navbar-toggle").click(function(){
        $(".collapse").toggle();
    });

//$("#myModal").show();
	 
});

</script>
<style>
      .btn-primary {
   background-color: #dd0c1f;
    border-color: #dd0c1f;
    color: #fff;
    text-transform: uppercase;
}
      </style>