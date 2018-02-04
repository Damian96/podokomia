<?php $link = $functions->getLanguageLink(constant('ACTION'), constant('LANG')); ?>
			<div id="lang-control">
				<?php if (constant('LANG') === 'gr'): ?>
				<a title="English (UK)" href="<?php echo constant('BASEURL') ?>/en/<?php echo $link ?>"><img alt="image of United Kingdom's flag" class="l-img" src="<?php echo constant('BASEURL') ?>/images/uk.png"/></a>
				<?php elseif (constant('LANG') === 'en'): ?>
				<a title="Greek" href="<?php echo constant('BASEURL') ?>/gr/<?php echo $link ?>"><img alt="image of the Greek flag" class="l-img" src="<?php echo constant('BASEURL') ?>/images/gr.jpg"/></a>
				<?php endif ?>
			</div>