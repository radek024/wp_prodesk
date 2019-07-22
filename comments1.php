<?php $comment_args = array(
'fields' => apply_filters( 'comment_form_default_fields', array(
'author' => '<input id="author" class="" name="author" type="text" placeholder="Imię" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
'email'  => '<input id="email" name="email" type="text" placeholder="Email"  value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
'url'    => '' ) ),
'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="8" placeholder="Komentarz" aria-required="true"></textarea>',
'comment_notes_after' => '',

);

comment_form($comment_args); ?>
