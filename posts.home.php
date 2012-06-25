<?php if(isset($_GET['list'])): $context = 'list'; ?>
	<p><a href="/">Show regular view</a>
<?php else: $context = 'each'; ?>
	<p><a href="/?list=1">Show list view</a>
<?php endif; ?>
<?php foreach($posts as $post) echo $theme->content($post, $context); ?>
<div class="pagenav">
	<?php echo $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;Posts' ) ); ?>
	<?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?>
	<?php echo $theme->next_page_link( _t( 'Older&nbsp;Posts&nbsp;&raquo;' ) ); ?>
</div>
