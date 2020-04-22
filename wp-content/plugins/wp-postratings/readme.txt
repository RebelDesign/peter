# WP-PostRatings
Tags: ratings, rating, postratings, postrating, vote, digg, ajax, post
Requires at least: 4.9.6
Tested up to: 5.3
Stable tag: 1.87

Adds an AJAX rating system for your WordPress site's content.

## Description

### Usage
1. Open `wp-content/themes/<YOUR THEME NAME>/index.php`
2. You may place it in archive.php, single.php, post.php or page.php also.
3. Find: `<?php while (have_posts()) : the_post(); ?>`
4. Add Anywhere Below It (The Place You Want The Ratings To Show): `<?php if(function_exists('the_ratings')) { the_ratings(); } ?>`

* If you DO NOT want the ratings to appear in every post/page, DO NOT use the code above. Just type in `[ratings]` into the selected post/page content and it will embed ratings into that post/page only.
* If you want to embed other post ratings use `[ratings id="1"]`, where 1 is the ID of the post/page ratings that you want to display.
* If you want to embed other post ratings results, use `[ratings id="1" results="true"]`, where 1 is the ID of the post/page ratings results that you want to display.


### How To Change Schema Type?

~~~
<?php
add_filter( 'wp_postratings_schema_itemtype', 'wp_postratings_schema_itemtype' );
function wp_postratings_schema_itemtype( $itemtype ) {
	return 'itemscope itemtype="http://schema.org/Recipe"';
}
?>
~~~

The default schema type is 'Article', if you want to change it to 'Recipe', you need to make use of the `wp_postratings_schema_itemtype` filter as shown in the sample code above.

### How To Add Your Site Logo For Google Rich Snippets

~~~
<?php
add_filter( 'wp_postratings_site_logo', 'wp_postratings_site_logo' );
function wp_postratings_site_logo( $url ) {
	return 'http://placehold.it/350/150.png';
}
?>
~~~

By default, the plugin will use your site header image URL as your site logo. If you want to change it, you need to make use of the `wp_postratings_site_logo` filter as shown in the sample code above.

### How To Remove Ratings Image alt and title Text?

~~~
<?php
add_filter( 'wp_postratings_ratings_image_alt', 'wp_postratings_ratings_image_alt' );
function wp_postratings_ratings_image_alt( $alt_title_text ) {
	return '';
}
?>
~~~

### How To Display Comment Author Ratings?

~~~
add_filter( 'wp_postratings_display_comment_author_ratings', '__return_true' );
~~~

By default, the comment author ratings are not displayed. If you want to display the ratings, you need to make use of the `wp_postratings_display_comment_author_ratings` filter as shown in the sample code above.

### How To use PNG images instead of GIF images?

~~~
function custom_rating_image_extension() {
    return 'png';
}
add_filter( 'wp_postratings_image_extension', 'custom_rating_image_extension' );
~~~

The default image extension if 'gif', if you want to change it to 'png', you need to make use of the `wp_postratings_image_extension` filter as shown in the sample code above.

### How To change the cookie expiration time?

~~~
function custom_rating_cookie_expiration() {
	return strtotime( 'tomorrow' ) ;
}
add_filter( 'wp_postratings_cookie_expiration', 'custom_rating_cookie_expiration', 10, 0 );
~~~

The default cookie expiration if 'time() + 30000000', if you want to change the lenght of the experation, you need to make use of the `wp_postratings_cookie_expiration` filter as shown in the sample code above.

### How Does WP-PostRatings Load CSS?
* WP-PostRatings will load `postratings-css.css` from your theme's CSS directory if it exists.
* If it doesn't exists, it will just load the default 'postratings-css.css' that comes with WP-PostRatings.
* This will allow you to upgrade WP-PostRatings without worrying about overwriting your ratings styles that you have created.

### How To Use Ratings Stats With Widgets?
1. Go to `WP-Admin -> Appearance -> Widgets`
2. The widget name is Ratings.

### To Display Lowest Rated Post

~~~
<?php if (function_exists('get_lowest_rated')): ?>
	<ul>
		<?php get_lowest_rated(); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_lowest_rated('both', 0, 10)
* The value 'both' will display both the lowest rated posts and pages.
* If you want to display the lowest rated posts only, replace 'both' with 'post'.
* If you want to display the lowest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 lowest rated posts/pages.

### To Display Lowest Rated Post By Tag

~~~
<?php if (function_exists('get_lowest_rated_tag')): ?>
	<ul>
		<?php get_lowest_rated_tag(TAG_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_lowest_rated_tag(TAG_ID, 'both', 0, 10)
* Replace TAG_ID will your tag ID. If you want it to span several categories, replace TAG_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the lowest rated posts and pages.
* If you want to display the lowest rated posts only, replace 'both' with 'post'.
* If you want to display the lowest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 lowest rated posts/pages.

### To Display Lowest Rated Post In A Category

~~~
<?php if (function_exists('get_lowest_rated_category')): ?>
	<ul>
		<?php get_lowest_rated_category(CATEGORY_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_lowest_rated_category(CATEGORY_ID, 'both', 0, 10)
* Replace CATEGORY_ID will your category ID. If you want it to span several categories, replace CATEGORY_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the lowest rated posts and pages.
* If you want to display the lowest rated posts only, replace 'both' with 'post'.
* If you want to display the lowest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 lowest rated posts/pages.

### To Display Highest Rated Post

~~~
<?php if (function_exists('get_highest_rated')): ?>
	<ul>
		<?php get_highest_rated(); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_rated('both', 0, 10)
* The value 'both' will display both the highest rated posts and pages.
* If you want to display the highest rated posts only, replace 'both' with 'post'.
* If you want to display the highest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 highest rated posts/pages.

### To Display Highest Rated Post By Tag

~~~
<?php if (function_exists('get_highest_rated_tag')): ?>
	<ul>
		<?php get_highest_rated_tag(TAG_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_rated_tag(TAG_ID, 'both', 0, 10)
* Replace TAG_ID will your tag ID. If you want it to span several categories, replace TAG_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the highest rated posts and pages.
* If you want to display the highest rated posts only, replace 'both' with 'post'.
* If you want to display the highest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 highest rated posts/pages.

### To Display Highest Rated Post In A Category

~~~
<?php if (function_exists('get_highest_rated_category')): ?>
	<ul>
		<?php get_highest_rated_category(CATEGORY_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_rated_category(CATEGORY_ID, 'both', 0, 10)
* Replace CATEGORY_ID will your category ID. If you want it to span several categories, replace CATEGORY_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the highest rated posts and pages.
* If you want to display the highest rated posts only, replace 'both' with 'post'.
* If you want to display the highest rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 highest rated posts/pages.

### To Display Highest Rated Post Within A Given Period

~~~
<?php if (function_exists('get_highest_rated_range')): ?>
	<ul>
		<?php get_highest_rated_range('1 day'); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_rated_range('1 day', 'both', 10)
* The value '1 day' will be the range that you want. You can use '2 days', '1 month', etc.
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 10 will display only the top 10 most rated posts/pages.

### To Display Most Rated Post

~~~
<?php if (function_exists('get_most_rated')): ?>
	<ul>
		<?php get_most_rated(); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_most_rated('both', 0, 10)
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 most rated posts/pages.

### To Display Most Rated Post In A Category

~~~
<?php if (function_exists('get_most_rated_category')): ?>
	<ul>
		<?php get_most_rated_category(CATEGORY_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_most_rated_category(CATEGORY_ID, 'both', 0, 10)
* Replace CATEGORY_ID will your category ID. If you want it to span several categories, replace CATEGORY_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 most rated posts/pages.

### To Display Most Rated Post Within A Given Period

~~~
<?php if (function_exists('get_most_rated_range')): ?>
	<ul>
		<?php get_most_rated_range('1 day'); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_most_rated_range('1 day', 'both', 10)
* The value '1 day' will be the range that you want. You can use '2 days', '1 month', etc.
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 10 will display only the top 10 most rated posts/pages.

### To Display Highest Score Post

~~~
<?php if (function_exists('get_highest_score')): ?>
	<ul>
		<?php get_highest_score(); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_score('both', 0, 10)
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 most rated posts/pages.

### To Display Highest Score Post In A Category

~~~
<?php if (function_exists('get_highest_score_category')): ?>
	<ul>
		<?php get_highest_score_category(CATEGORY_ID); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_score_category(CATEGORY_ID, 'both', 0, 10)
* Replace CATEGORY_ID will your category ID. If you want it to span several categories, replace CATEGORY_ID with array(1, 2) where 1 and 2 are your categories ID.
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 0 refers to the minimum votes required before the post get shown.
* The value 10 will display only the top 10 most rated posts/pages.


### To Display Highest Score Post Within A Given Period

~~~
<?php if (function_exists('get_highest_score_range')): ?>
	<ul>
		<?php get_highest_score_range('1 day'); ?>
	</ul>
<?php endif; ?>
~~~

* Default: get_highest_score_range('1 day', 'both', 10)
* The value '1 day' will be the range that you want. You can use '2 days', '1 month', etc.
* The value 'both' will display both the most rated posts and pages.
* If you want to display the most rated posts only, replace 'both' with 'post'.
* If you want to display the most rated pages only, replace 'both' with 'page'.
* The value 10 will display only the top 10 most rated posts/pages.

### To Sort Highest/Lowest Rated Posts
* You can use: `<?php query_posts( array( 'meta_key' => 'ratings_average', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) ); ?>`
* Or pass in the variables to the URL: `http://yoursite.com/?r_sortby=highest_rated&amp;r_orderby=desc`
* You can replace desc with asc if you want the lowest rated posts.

### To Sort Most/Least Rated Posts
* You can use: `<?php query_posts( array( 'meta_key' => 'ratings_users', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) ); ?>`
* Or pass in the variables to the URL: `http://yoursite.com/?r_sortby=most_rated&amp;r_orderby=desc`
* You can replace desc with asc if you want the least rated posts.
