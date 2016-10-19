<?php echo $this->Html->css('bootstrap.css'); ?>
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo BASE_URL ?>">
                    <?php echo $this->Html->image('logo.png');?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                         <?php echo $this->Html->link('How it works',array('controller' => 'Pages','action' => 'howitworks'),array('escape' => false,'class'=>"page-scroll"));  ?>
                       
                    </li>
                    <li>
                         <?php echo $this->Html->link('Sample Video',array('controller' => 'Pages','action' => 'samplevideo'),array('escape' => false,'class'=>"page-scroll"));  ?>
                        
                    </li>
                    <li>
                        <?php echo $this->Html->link('About The Editors',array('controller' => 'Pages','action' => 'abouteditors'),array('escape' => false,'class'=>"page-scroll"));  ?>
                        
                    </li>
                    <li>
                        <?php echo $this->Html->link('Instant Quote',array('controller' => 'Jobs','action' => 'index'),array('escape' => false,'class'=>"page-scroll"));  ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Contact us',array('controller' => 'Pages','action' => 'contactus'),array('escape' => false,'class'=>"page-scroll"));  ?>   
                       
                    </li>
                </ul>
                    <ul class="list-inline admin-sec">
                        <li>
<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>Edit now',array('controller' => 'Jobs','action' => 'index'),array('escape' => false));  ?>   
                           
                            </li>
                            <?php if($this->request->session()->read('ID')){ ?>
                             <li>
                                 <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span>Log Out',array('controller' => 'registration','action' => 'userlogout'),array('escape' => false));  ?>   
                             </li>
                            <li>
                            <?php echo $this->Html->link('|&nbsp;Dashboard',array('controller' => 'Users','action' => 'dashboard'),array('escape' => false));  ?>   
                            </li>
                            <?php }else{ ?>
                         <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Log IN</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal-signup"><span class="glyphicon glyphicon-log-out"></span>SigN up</a></li>
                            <?php }?>
                    </ul>

            </div>
           
            <!-- /.navbar-collapse -->
          
        </div>
       
        <!-- /.container-fluid -->
    </nav>
<script src='https://www.google.com/recaptcha/api.js'></script>