{extends file="main.tpl"}

{block name=top}

        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    Task list
                </h1>
				
				<a class="button button--add" href="{$conf->action_root}todoNew">Add Task</a>
				
				<div class="task-list-bar">	
                	<form class="todo-list-search-form" action="{$conf->action_url}todoList">
                    	<input type="search" placeholder="Task Title" name="sf_title" value="{$searchForm->search}" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="tab_people">
				{foreach $lists as $l}
				{strip}
					<div class="todo-item">
						<div class="todo-item-bar">
							<h3 class="todo-item-date">{$l["date"]}</h3>
							<a class="todo-item-delete" href="{$conf->action_url}todoDelete/{$l['id_list']}" title="Delete">
								<i class="fas fa-times-circle"></i>
							</a>
						</div>
						<div class="todo-item-header">
							<h3 class="todo-item-title">
								{$l["title"]}
							</h3>
							<a class="todo-item-edit" href="{$conf->action_url}todoEdit/{$l['id_list']}"  title="Edit">
								<i class="fa-solid fa-pen-to-square"></i>
							</a>
						</div>						
					</div>
				{/strip}
				{/foreach}
            </div>
        </section>

{include file='messages.tpl'}

{/block}
