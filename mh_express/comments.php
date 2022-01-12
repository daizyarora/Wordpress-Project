<?php
/*
The comments/form layout Nrrrtrttttttt
*/

// Do not delete these lines
if ( !empty( $_SERVER[ 'SCRIPT_FILENAME' ] ) && 'comments.php' == basename( $_SERVER[ 'SCRIPT_FILENAME' ] ) )
  die( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) {
  ?>
<div class="alert alert-info">
  <?php _e("This post is password protected. Enter the password to view comments."); ?>
</div>
<?php
return;
}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<?php if ( ! empty($comments_by_type['comment']) ) : ?>
<h3 id="comments">
  <?php comments_number('<span>' . __("No") . '</span> ' . __("Responses") . '', '<span>' . __("One") . '</span> ' . __("Response") . '', '<span>%</span> ' . __("Responses") );?>
  <?php _e("to"); ?>
  &#8220;
  <?php the_title(); ?>
  &#8221;</h3>
<div class="comments-links comments-links-top">
      <?php previous_comments_link( __("<span class='glyphicon glyphicon-menu-left'></span> <span>Previous</span>") ) ?>
      <?php next_comments_link( __("<span>Next</span> <span class='glyphicon glyphicon-menu-right'></span>") ) ?>
</div>
<ol class="comments-list">
  <?php wp_list_comments(''); ?>
</ol>
<?php endif; ?>
<?php if ( ! empty($comments_by_type['pings']) ) : ?>
<h3 id="pings">Trackbacks/Pingbacks</h3>
<ol class="pinglist">
  <?php wp_list_comments('type=pings&callback=list_pings'); ?>
</ol>
<?php endif; ?>
<div class="comments-links comments-links-bottom">
      <?php previous_comments_link( __("<span class='glyphicon glyphicon-menu-left'></span> <span>Previous</span>") ) ?>
      <?php next_comments_link( __("<span>Next</span> <span class='glyphicon glyphicon-menu-right'></span>") ) ?>
</div>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->

<?php
else : // comments are closed 
  ?>

<!-- If comments are closed. -->
<p class="alert alert-info">
  <?php _e("Comments are closed"); ?>
  .</p>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<?php
comment_form( array(
  'id_form' => 'commentform',
  'class_form' => 'form-horizontal',
  'id_submit' => 'submit',
  'class_submit' => 'btn btn-primary',
  'name_submit' => 'submit',
  'title_reply' => __( 'Leave a Reply' ),
  'title_reply_to' => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit' => __( 'Submit' ),
  'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . ' <span class="required">*</span></label><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>',
  'fields' => apply_filters( 'comment_form_default_fields', array(
    'author' =>
    '<p class="comment-form-author">' .
    '<label for="author">' . __( 'Name' ) . ' </label>' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input class="form-control" id="author" name="author" type="text" value="' . "" .
    '" size="30" required></p>',
    'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ' </label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input class="form-control" id="email" name="email" type="text" value="' . "" .
    '" size="30" required></p>',
    'url' =>
    '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' .
    '<input class="form-control"  id="url" name="url" type="text" value="' . "" .
    '" size="30" /></p>'
  ) )
) );
?>
<?php endif; // do not delete this ?>
