<? foreach($left_nav_menu as $name=>$url):?>
		
		<li class="menu-item">
		<?=$this->Html->link($name, $url) ?>
		
		</li>
<?endforeach?>
