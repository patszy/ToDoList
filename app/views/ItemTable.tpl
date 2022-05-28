{foreach $items as $i}
	{strip}
		<div class="todo-item">
			<div class="todo-item-bar">
				<h3 class="todo-item-date">{$i["deadline"]}</h3>
				<a class="todo-item-delete" onclick="confirmLink('{$conf->action_url}itemDelete/{$id_list}/{$i['id_item']}','Delete the item?')" title="Delete item">
					<i class="fas fa-times-circle"></i>
				</a>
			</div>
			<div class="todo-item-header">
				<h3 class="todo-item-title">{$i["title"]}</h3>
				<a class="todo-item-edit" href="{$conf->action_url}itemEdit/{$id_list}/{$i['id_item']}"  title="Edit item">
					<i class="fa-solid fa-pen-to-square"></i>
				</a>
			</div>
			<p class="todo-item-text">{$i["message"]}</br></p>
		</div>
	{/strip}
{/foreach}