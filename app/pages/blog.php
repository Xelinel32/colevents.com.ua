<?php include("pages_include/up_style.php");?>
<body>
  <header class="top_header">
   <?php include("../include/header.php") ?>
 </header>
 <!-- Content -->
 <div class="main_content_news">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- main -->    
        <?php
        $limit = 2;  
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
        $start_from = ($page-1) * $limit;  
        $sql = "SELECT * FROM `blog` WHERE `id` ORDER BY `date_post` DESC LIMIT $start_from, $limit";  
        $rs_result = mysqli_query ($conn,$sql); 
        while($result = mysqli_fetch_array($rs_result)){
          ?>
          <div class="news_content">
            <div class="box_news">
              <h2 class="post_title"><a href="big_blog?id=<?php echo $result['id'];?>"><?php echo $result['title_post'];?></a></h2>
              <div class="post_meta">
                  <ul>
                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="../user/user.php?id=<?php echo $result['id_user'] ?>"><?php echo $result['user_post'];?></a></li>
                    <li><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Дата додавання статті - <?php echo $result['date_post'];?></li>
                  </ul>
              </div>
              <img class="mini_log" src="<?php echo $result['image_post'];?>" alt="post_image">
              <?php echo $result['small_text_post'];?>
              <div class="read_more"><a href="big_blog?id=<?php echo $result['id'];?>">Дивитись більше</a></div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- Sidebar -->
      <?php include("../include/sidebar.php"); ?>
      <!-- Sidebar -->
    </div>
    <div class="col-md-8">
      <div class="row">
        <?php  
        $sql = "SELECT COUNT(id) FROM `blog` LIMIT 10";  
        $rs_result = mysqli_query($conn,$sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<div class='paginations'>";
        if($page != 1){
          $pagLink .= "<a id='prevnext' href='blog?page=1'>Перша</a>";  
        }  
        for ($i=1; $i<=$total_pages; $i++) {
          if($page == $i) {
            $pagLink .= "<a href='blog?page=".$i."'class = 'active'>".$i."</a>"; 
          }else{
            $pagLink .= "<a href='blog?page=".$i."'class = 'noactive'>".$i."</a>"; 
          }  
        }; 
        if($page != $total_pages){
          $pagLink .= "<a id='prevnext' href='blog?page=".$total_pages."'>Остання</a>";  
       } 
        echo $pagLink . "</div>";  
        ?>
      </div>
    </div> 
  </div>
</div>
<!-- nav --> 
<footer>
	<?php include("../include/footer.php") ?>
</footer>
<div class="up_button">
  <img src="../img/up.png">
</div>		
<?php include("../include/bot_script.php") ?>
</body>
<?php include("../modal_window.php") ?>
</html>