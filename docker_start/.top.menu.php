<?
$aMenuLinks = Array(
	Array(
		"Все альбомы", 
		"/album/index.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Добавление альбома", 
		"/album/add_album.php", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	),
	Array(
		"Регистрация", 
		"/auth/registration.php", 
		Array(), 
		Array(), 
		"!\$USER->IsAuthorized()" 
	),
	Array(
		"Профиль", 
		"/auth/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,3,4,5))" 
	),
	Array(
		"Авторизация", 
		"/auth/index.php", 
		Array(), 
		Array(), 
		"!\$USER->IsAuthorized()" 
	)
);
?>