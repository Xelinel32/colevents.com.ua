<?php
// menu active
function activemenu($activemenu)
{
  $menuitem = basename($_SERVER['SCRIPT_NAME']);
  if ($activemenu == $menuitem) { 
    return "style=\"color:#1dd2af;\""; 
  }
}
?>
<!-- topline -->
<div class="header_topline">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="soc_button">
          <a target="_blank" href="http://ktkt.stu.cn.ua/"><i class="fa fa-book" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/artem.sedlyar"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://twitter.com/ArtemSedlar"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a target="_blank" href="https://plus.google.com/u/0/103334064496844281082"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>  
        </div>
        <div class="login_contact">
          <?php if(!isset($_SESSION["user"])){ ?>
            <p>
             <i class="fa fa-user-o" aria-hidden="true"></i>
             <a id="logadm" data-toggle="modal" data-target="#CustomerModal" href="">Авторизація</a>
           </p>
           <p>
             <i class="fa fa-file-o" aria-hidden="true"></i> Немає облікового запису?
             <a data-toggle="modal" data-target="#RegisterModal" href="">Реєстрація</a>
           </p>
         <?php }else{ ?>
          <?php $sql = "SELECT id FROM multi_login LIMIT 1";  
          $rs_result = mysqli_query($conn,$sql); 
          while($result = mysqli_fetch_array($rs_result)){
           ?>
           <p>
            Ласкаво просимо (<?php echo $_SESSION['user']['user_type'];?>) - 
            <i class="fa fa-user-o" aria-hidden="true"></i> 
            <a id="logadm"  href="../user/user?id=<?php echo $_SESSION['user']['id'];?>"><?php echo $_SESSION['user']['username'];?></a>
          </p>
          <p>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <a href="../function/logout.php">Вийти</a>
          </p>
        <?php }} ?>  
        <span>
          <p><i class="fa fa-phone" aria-hidden="true"></i> Передзвоніть мені: +380935039351</p>
        </span>
      </div>
    </div>
  </div>
</div> 
</div>
<!-- menu -->
<div class="header_under">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <a href="#mobile-menu" class="toggle-mnu"><span></span></a>
        <!-- logo -->
        <a href="../index" class="logo_site">COL<span>E</span>VENTS</a>
        <!-- menu -->
        <div class="main_menu">
          <ul class="sf-menu">
            <li><a <?=activemenu("index.php")?> href="../index">Головна</a></li>
            <li><a <?=activemenu("full_calendar.php")?> href="../pages/full_calendar">Календар</a></li>
            <li><a <?=activemenu("events.php")?> href="../pages/events">Заходи</a></li>
            <li><a id="cat_event_menu" <?=activemenu("events.php")?> href="../pages/events">Категорії</a>
              <ul class="submenu">
                <?php $sql_category_events = "SELECT * FROM `category_events` WHERE `id`";  
                $result_category_events = mysqli_query($conn,$sql_category_events); 
                while($result = mysqli_fetch_array($result_category_events)){
                 ?>
                 <li><a <?=activemenu("events.php")?> href="../pages/events?category_events_id=<?php echo $result['id']; ?>"><?php echo $result['category'];?></a></li>
               <?php } ?>
             </ul>
           </li>
           <li><a <?=activemenu("location.php")?> href="../pages/location">Місця</a></li>
           <li><a <?=activemenu("blog.php")?> href="../pages/blog">Блог</a></li>
           <li><a <?=activemenu("moreinfo.php")?> href="../pages/moreinfo">Інше</a></li>
           <li><a id="logmobile" data-toggle="modal" data-target="#SearchModal" href="">Пошук</a></li>
           <?php if(!isset($_SESSION["user"])){ ?>
           <li><a id="logmobile" data-toggle="modal" data-target="#CustomerModal" href="">Вхід</a></li>
           <?php }else{ ?>
            <li><a id="logmobile"  href="../user/user?id=<?php echo $_SESSION['user']['id'];?>">Мій профіль</a></li>
           <?php } ?>
          </ul>
         <div class="search_menu">
          <a data-toggle="modal" data-target="#SearchModal" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>