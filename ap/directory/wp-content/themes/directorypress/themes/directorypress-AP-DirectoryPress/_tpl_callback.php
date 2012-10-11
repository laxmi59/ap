<?php
/*
LAST UPDATED: 27th March 2011
EDITED BY: MARK FAIL
*/

get_header(); ?>


<div class="middleSidebar left">
<?php 
//$ordid="539-1-NEW-1";
$ordid=$_REQUEST['order_id'];
$id=explode("-", $ordid);
//print_r($id);
//echo $permalink = get_permalink( $id[0] );
?>
<?php if($order_status == "thankyou"){ ?> 

<h2 class="h2top"><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback1']) ?></h2>
<h3><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback2']) ?></h3>
<p><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback3']) ?></p>
<p>Please <a href="<?php echo get_permalink( $id[0] );?>">click here</a> to view your listing.</p>


<?php }elseif($order_status =="pending"){ ?> 

<h2 class="h2top"><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback4']) ?></h2>
<h3><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback5']) ?></h3>
<p><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback6']) ?></p>

<?php }elseif($order_status =="error"){ ?> 

<h2 class="h2top"><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback7']) ?></h2>
<h3><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback8']) ?></h3>
<p><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback9']) ?></p>

<?php }else{ ?>

<h2 class="h2top"><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback10']) ?></h2>
<h3><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback11']) ?></h3>
<p><?php echo SPEC($GLOBALS['_LANG']['_tpl_callback12']) ?></p>

<?php } ?>

</div>

<?php get_footer(); ?>