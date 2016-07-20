<!DOCTYPE html>
<html lang="zh-cn">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php if(is_home()){
		bloginfo('name');echo"-";bloginfo('discription');
		}else if(is_category()){
			single_cat_title();echo"-";bloginfo('name');
		}else if(is_single()||is_page()){
			single_post_title();
		}else if (is_search()){
			echo"搜索结果";echo"-";bloginfo('name');
		}else if (is_404()){
			echo'页面未找到！';
		}else {
			wp_title('',true);
		}?></title>
<!--Stylesheet-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen"/>
<?php wp_head();?>
</head>

<?php flush();?><!--刷新-->

<body>
<div class="container_1">
	<div class="container_2">
		<!--loge-->
		<h1 id="loge" class="grid_1"><a href="<?php echo get_option('home');?>/"><?php bloginfo('name');?></a></h1>
		<!--allmenu-->
		<!--<?php //wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );?>-->
		<!-- 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单-->
		<ul>
		<li<?php if (is_home()) { echo ' class="current-cat"';} ?>><a title="Home" href="/">博客主页</a></li>
		<?php
			$currentcategory = '';
			// 以下这行代码用于在导航栏添加分类列表，
			if  (is_category() || is_single()) {
			    $catsy = get_the_category();
			    $myCat = $catsy[0]->cat_ID;
			    $currentcategory = '&current_category='.$myCat;
			}
			wp_list_categories('depth=1&title_li=&show_count=0&hide_empty=0&child_of=0'.$currentcategory);
			// 以下这行代码用于在导航栏添加页面列表
			wp_list_pages('depth=1&title_li=&sort_column=menu_order');
		?>
		</ul>
	</div>

	



	


	
