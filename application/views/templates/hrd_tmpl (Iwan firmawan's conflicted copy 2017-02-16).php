<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo (isset($title))? $title : 'Internal Apps' ;?></title>
    <?php echo (isset($render_css))? $render_css : '';?>
<style type="text/css">

.o_form_view .o_form_field_image .o_form_image_controls {
    position: absolute;
    top: 0;
    left: auto;
    bottom: auto;
    right: 0;
    width: 100%;
    color: white;
    background-color: #21b799;
    opacity: 0;
    transition: opacity ease 400ms;
}

.classic-tabs.tabs-cyan {
    background-color: transparent;
    /*#00bcd4*/
}
.classic-tabs {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    white-space: nowrap;
    overflow-x: auto;
}
.nav {
    padding-left: 0;
    margin-bottom: 0;
}
.breadcrumb, .carousel-indicators, .dropdown-menu, .media-list, .nav, .picker__list {
    list-style: none;
}

.classic-tabs li a{
    display: block;
    padding: 8px 12px;
    /*font-size: 18px;*/
    color: #293a48;
    text-align: center;
}

.classic-tabs.tabs-cyan li a.active {
    border-color: #293a48;
}
.classic-tabs li a.active {
    border-bottom: 3px solid #ffeb3b;
    /*  color: #fff; 
        #ffeb3b yellow
    */
}

.nav-inline .nav-item, .nav-link {
    display: inline-block;
}


.jvm-arc-header{
    margin:0.2% 10% 0 10%;max-height: 45px;background-color: #eee;
}

@media (max-width:767px) {
     .jvm-arc-header{
        margin:0px;
     }
}

select.form-control:not([size]):not([multiple]) {
    height: calc(1.5rem - 2px);
}
.btn-1{
    background-color:#fff;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    border:1px solid #eee;
    display:inline-block;
    cursor:pointer;
    font-family:Arial;
    font-size:8px;
    padding: 10px;
    text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    margin:0px 5px 0px 5px; 
}
</style>
</head>
<body <?php echo (isset($bg_img))? 'background="'.base_url().'assets/img/'.$bg_img.'"' : '';?>>
<!--Navbar-->
<nav class="navbar navbar-dark fixed-nav-bar bg-primary">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url('hrd');?>"><i class="fa fa-th"></i> </a>
            <?php echo (isset($pg_title))?  '<a class="navbar-brand">'.ucfirst($pg_title).'</a>' : ''; ?>
            <ul class="nav navbar-nav">
                <?php if ($menu_items) : 
                    foreach ($menu_items as $key => $value) {
                        if (is_array($value)) { ?>
                        <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="dropdown-<?php echo $key;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo ucfirst($key);?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-<?php echo $key;?>">
                                <?php  foreach ($value as $k => $val) { ?>
                                    <a class="dropdown-item" href="<?php echo site_url($val);?>"><?php echo ucfirst($k);?></a>
                                <?php } ?>
                            </div>
                        </li>
                        <?php }else{ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url($value);?>"><?php echo ucfirst($key);?></a>
                        </li>
                        <?php }
                    }
                endif;?>

            </ul>

            <ul class="nav navbar-nav float-xs-right">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Inbox">@</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Conversation"><i class="fa fa-comments"></i> </a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo (isset($email))? $email : 'admin-jvm@jagokomputer.com';?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Documentation</a>
                        <a class="dropdown-item">Support</a>
                        <a class="dropdown-item">About</a>
                        <a class="dropdown-item">Shortcut</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Preferences</a>
                        <a class="dropdown-item">My Odoo.com Account</a>
                        <a class="dropdown-item" href="<?php echo site_url('hrd/logout');?>" >Log out</a>
                        
                    </div>
                </li>
            </ul>    
            
            
        </div>

</nav>
<?php 
echo (isset($navbar_top))? $navbar_top : '';?>

<?php echo $this->template->content; ?>	

<?php echo (isset($render_js))? $render_js : '';?>
</body>
</html>

