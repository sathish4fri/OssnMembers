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
if (!isset($params['title'])) {
    $params['title'] = '';
}
if (!isset($params['contents'])) {
    $params['contents'] = '';
}

$users = new OssnUser;
$users = $users->getSiteUsers();


//var_dump($users);
// 

?>
<div class="frontpage">
<div class="ossn-site-pages-inner">
<div class="front-box widget">
<div class="front-box-title">Active Members</div>

<div class="front-box-child">
<?php foreach($users as $user)
{
$user = ossn_user_by_guid($user->guid);
?>
<a title="<?php echo $user->username;?>" class="front-member-item" href="http://localhost/ossn/u/<?php echo $user->username;?>?ref=ossntb"><img width="60" height="60" alt="Profile picture of Michael" class="avatar user-1-avatar avatar-60 photo" src="<?php echo $user->iconURL()->large;?>"></a>
							<!--<a title="Nicole" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/nicole/"><img width="60" height="60" alt="Profile picture of Nicole" class="avatar user-10-avatar avatar-60 photo" src="http://gravatar.com/avatar/30ba38f6f1d56b3ce603dfa54a08f479?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Jasper" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/jasper/"><img width="60" height="60" alt="Profile picture of Jasper" class="avatar user-3-avatar avatar-60 photo" src="http://gravatar.com/avatar/970aac2915fb62dc997bb2af86395c67?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Dion" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/dion/"><img width="60" height="60" alt="Profile picture of Dion" class="avatar user-7-avatar avatar-60 photo" src="http://gravatar.com/avatar/360e417d08ad02cedb85b02b66720b04?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Catherine" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/catherine/"><img width="60" height="60" alt="Profile picture of Catherine" class="avatar user-4-avatar avatar-60 photo" src="http://gravatar.com/avatar/d4f6c246982da600be0254bc2cfa2f38?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Quintin" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/quintin/"><img width="60" height="60" alt="Profile picture of Quintin" class="avatar user-5-avatar avatar-60 photo" src="http://gravatar.com/avatar/21ac7ba38e035ea554825237830526a1?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Bryan" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/bryan/"><img width="60" height="60" alt="Profile picture of Bryan" class="avatar user-8-avatar avatar-60 photo" src="http://gravatar.com/avatar/055c3b3e4a4df6dc06374cc35df1011a?d=identicon&amp;s=60&amp;r=G"></a>
							<a title="Owen" class="front-member-item" href="http://www.demo1.diaboliquedesign.com/4/members/owen/"><img width="60" height="60" alt="Profile picture of Owen" class="avatar user-6-avatar avatar-60 photo" src="http://gravatar.com/avatar/ac7b02e0059551eba076b8b0b9e1bfb9?d=identicon&amp;s=60&amp;r=G"></a>-->
<?php 
}
?>	
</div>		
</div><!--front-box-child ends-->
</div>
</div>


