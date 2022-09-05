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
		"/albums/", 
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
		"/albums/add_album.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	),
	Array(
		"Удаление фотографий", 
		"/albums/delete.php", 
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