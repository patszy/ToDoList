{extends file="main.tpl"}

{block name=top}

        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    user list
                </h1>
				
				<div class="task-list-bar">	
                	<form class="todo-list-search-form" action="{$conf->action_url}userList">
                    	<input type="search" placeholder="User Login" name="sf_login" value="{$searchForm->login}" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search user">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="tab_people">
				{foreach $users as $u}
				{strip}
					<div class="todo-item">
						<div class="todo-item-bar">
							<h3 class="todo-item-title">
								Login: {$u["login"]}
							</h3>
							<a class="todo-item-delete" href="{$conf->action_url}userDelete/{$u['id_user']}" title="Delete user">
								<i class="fas fa-times-circle"></i>
							</a>
						</div>						
					</div>
				{/strip}
				{/foreach}
            </div>
        </section>

{include file='messages.tpl'}

{/block}
