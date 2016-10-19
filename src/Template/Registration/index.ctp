 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jQuery 2.2.3 -->
  <?php echo $this->Html->script('ajaxformdata.js');?>
  <script>
$(document).ready(function(){
    $(".navbar-toggle").click(function(){
        $(".collapse").toggle();
    });
	
	$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs'] // xs, sm, md, lg 
});

	
});
</script>
   <style>body{background:#fff;}</style>
    <!-- home edit video Section -->
    <section id="edit_video">
       <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
         <?php echo $this->Html->media(['KwikshootIntros.mp4', ['src' => 'KwikshootIntros.ogg','type' => "video/ogg; codecs='theora, vorbis'"]], array('controls' => 'controls','width'=>'400'))?>           
                </div>
                 <div class="col-md-7 col-sm-7 col-xs-12">
                 <h1>We edit video</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                 <br />
                <!-- <button type="button" class="btn btn-primary">Get Started</button>  -->
                 <?php echo $this->Html->link('Get Started',array('controller' => 'Jobs','action' => 'index'),array('class'=>'btn btn-primary'),array('escape' => false));  ?> 
                 </div>
                
                </div>
                </div>
                </section>
    
   <!-- home edit video Section close-->
 
    <!-- how it work Section -->
    <section id="how_works">
       <div class="container">
            <div class="row">
                 <div class="col-md-5 col-sm-5 col-xs-12">
                 <h1>How it works</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <br />
                 </div>
               <div class="col-md-1 col-sm-1 col-xs-12"></div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
<div class="tab-content">
  <div class="tab-pane active" id="home1">
    <p>
    <?php echo $this->Html->image('../img/how.png',array('alt'=>'','title'=>''));?>
    </p>
  </div>
 
  <div class="tab-pane" id="profile1">
   <p> <?php echo $this->Html->image('../img/how.png',array('alt'=>'','title'=>''));?>
<!--       <img src="img/how.png" alt="We edit video - how to edit">-->
   </p>
  </div>
   <div class="tab-pane" id="profile2">
  <p>
<!--      <img src="img/how.png" alt="We edit video - how to edit">-->
  <?php echo $this->Html->image('../img/how.png',array('alt'=>'','title'=>''));?>
  </p>
  </div>
   <div class="tab-pane" id="profile3">
 <p>
<!--     <img src="img/how.png" alt="We edit video - how to edit">-->
 <?php echo $this->Html->image('../img/how.png',array('alt'=>'','title'=>''));?>
 </p>
  </div>
</div>
  <ul class="nav nav-tabs responsive-tabs">
  <li class="active"><a href="#home1"><!---<img src="img/s1.png" alt="">--> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><br />tell us what you need</a></li>
  <li><a href="#profile1"><!-- <img src="img/s2.png" alt="">--> <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span><br />we start the work</a></li>
   <li><a href="#profile2"><!-- <img src="img/s3.png" alt=""> --><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span><br />you review we update</a></li>
    <li><a href="#profile3"><!-- <img src="img/s4.png" alt=""> --> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><br />when you are happy we send final update</a></li>
</ul>
                 </div>
                </div>
                </div>
                </section>
   <!-- how it work Section close-->

   <!-- editor Section -->
    <section id="our_editors">
       <div class="container">
            <div class="row">
                 <div class="col-md-12">
                 <h1>Our editors are some of the best in the business. Award winning, even.</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
                </div>
                </div>
                </section>
   <!-- editor Section close-->

<!-- instant quote Section -->
    <section id="instant_quote">
       <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <h1>Get an instant quote <?php echo $this->Html->link('Get Started',array('controller' => 'Jobs','action' => 'index'),array('class'=>'btn btn-primary'),array('escape' => false));  ?>  now</h1>
                 <p><b>We will edit your video for $195.</b> You get a 3 minute from 10 minutes of your raw footage.</p>
                 <p><i>(By the way, for most uses, a 3 minute video is already too long. So this is really plenty of time)</i></p>
                 </div>
              </div>
                 <div class="row m_top">
               <div class="col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-md-2 col-sm-2 col-xs-12"><img src="img/color.png" alt="Color Balancing" ><h3><span>Free</span> Color Balancing</h3></div>
                <div class="col-md-2 col-sm-2 col-xs-12"><img src="img/sound.png" alt="Color Balancing" ><h3><span>Free</span> Sound Enhancement</h3></div>
                <div class="col-md-2 col-sm-2 col-xs-12"><img src="img/title.png" alt="Color Balancing" ><h3><span>Free</span> Title Page</h3></div>
                <div class="col-md-2 col-sm-2 col-xs-12"><img src="img/s_title.png" alt="Color Balancing" ><h3><span>Free</span> Speaker Title</h3></div>
                <div class="col-md-2 col-sm-2 col-xs-12"><img src="img/b_title.png" alt="Color Balancing" ><h3><span>Free</span> Closing Page Title</h3></div>
                 <div class="col-md-1 col-sm-1 col-xs-12"></div>
               </div>
              
                </div>
                </section>
    
   <!-- instant quoteSection close-->

<!-- Video Section -->
                <section id="video_placing">
                   <div class="container">
                        <div class="row">
                             <div class="col-md-12">
                             <h1>Sample Videos / How to videos</h1>
                             </div>
                          </div>

                        <div class="row m_top">
            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="delay_video">
                           <div class="video_top"><span class="w_over"></span> 
         <?php echo $this->Html->media(['KwikshootIntros.mp4', ['src' => 'KwikshootIntros.ogg','type' => "video/ogg; codecs='theora, vorbis'"]], array('controls' => 'controls','width'=>'400'))?>           
                           </div>
                                <h3>How to shoot Video well using a Mobile phone or tablet</h3>
                                </div>
            </div>

             <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="delay_video">
                            <div class="video_top"><span class="w_over"></span>
         <?php echo $this->Html->media(['KwikshootIntros.mp4', ['src' => 'KwikshootIntros.ogg','type' => "video/ogg; codecs='theora, vorbis'"]], array('controls' => 'controls','width'=>'400'))?>           
                           </div>
                            <h3>How to shoot Video well using a Mobile phone or tablet</h3>
                            </div>
            </div>


             <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="delay_video">
                           <div class="video_top"><span class="w_over"></span>
         <?php echo $this->Html->media(['KwikshootIntros.mp4', ['src' => 'KwikshootIntros.ogg','type' => "video/ogg; codecs='theora, vorbis'"]], array('controls' => 'controls','width'=>'400'))?>           
                           </div>
                                <h3>How to shoot Video well using a Mobile phone or tablet</h3>
                            </div>
             </div>
            </div>
        </div>
    </section>
   <!-- Video Section close-->
   
<script>

$(document).ready(function(){
  $("#myModal-signup").on('shown.bs.modal', function() {
      
    $("#myModal-pass").hide();
    $("#myModal-pass").removeClass("in");

    $("#myModal").hide();
    $("#myModal").removeClass("in");
    //$( ".modal-backdrop" ).remove();
    //$( "body" ).append( '<div class="modal-backdrop fade in"></div>' );
         
  });
     
});


</script>


</body>
</html>
<style>
      .btn-primary {
   background-color: #dd0c1f;
    border-color: #dd0c1f;
    color: #fff;
    text-transform: uppercase;
}
      </style>