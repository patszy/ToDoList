{extends file="main.tpl"}

{block name=top}

        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    user list
                </h1>
				
				<div class="task-list-bar">	
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','{$conf->action_url}userTable','table'); return false;">
                    	<input type="search" placeholder="User Login" name="sf_login" value="{$searchForm->search}" class="todo-list-search">
						<button type="submit" class="button button--search" title="Search user">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="table">
				{include file="UserTable.tpl"}
            </div>
        </section>

{include file='messages.tpl'}

{/block}
