<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "index"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/home.png" alt="" /><span>Home</span></a>
    </div>
    <div class="logo-icon text-center">
        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "index"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/home.png" alt="" /></a>
    </div>

    <!--logo and iconic logo end-->
    <div class="left-side-inner">
        <div class="scrollbar scrollbar1">
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">

                <li class="<?php echo $activeMenu == 'anh' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","anh"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/premier_league_logo.jpg" alt="" class="images_menu"/><span>Anh </span></a></li> 
                <li class="<?php echo $activeMenu == 'cup-c1' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","cup-c1"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/championsleague.jpg" alt="" class="images_menu" /><span>Champions League</span></a></li>
                <li class="<?php echo $activeMenu == 'tay-ban-nha' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","tay-ban-nha"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/la_liga.png" alt="" class="images_menu"/><span>Tây ban nha</span></a></li>              
                <li class="<?php echo $activeMenu == 'italia' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","italia"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/logo_seria.png" alt="" class="images_menu" /><span>Italia</span></a></li>    
                <li class="<?php echo $activeMenu == 'duc' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","duc"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/bundesliga.jpg" alt="" class="images_menu"/><span>Đức</span></a></li>  
                <li class="<?php echo $activeMenu == 'phap' ? 'active' : '';?>"><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single","phap"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/logo/ligue1.png" alt="" class="images_menu"/><span>Pháp</span></a></li> 
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
</div>