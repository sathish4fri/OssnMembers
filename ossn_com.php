<?php
/**
* Open Source Social Network
*
* @package Open Source Social Network
* @author Open Social Website Core Team <info@informatikon.com>
* @copyright 2014 iNFORMATIKON TECHNOLOGIES
* @license General Public Licence http://www.opensource-socialnetwork.org/licence
* @link http://www.opensource-socialnetwork.org/licence
*/
define('__OSSN_Members__', ossn_route()->com . 'OssnMembers/');


function ossn_members(){

/*to register page*/ 
ossn_register_page('members', 'ossn_member_pages');
/*TO reguster css*/
ossn_extend_view('css/ossn.default', 'components/OssnMembers/css/members');

ossn_add_hook('newsfeed', "sidebar:right", 'members_side_bar');
}
/* page function */
function ossn_member_pages($pages) {
$page = $pages[0];
if (empty($page)) {
redirect(REF);
}
switch ($page) {
case 'members':
$params['title'] = ossn_print('site:members');
$title = $params['title'];
$contents = array('content' => ossn_view('components/OssnMembers/pages/members', $params),);
$content = ossn_set_page_layout('contents', $contents);
echo ossn_view_page($title, $content);
break;

default;
ossn_error_page();
break;

}
}
function members_side_bar($hook, $tye, $return){
	$return[] = ossn_view('components/OssnMembers/pages/members_widget');;
	return $return;
}
ossn_register_callback('ossn', 'init', 'ossn_members');
