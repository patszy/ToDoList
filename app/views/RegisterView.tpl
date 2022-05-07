{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}register" method="post" class="todo-form">
	<label class="todo-form-label">
		<input class="todo-form-message" type="text" name="login" title="Login" placeholder="Login"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password" title="Password" placeholder="Password"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password2" title="Repeat password" placeholder="Repeat password"/>
	</label>
	
	<div>
		<button type="submit" class="button todo-form-button" title="Register">Register</button>
		<a class="button todo-form-button" title="Login" href="{$conf->action_root}loginShow">Login</a>
	</div> 
</form>

{include file='messages.tpl'}

{/block}
