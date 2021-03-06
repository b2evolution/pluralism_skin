<?php
/**
 * This is the BODY header include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://b2evolution.net/man/skin-structure}
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage pluralism
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

?>

<div id="header_wrap">
	<div id="header">
	<div class="blog_list">
      <?php
	  // START OF BLOG LIST
	  skin_widget( array(
			'widget' => 'colls_list_public',
			'block_start' => '',
			'block_end' => '',
			'block_display_title' => false,
			'list_start' => '',
			'list_end' => '',
			'item_start' => '',
			'item_end' => '',
			'item_selected_start' => '<span class="selected">',
			'item_selected_end' => '</span>',
		  ) );
	  ?>
    </div>
		<div id="logo">
			<?php

				// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
				// Display container and contents:
				skin_container( NT_('Header'), array(
						// The following params will be used as defaults for widgets included in this container:
						'block_start'       => '',
						'block_end'         => '',
						'block_title_start' => '<h1>',
						'block_title_end'   => '</h1>'
					) );
				// ----------------------------- END OF "Header" CONTAINER -----------------------------

			?>
		</div>
		<?php
			// Display container and contents:
			skin_container( NT_('Page Top'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start'         => '<div id="blogs">',
					'block_end'           => '</div>',
					'block_display_title' => false,
					'list_start'          => '<ul>',
					'list_end'            => '</ul>',
					'item_start'          => '<li class="first page_item">',
					'item_end'            => '</li>',
				) );
		?>
		<div id="menu"><ul>
		<?php
			// ------------------------- "Menu" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			skin_container( NT_('Menu'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start'         => '',
					'block_end'           => '',
					'block_display_title' => false,
					'list_start'          => '',
					'list_end'            => '',
					'item_start'          => '<li>',
					'item_end'            => '</li>',
				) );
			// ----------------------------- END OF "Menu" CONTAINER -----------------------------
		?>
		</ul></div>
	</div>
</div>
<!-- end #header -->

<div id="wrapper0">
<div id="wrapper">
	<div id="wrapper2">
		<hr />
		<div id="page">