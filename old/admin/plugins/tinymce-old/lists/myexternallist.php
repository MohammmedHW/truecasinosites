<?php
	include_once(realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/core/config.inc.php');
	include_once(realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))).'/core/checkaccess.php');
	
	
	$listsql = "select * from `links`";
	if(@$usergroup_access_row['linkadmin'] == '1')
	{
		$listsql .= " where `ownerid` = '".$_SESSION['uid']."'";
	}
	$listrs = mysql_query($listsql);
	?>
    [
    <?php
	while($listrow = mysql_fetch_assoc($listrs))
	{
		
		?>
        
			{title: "<?php echo $listrow['name']; ?>", value: "<?php echo '%%link%%/link.php?L='.$listrow['linkid'].'&N=%%NID%%&S=%%SID%%&subid=%%SUBID%%'; ?>"},
		<?php
	}
?>
{title: 'Unsubscribe Link', value: '%%unsubscribelink%%'},
{title: 'Web Version Of Emails', value: '/%%webversion%%'}
]

<!-- http://'.$app_vars['website_url'].' -->
