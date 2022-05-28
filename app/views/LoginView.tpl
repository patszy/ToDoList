{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="todo-form">
	<label class="todo-form-label">
		<input class="todo-form-message" type="text" name="login" title="Login" placeholder="Login"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password" title="Password" placeholder="Password"/>
	</label>
	
	<div class="todo-menu-bar">
		<button type="submit" value="Login" class="button todo-form-button" title="Login">Login</button>
		<a href="{$conf->action_root}registerShow" class="button todo-form-button" title="Register">Register</a>
	</div> 
</form>

{include file='messages.tpl'}

{/block}
