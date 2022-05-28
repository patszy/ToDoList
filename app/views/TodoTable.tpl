{foreach $lists as $l}
	{strip}
		<div class="todo-item">
			<div class="todo-item-bar">
				{if !empty($conf->roles['role'])}
					<a class="todo-item-show" href="{$conf->action_url}itemList/{$l['id_list']}" title="Show"><i class="fa-solid fa-eye"></i></a>
				{/if}
				
				<h3 class="todo-item-date">{$l["date"]}</h3>

				{if !empty($conf->roles['role'])}
					<a class="todo-item-delete" onclick="confirmLink('{$conf->action_url}todoDelete/{$l['id_list']}','Delete the list with it\'s data?')" title="Delete">
						<i class="fas fa-times-circle"></i>
					</a>
				{/if}
				
			</div>
			<div class="todo-item-header">
				<h3 class="todo-item-title">{$l["title"]}</h3>
				{if !empty($conf->roles['role'])}
					<a class="todo-item-edit" href="{$conf->action_url}todoEdit/{$l['id_list']}"  title="Edit">
						<i class="fa-solid fa-pen-to-square"></i>
					</a>
				{/if}
			</div>						
		</div>
	{/strip}
{/foreach}