<?
$aMenuLinks = Array(
	Array(
		"Главная страница", 
		"/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Все альбомы", 
		"/album/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Регистрация", 
		"/auth/registration.php", 
		Array(), 
		Array(), 
		"!\$USER->IsAuthorized();" 
	),
	Array(
		"Авторизация", 
		"/auth/", 
		Array(), 
		Array(), 
		"!\$USER->IsAuthorized();" 
	),
	Array(
		"Добавление альбома", 
		"/album/add_album.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	),
	Array(
		"Удаление фотографий", 
		"/album/delete.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	),
	Array(
		"Профиль", 
		"/auth/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	)
);
?>