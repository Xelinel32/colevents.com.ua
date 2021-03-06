<?php
include '../function/configdb.php';
?>
<?php include("../include/up_style.php") ?>
<body>
  <header class="top_header">
   <?php include("../include/header.php") ?>
 </header>
 <div class="main_content_news">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- main -->
        <div class="news_content">
         <div class="box_news">
          <div class="profile_user">
            <?php
            if(isset($_GET['id'])){
              $sql = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `id` = ".$_GET['id']."") or die("Помилка в запиті");
              while($result = mysqli_fetch_array($sql)){
                ?>
                <h2>Профіль користувача  - <span><?php echo $result['username']; ?></span></h2><br>
                <img src="<?php echo $result['image']; ?>" class="img-thumbnail" alt="userlogo">
                <div class="profile_user">
                <ul>
                  <li>E-mail - <span><?php echo $result['email']; ?></span></li>
                  <li>Нікнейм - <span><?php echo $result['username']; ?></span></li>
                  <li>ПІБ - <span><?php echo $result['pib']; ?></span></li>
                  <li>Номер телефону - <span><?php echo $result['phone_number']; ?></span></li>
                  <li>Тип облікового запису - <span style="color:red;"><?php echo $result['user_type']; ?></li>
                </ul>
                </div>
              <?php }} else {
                echo "<script>location='../pages/404'</script>";
              }?>
              <?php if($_SESSION['user']['id'] !== $_GET['id']){ ?>
              <?php } else { ?>
                <div class="panel_user">
                  <h3>Панель керування</h3>
                  <?php if($_SESSION['user']['user_type']=='Адміністрація'){ ?>
                  <div class="operation_profile">
                    <b>Операції з профілем</b><br><br>
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfilePass" href="">Змінити пароль</a> 
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfile" href="">Змінити дані</a> 
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfilePhoto" href="">Змінити зображення</a><br>
                  </div><br>
                    <a class="btn btn-outline-danger btn-sm" href="../admin/admin">Перейти до панелі адміністратора</a> 
                  <?php } else { ?>
                    <div class="operation_profile">
                    <b>Операції з профілем</b><br><br>
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfilePass" href="">Змінити пароль</a> 
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfile" href="">Змінити дані</a> 
                    <a class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditeProfilePhoto" href="">Змінити зображення</a><br>
                    <br><a class="btn btn-outline-primary btn-sm" href="neweventuser"> Організувати вих. роботу</a>
                    <a class="btn btn-outline-primary btn-sm" href="newlocationuser"> Додати місце проходження вих. роботи</a>
                    <a class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#SendAdmin" href=""> Зв'язок з адміністрацією</a>
                  </div><br> 
                   <div class="my_events_user">
                     <b>Мої виховні роботи</b><br>   
                     <?php
                     $results = mysqli_query($conn, "SELECT * FROM `category_events`,`location`, `events` WHERE `events`.id_cat_event = `category_events`.id AND `events`.id_loc_event = `location`.id AND `events`.id_user = ".$_SESSION['user']['id'].""); ?>
                     <div class="table-responsive-md">
                     <br><table style="text-align: center;" class="table table-sm table-bordered">
                      <thead class="thead-light">
                        <tr>
                          <th>Назва</th>
                          <th>Адреса</th>
                          <th>Категорія</th>
                          <th>Статус</th>
                          <th colspan="2">Дія</th>
                        </tr>
                      </thead>
                      <?php while ($row = mysqli_fetch_assoc($results)) { ?>
                        <tr>
                          <td><a href="../pages/big_events?event=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></td>
                          <td><?php echo $row['title_location']; ?></td>
                          <td><?php echo $row['category']; ?></td>
                          <td><?php echo $row['status']; ?></td>
                          <td><a href="editeventuser?user_event_id=<?php echo $row['id']; ?>" class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                          <td><a href="editprofile?del=<?php echo $row['id']; ?>" OnClick="return confirm('Ви хочете видалити цей запис?')" class="btn btn-default btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                  </div>
                <?php } ?> 
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar -->
    <?php include("../include/sidebar.php"); ?>
    <!-- Sidebar -->
  </div>
</div>
</div>
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