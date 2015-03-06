<?php 
	/*thumbNails*/
	add_theme_support('post-thumbnails');

	/*Створюю меню. Регістрація*/
	if(function_exists('register_nav_menus')){
		register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
			)
		);
	}
	function custom_menu(){
		echo '<ul class="menu">';
		wp_list_pages('title_li=&');
		echo "</ul>";
	}
	/*sidebar*/
	if (function_exists('register_sidebar')){
		register_sidebar(array(
			'name' => 'First sidebar',
			'before_widget' => '<div class="widget">', 
			'before_title' => '<h2>',
			'after_title' => '</h2><div class="text">',
			'after_widget' => '</div></div>'
			));
	}
	if (function_exists('register_sidebar')){
		register_sidebar(array(
			'name' => 'header sidebar',
			'before_widget' => '<div class="header_widget">', 
			'before_title' => '<h2>',
			'after_title' => '</h2><div class="text">',
			'after_widget' => '</div></div>'
			));
	}
	/*filter*/
	add_filter('pre_comment_on_post', 'verify_spam');
	function verify_spam($commentdata){
		$spam_test_field = trim($_POST['comment']);
		if(!empty($spam_test_field)) wp_die('гребані спамери');
		$comment_content = trim($_POST['real-comment']);
		$_POST['comment']=$comment_content;
		return commentdata;
	}
 ?>