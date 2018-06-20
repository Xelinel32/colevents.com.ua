<?php include("../pages/pages_include/up_style.php") ?>
<?php 
	if($_GET['id'] == $_SESSION['user']['id']){
		echo "<script>location='../pages/404'</script>";
	}
?>
<body>
	<header class="top_header">
		<?php include("../include/header.php") ?>
	</header>
	<div class="myinfobars">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="box_news">
						<div class="newevent">
							<h3>Форма додавання місця проходження вих. роботи</h3>
							<div class="formnewevent">
								<form action="modules/newlocationuserprocess.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								<label>Назва</label><br>
								<input class="form-control" type="text" name="name_loc" required placeholder="Назва місця проходження"><br>
								<label>Адреса</label><br>
								<input class="form-control" type="text" name="adres_loc" required placeholder="Точна адреса"><br>
								<label>Посилання для Google Maps</label><br>
								<input class="form-control" type="url" name="url_loc" required
								placeholder="https://goo.gl/maps/uQzHS2W4cAv"><br>
						<label for="exampleFormControlSelect1">Категорія</label><br>
						<select class="form-control" id="exampleFormControlSelect1" name="cat_loc">
						<?php $query = "SELECT `id`,`category` FROM `category_events`"; 
						$categories =  mysqli_query($conn,$query);
						?>	
						<option></option>
						<?php while($row = mysqli_fetch_assoc($categories)){ ?>
                        <option value="<?php echo $row['category'] ?>"><?php echo $row['category']?></option>
                    	<?php } ?>
                      	</select></br>
								<label for="exampleFormControlFile1">Зображення</label><br>
								<input class="form-control-file" id="exampleFormControlFile1" required type="file" type="file" name="img_loc" multiple accept="image/*,image/jpeg"><br>
								<label for="exampleFormControlTextarea1">Примітка*</label><br>
								<textarea required name="preview_loc" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Короткий опис основної інформації"></textarea><br>
								<label>Повний опис</label><br>
								<textarea required class="form-control" id="exampleFormControlTextarea1" name="full_loc" cols="80" rows="10" placeholder="Повний опис основної інформації та місцезнаходження"></textarea><br>
								<input class="btn btn-light" type="submit" value="Додати" name="btn_new_loc">
								<a href="user?id=<?php echo $_SESSION['user']['id'];?>" class="btn btn-light float-right">Назад</a>
								</div>
								</form>
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
<script>
CKEDITOR.replace('full_loc');
</script>