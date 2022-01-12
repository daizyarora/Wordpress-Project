<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
	<div class="slides"></div>
	<?php /* Full Screen Gallery Markup */ ?>
	<h3 class="title">Gallery Title</h3>
	<a class="prev"><span class="glyphicon glyphicon-menu-left"></span></a> 
	<a class="next"><span class="glyphicon glyphicon-menu-right"></span></a>
	<a class="close">x</a>
</div>
<script>
	document.getElementById( 'links' ).onclick = function ( event ) {
		event = event || window.event
		var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {
				index: link,
				event: event,
				hidePageScrollbars: false,
				continuous: false
			},
			links = this.getElementsByTagName( 'a' )
		blueimp.Gallery( links, options )
		var fullscreenOptions = {
			// Defines if the gallery should open in fullscreen mode:
			// fullScreen: false;
		}
	}
</script>