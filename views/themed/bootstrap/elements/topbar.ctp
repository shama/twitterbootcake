<div class="topbar">
	<div class="topbar-inner">
		<div class="container-fluid">
			<?php
			$topbar_title = Configure::read('Bootstrap.topbar_title') ? Configure::read('Bootstrap.topbar_title') : 'Bootstrap';
			echo $this->Html->link($topbar_title, '/admin', array('class' => 'brand'));
			?>
			<ul class="nav">
				<?php if (Configure::read('Bootstrap.topbar')): ?>
					<?php foreach (Configure::read('Bootstrap.topbar') as $key => $val): ?>
						<li><?php echo $this->Html->link($val['title'], $val['url']); ?></li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>