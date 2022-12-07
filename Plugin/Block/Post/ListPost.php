<?php
namespace TFC\Blog\Plugin\Block\Post;
use FishPig\WordPress\Block\Post\ListPost as Sb;
// 2020-05-17
// "Implement a custom design for the `post/list.phtml` template":
// https://github.com/tradefurniturecompany/blog/issues/1
final class ListPost {
	/**
	 * 2020-05-17
	 * @see \FishPig\WordPress\Block\Post\ListPost::getCustomBlogThemeVendor():
	 *		function getCustomBlogThemeVendor() {return false;}
	 * https://github.com/bentideswell/magento2-wordpress-integration/blob/2.0.11.19/Block/Post/ListPost.php#L120-L123
	 */
	function afterGetCustomBlogThemeVendor(Sb $sb, string $r):string {return df_module_name($this);}
}