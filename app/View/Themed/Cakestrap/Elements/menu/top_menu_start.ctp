<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->Link('LlevaCuba', '/findarticles', array('class' => 'navbar-brand')); ?>
        </div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp; Útiles &nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php  echo $this->Html->link( "Gaceta Oficial #30 de 2014",   array('controller'=>'articles', 'action'=>'download_gazette') );?></li>
                        </ul>
                </li>
            
            
                <!--<li><a href="#">Link</a></li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                        </ul>
                </li>-->
            </ul>
            <div class="user dateTopMenu">
                <?php echo date('d/m/Y'); //('Usuario: '.$this->Session->read('Auth.User.name'));?>
            </div>
        </div>
</nav>