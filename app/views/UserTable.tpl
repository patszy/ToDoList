{foreach $users as $u}
	{strip}
		<div class="todo-item">
			<div class="todo-item-bar">
				<h3 class="todo-item-title">
					Login: {$u["login"]}
				</h3>
				<a class="todo-item-delete" onclick="confirmLink('{$conf->action_url}userDelete/{$u['id_user']}','Delete the user with it\'s data?')" title="Delete user">
					<i class="fas fa-times-circle"></i>
				</a>
			</div>						
		</div>
	{/strip}
{/foreach}