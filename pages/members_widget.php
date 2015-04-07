<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */

$users = new OssnUser;
$users = $users->getSiteUsers();


//var_dump($users);
// 
$i = 0;
?>
<div class="frontpage">
<div class="front-box widget">
<div class="front-box-title">All Members</div>

<div class="front-box-child">
<?php foreach($users as $user) {     	
      $user = ossn_user_by_guid($user->guid);
	
?>
<a title="<?php echo $user->username;?>" class="front-member-item" href="<?php echo ossn_site_url(); ?>u/<?php echo $user->username;?>?ref=ossntb"><img width="60" height="60" alt="Profile picture of Michael" class="avatar user-1-avatar avatar-60 photo" src="<?php echo $user->iconURL()->large;?>"></a>
				
<?php 
$i++;
 if($i > 11){
   break;
  }
}
?>	
</div>		
</div><!--front-box-child ends-->
</div>

