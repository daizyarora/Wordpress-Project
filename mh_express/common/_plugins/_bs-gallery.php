<?php
/*
   Notes for use:
   Bootstrap Plugin
   https://github.com/blueimp/Bootstrap-Image-Gallery/
   
   Copy and paste this <div class="bs-gallery">...</div> to the page the gallery is on
   New instructions for gallery modal below
   
*/
?>
<?php
/*
  Notes for use:
  If there is a layer issue (z-index problem)
  
  SOLUTION:
  add a new file to /common/gallery-modal.php
  
  add <?php include $_SERVER[ 'VIRTUALHOST_DOCUMENT_ROOT'] . '/common/gallery-modal.php';?>
  just before the </body> tag to all pages that use the gallery modal.
  
  
  */
?>
<?php /* The Bootstrap Image Gallery lightbox, Add this section just befor the </body> Note: needs to be a child element of the document body */ ?>
<div class="bs-gallery text-center"> 
	<a href="/wp-content/uploads/gallery/enlarge/1.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/1.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/2.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/2.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/3.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/3.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/4.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/4.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/5.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/5.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/6.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/6.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/7.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/7.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/8.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/8.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/9.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/9.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/10.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/10.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/11.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/11.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
	<a href="/wp-content/uploads/gallery/enlarge/12.jpg" title="Photo Description" data-gallery><img src="/wp-content/uploads/gallery/thumbnail/12.jpg" class="img-thumbnail-sm" alt="CAPTION Thumbnail"></a>
</div>
<div id="blueimp-gallery" class="blueimp-gallery">
	<?php /* The container for the modal slides */ ?>
	<div class="slides"></div>
	<?php /* Controls for the borderless lightbox */ ?>
	<h3 class="title">&nbsp;</h3>
	<a class="prev"><i class="fa fa-angle-left"></i></a> <a class="next"><i class="fa fa-angle-right"></i></a> <a class="close"><i class="fa fa-times"></i></a> <a class="play-pause"></a>
	<ol class="indicator">
	</ol>
	<?php /* The modal dialog, which will be used to wrap the lightbox content */ ?>
	<div class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" aria-hidden="true">&times;</button>
					<h4 class="modal-title">&nbsp;</h4>
				</div>
				<div class="modal-body next"></div>
				<div class="modal-footer">
					<button id="prv" type="button" class="btn btn-default pull-left prev"> <i class="glyphicon glyphicon-chevron-left"></i> Previous </button>
					<button id="nxt" type="button" class="btn btn-default next">Next<i class="glyphicon glyphicon-chevron-right"></i> </button>
				</div>
			</div>
		</div>
	</div>
</div>
