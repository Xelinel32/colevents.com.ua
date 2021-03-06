<!-- Modal Register-->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<h3>Реєстрація на сайті</h3><br>
						<form class="FormRegisterModal" method="post" action="../function/register.php">
							<label>Ім'я</label><br>
							<input type="text" name="name_pib" pattern="^[А-Яа-яЁё-Іі-їЇ\s]+$" required placeholder="ваше ім'я"><br>
							<label>Логін</label><br>
							<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="ваш логін"><br>
							<label>Пошта</label><br>
							<input type="email" name="email" required placeholder="example@gmail.com"><br>
							<label>Телефон</label><br>
							<input type="tel" name="tel_number" pattern="[0-9]{12}" required placeholder="99(999)999-99-99"><br>
							<label>Пароль</label><br>
							<input type="password" name="password_1" required placeholder="пароль №1"><br>
							<label>Повторіть пароль</label><br>
							<input type="password" name="password_2" required placeholder="пароль №2"><br>
							<input type="submit" id="reg_submit_reg" name="register_btn" value="Реєстрація">
						</form>
						<span>Зареєстровані? Перейдіть на <a href="../index">Головну</a> та авторизуйтесь.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Customer-->
<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<h3>Авторизація на сайті</h3><br>
						<form class="FormRegisterModal" method="post" action="../function/login.php">
							<label>Логін</label><br>
							<input type="text" name="username" pattern="^[a-zA-Z]+$ [0-9]{,0}" required placeholder="ваш логін"><br>
							<label>Пароль</label><br>
							<input type="password" name="password" required placeholder="ваш пароль"><br>
							<input type="submit" name="login_btn" value="Увійти">
						</form>
						<span>Не зареєстровані? Перейдіть на <a href="../index">Головну</a> та зареєструйтесь.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Search-->
<div class="modal fade" id="SearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<h3>Пошук по сайту</h3><br>
						<form action="../pages/search" class="FormRegisterModal" method="GET">
							<input type="search" name="search" required placeholder="Що бажаєте знайти?">
							<button type="submit">Шукати</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile pass-->
<div class="modal fade" id="EditeProfilePass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModalPass" method="post" action="../user/editprofile.php">
							<label>Ваш перший пароль</label><br>
							<input type="password" name="password_re" required placeholder="введіть ваш пароль"><br>
							<label>Новий пароль</label><br>
							<input type="password" name="password_1" required placeholder="ваш новий пароль"><br>
							<label>Повторіть пароль</label><br>
							<input type="password" name="password_2" required placeholder="повторіть новий пароль"><br>
							<input type="submit" id="reg_submit_reg" name="edit_btn" value="Редагувати">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile-->
<div class="modal fade" id="EditeProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModal" method="post" action="../user/editprofile.php">
							<label>Ім'я</label><br>
							<input type="text" name="name_pib" pattern="^[А-Яа-яЁё-Іі-їЇ\s]+$" required placeholder="ваше ім'я"><br>
							<label>Телефон</label><br>
							<input type="tel" name="tel_number_edit" pattern="[0-9]{12}" required placeholder="99(999)999-99-99"><br>
							<input type="submit" id="reg_submit_reg" name="edit_btn_prof" value="Редагувати">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal edit profile photo-->
<div class="modal fade" id="EditeProfilePhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modalbg">
				<div class="modal-body">
					<div class="RegisterModal">
						<form class="FormEditModal" method="post" action="../user/editprofile" enctype="multipart/form-data">
							<label>Зображення</label><br>
							<input type="file" name="uploadfile" multiple accept="image/*,image/jpeg" required><br>
							<input type="submit" id="reg_submit_reg" value="Змінити">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Send Admin -->
<div class="modal fade" id="SendAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-body">
					<form method="post" action="../user/modules/messageadmin.php">
						<label for="recipient-name" class="col-form-label">Ім'я:</label>
            			<input type="text" value="<?php echo $_SESSION['user']['username'] ?>" name="send_name" class="form-control" id="recipient-name" required>
						<label for="message-text" class="col-form-label">Повідомлення:</label>
           				<textarea class="form-control" style="height: 100px;resize:none" name="send_text" id="message-text" required ></textarea><br>
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Закрити</button>
						<input type="submit" name="send_btn_message" class="btn btn-primary btn-sm float-right" value="Відправити"><br><br>
					</form>
				</div>
		</div>
	</div>
</div>
<!-- calendar modal -->
<div id="calendarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header margin-auto">
				<h4 id="modalTitle" class="modal-title"></h4>
			</div>
			<div class="modal-body">
			<p id="modalBody"></p>
			<b>Початок</b> - <span id="startTime"></span> | 
			<b>Кінець</b> - <span id="endTime"></span>
			</div>
			<div class="modal-footer">
			<?php if($_SESSION['user']['user_type'] == "Адміністрація") { ?>
			<a class="btn btn-warning btn-sm" href="../admin/admin">До панелі керування</a>
			<?php } else { ?>
			<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Закрити</button>
			<?php } ?>
			<a class="btn btn-info btn-sm" id="eventUrl" href="">Перейти</a>
			</div>
		</div>
	</div>
</div>