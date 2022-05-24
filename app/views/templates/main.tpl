<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Todo List</title>
	<meta name="author" description="Patryk Szymczyk">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
</head>

<body style="margin: 20px;">

	<main class="todo-container">
		<div class="todo-menu-bar">
			<a href="{$conf->action_root}todoList" class="button button--menu">Lista</a>
			{if count($conf->roles)>0}
				<a href="{$conf->action_root}logout" class="button button--menu">Wyloguj</a>
			{else}	
				<a href="{$conf->action_root}loginShow" class="button button--menu">Zaloguj</a>
			{/if}
			{if !empty($conf->roles['user']) && $conf->roles['user']=='admin'}
				<a href="{$conf->action_root}userList" class="button button--menu">Admin Panel</a>
			{/if}
		</div>

		{block name=top} {/block}

		{block name=messages} {/block}

		{block name=bottom} {/block}

    </main>
</body>

</html>