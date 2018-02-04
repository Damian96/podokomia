<?php $link = $functions->getLanguageLink(ACTION, LANG); ?>
			<div id="lang-control">
				<?php if (LANG === 'gr'): ?>
				<a title="English (UK)" href="<?php echo BASEURL ?>/en/<?php echo $link ?>"><img alt="image of United Kingdom's flag" class="l-img" src="<?php echo BASEURL ?>/images/uk.png"/></a>
				<?php elseif (LANG === 'en'): ?>
				<a title="Greek" href="<?php echo BASEURL ?>/gr/<?php echo $link ?>"><img alt="image of the Greek flag" class="l-img" src="<?php echo BASEURL ?>/images/gr.jpg"/></a>
				<?php endif ?>
			</div>