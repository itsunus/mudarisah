<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'sidebardifault',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">',
	'after_widget' => '</div>', 
	'before_title' => '<h2 class="inner_newsletter_heading">', 
	'after_title' => '</h2>', 
	));
	register_sidebar(array('name'=>'contact',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">',
	'after_widget' => '</div>', 
	'before_title' => '<h2 class="inner_newsletter_heading">', 
	'after_title' => '</h2>', 
	));

	register_sidebar(array('name'=>'language',
	'before_widget' => '<div id="%1$s" class="side-c %2$s">',
	'after_widget' => '</div>', 
	'before_title' => '<h2 class="inner_newsletter_heading">', 
	'after_title' => '</h2>', 
	));

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}

function limit_words($string, $word_limit) {
 
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
 
	$words = explode(' ', $string);
 
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
 
	return implode(' ', array_slice($words, 0, $word_limit));
 
}








