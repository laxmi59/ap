<?php

/*
LAST UPDATED: 27th March 2011
EDITED BY: MARK FAIL
*/

get_header(); ?>
<link href="<?php bloginfo('template_url'); ?>/PPT/css/cap_style.css" rel="stylesheet" type="text/css" />
<div class="middleSidebar left">
<?php if (function_exists('dimox_breadcrumbs')) {?><div style="padding:5px"><?php dimox_breadcrumbs();?></div><?php }?>
<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();     ?>
<?php //echo example_function_name("_homepage.php"); ?>

<?php /*--------------------------------------------------------------------- */ ?>

    
<?php if(get_option("PPT_slider") =="s2" ){  $GLOBALS['s2'] =1;echo $PPTDesign->SLIDER(2); } ?>
    

<?php 

/*--------------------------------------------------------------------- */ 


/*if(get_option("display_featured_image_enable") =="1"){ print "<a href='".get_option("display_featured_image_link")."'><img src='".get_option("display_featured_image_url")."' width='635' height='150'  /></a>"; } ?>*/
?>
  <!--/* OpenX Javascript Tag v2.8.6-rc2 */-->

<!--/*
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://d1.openx.org/...'
  * to
  *   'https://d1.openx.org/...'
  *
  * This noscript section of this tag only shows image banners. There
  * is no width or height in these banners, so if you want these tags to
  * allocate space for the ad before it shows, you will need to add this
  * information to the <img> tag.
  *
  * If you do not want to deal with the intricities of the noscript
  * section, delete the tag (from <noscript>... to </noscript>). On
  * average, the noscript tag is called from less than 1% of internet
  * users.
  */-->

<?php /*?><script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://d1.openx.org/ajs.php':'http://d1.openx.org/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=251329");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://d1.openx.org/ck.php?n=abea794f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://d1.openx.org/avw.php?zoneid=251329&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=abea794f' border='0' alt='' /></a></noscript>
<?php */?>  
    
    
<?php

/*--------------------------------------------------------------------- */


 if(get_option("display_homecats") =="yes"){ ?>


    <div class="itembox">
    
        <?php /*<h2 id="icon-home-cats"><?php $count_posts = wp_count_posts();  $numcats = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->term_taxonomy WHERE taxonomy='category'"); 
		echo SPEC(str_replace("%a",$count_posts->publish,str_replace("%b",number_format($numcats),$GLOBALS['_LANG']['_homepage_title']))) ?></h2>*/?>
        <h2 id="icon-home-cats">Affiliate Program Directory</h2>
        <form method="get" action="<?php echo $GLOBALS['bloginfo_url']; ?>/" name="searchBox" id="searchBox">
              <table width="100%" border="0" id="SearchForm">
              <tr>
                <td><input type="text" value="Search" name="s" id="s" onfocus="this.value='';" style="width:255px; height:17px; background:#fff"/></td>
                <?php /*<td><select id="catsearch" name="cat"><option value="">&nbsp;</option><?php echo $PPT->CategoryList(0,'toponly'); ?></select></td>*/?>
                <td><div class="searchBtn" onclick="document.searchBox.submit();"> &nbsp;</div> </td>
                <td>&nbsp;&nbsp;<?php if(get_option("display_advanced_search") ==1){ ?><a href="javascript:void(0);" onClick="jQuery('#AdvancedSearchBox').show();"><small><?php echo SPEC($GLOBALS['_LANG']['_head2']) ?></small></a><?php } ?></td>
              </tr>
            </table>
            </form>
        <div>&nbsp;</div>
        
        <div style="clear:both">&nbsp;</div>
        
        <?php echo $ThemeDesign->HomeCategories(); ?>
    
    </div> 


<?php } 



/*--------------------------------------------------------------------- */ ?>
    
<?php  $t=0; while($t < 4){ if(get_option("home_custombox_".$t) == "yes"){ $csize = get_option("home_custombox_".$t."_width"); ?> 



<?php if($csize == "half"){ ?><div class="f_half left"><div <?php if($t > 0){ ?>style="margin-left:10px;" <?php } ?>><?php }else{ ?><div class="full clearfix"><?php } ?>

    <div class="itembox">
    
        <h2 id="icon-home-custombox<?php echo $t; ?>"><?php echo get_option("home_custombox_".$t."_title"); ?></h2>
        
         <div class="itemboxinner nopadding">
         
         <?php 
		 
		 switch(get_option("home_custombox_".$t."_content")){
		 
		 case "html": {
		 
		 	echo "<div class='padding'>".nl2br(stripslashes(get_option("home_custombox_".$t."_html")))."</div>";
		 
		 } break;
		 
		 
		 case "featured1": {

			echo '<ul class="homeFeaturedList">';
		 
				$posts = query_posts('posts_per_page=5&meta_key=featured&meta_value=yes');
				while (have_posts()) : the_post(); 
				  
				 echo '<li>';
				 
				 if(strlen($PPT->Image($post->ID,"url")) > 5){ 
					echo '<a href="'.get_permalink($post->ID).'" title="'.$post->post_title.'"><img src="'.$PPT->Image($post->ID,"url").'&amp;w=80" alt="'.$post->post_title.'" /></a>';
				  } 
				  echo '<h3><a href="'.get_permalink($post->ID).'" title="'.$post->post_title.'>">'.$post->post_title.'</a></h3><p>'.substr($post->post_excerpt,0,170).'..</p></li>';
				 endwhile;
				 
				 wp_reset_query(); 
                
			echo '</ul>';		 
		 
		 } break;

		 case "featured2": {
		 
			 echo '<ul class="homeFeaturedList">';
		 
			 $FeaturedListings  = query_posts('numberposts=5&order=DESC&orderby=ID&showposts=8&post_type=post');
			 foreach ($FeaturedListings as $featured) : 
			  
			 echo '<li>';
			 
			 if(strlen($PPT->Image($featured->ID,"url")) > 5){ 
				echo '<a href="'.get_permalink($featured->ID).'" title="'.$featured->post_title.'"><img src="'.$PPT->Image($featured->ID,"url").'&amp;w=80" alt="'.$post->post_title.'" /></a>';
			  } 
			  echo '<h3><a href="'.get_permalink($featured->ID).'" title="'.$featured->post_title.'>">'.$featured->post_title.'</a></h3><p>'.substr($featured->post_excerpt,0,170).'..</p></li>';
			  endforeach; wp_reset_query(); 
                
           echo '</ul>';		 
		 
		 
		 } break;
		 
		 case "featured3": {
		 
		 echo '<ul class="homeFeaturedList">';
		 
			 $FeaturedListings = explode(",",get_option("home_custombox_".$t."_featured3"));
			 foreach ($FeaturedListings as $id) : 
			 $featured = get_post( $id ); 
			 echo '<li>';
			 
			 if(strlen($PPT->Image($featured->ID,"url")) > 5){ 
				echo '<a href="'.get_permalink($featured->ID).'" title="'.$featured->post_title.'"><img src="'.$PPT->Image($featured->ID,"url").'&amp;w=80" alt="'.$post->post_title.'" /></a>';
			  } 
			  echo '<h3><a href="'.get_permalink($featured->ID).'" title="'.$featured->post_title.'>">'.$featured->post_title.'</a></h3><p>'.substr($featured->post_excerpt,0,170).'..</p></li>';
			  endforeach; wp_reset_query(); 
                
           echo '</ul>';
		 
		 
		 } break;	
		 

		 case "3across": {
		 
		 
		 
		 } break;

		 
		 case "articles": {

			echo '<ul class="homeFeaturedList">';
		 
				$posts = query_posts('posts_per_page=5&post_type=article_type');
				while (have_posts()) : the_post(); 
				  
				 echo '<li>';
				 
				 if(strlen($PPT->Image($post->ID,"url")) > 5){ 
					echo '<a href="'.get_permalink($post->ID).'" title="'.$post->post_title.'"><img src="'.$PPT->Image($post->ID,"url").'&amp;w=80" alt="'.$post->post_title.'" /></a>';
				  } 
				  echo '<h3><a href="'.get_permalink($post->ID).'" title="'.$post->post_title.'>">'.$post->post_title.'</a></h3><p>'.strip_tags(get_post_meta($post->ID, "short_desc", true)).'</p></li>';
				 endwhile;
				 
				 wp_reset_query(); 
                
			echo '</ul>';		 
		 
		 } break;		 
		 	 		 
		 
		  } ?>
 
         
         </div>
    
    <?php if($csize == "half"){ ?></div><?php } ?> 
    
</div> </div>    

<?php } $t++; } ?> 
    
<div class="clearfix"></div>
    
    
    
    
    



	 
    
    

<?php /*--------------------------------------------------------------------- */ ?>

<?php if(get_option("display_homerecently") =="yes"){ ?> 

<div class="itembox">
     
        <h2 id="icon-home-bottom"><?php echo $GLOBALS['_LANG']['_homepage_ral']; ?></h2>
        
        
        <div class="itemboxinner nopadding">	
        
        <ul id="homeFeaturedBottom">					
    
			<?php $postslist = query_posts('numberposts=20&order=DESC&orderby=modified&showposts=8&post_type=post'); ?>
            <?php foreach ($postslist as $loopID => $p) :  ?>
            
            <li>
            
                <a href="<?php echo get_permalink($p->ID)?>" title="<?php echo $p->post_title?>"><img src="<?php echo $PPT->Image($p->ID,"url","&amp;w=80"); ?>" alt="<?php echo $p->post_title?>" /></a>
                <h3><a href="<?php echo get_permalink($p->ID)?>" title="<?php echo $p->post_title?>"><?php echo $p->post_title?></a></h3>
                
                <p><?php echo $p->post_excerpt ?></p>
            
            </li>
        
            <?php  endforeach; wp_reset_query(); ?>
    
    	</ul>
        
        </div>
        
    </div>  
    
<?php } ?>    
    
 
 
 </div> 
 
<?php get_footer(); ?> 