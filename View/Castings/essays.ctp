 <style type="text/css" scoped>
   div[id^="attachment_"]{
		max-width: 50%;
		margin: auto;
	}

	/* =WordPress Core
-------------------------------------------------------------- 
.alignnone {
    margin: 5px 20px 20px 0;
}

.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}

.alignright {
    float: right;
    margin: 5px 0 20px 20px;
}

.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}

.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}

a img.alignright {
    float: right;
    margin: 5px 0 20px 20px;
}

a img.alignnone {
    margin: 5px 20px 20px 0;
}

a img.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}

a img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.wp-caption {
    background: #fff;
    border: 1px solid #f0f0f0;
    max-width: 96%; /* Image does not overflow the content area */
    padding: 5px 3px 10px;
    text-align: center;
}

.wp-caption.alignnone {
    margin: 5px 20px 20px 0;
}
/*
sj - modified these from WordPress CSS to always center
*/
.wp-caption.alignleft {
    margin: 0 auto;
}

.wp-caption.alignright {
    margin: 0 auto;
}

/* sj modified this for images to be responsive */
.wp-caption img {
    border: 0 none;
    height: auto;
    margin: 0;
    padding: 0;
    width: 98.5%;
}

.wp-caption p.wp-caption-text {
	font-style: italic;
	margin-bottom: 1em;
}

	
  </style>
<?$casting_url=$this->Html->link('- View all castings -',array('controller'=>'castings','action'=>'frontview','#'));
	
	$img_file_name='NONE.jpg';
	$file_search=array();
	$file_id=$casting['Artwork']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/artworks/'.$file_id.'_1200_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$casting['Artwork']['name'],'class'=>'img-responsive'));

	//echo $main_img;

?>
<div class="row">
<div class="col-xs-12">
<?//debug($this->Wordpress->get_WP(2453))?>
<h2><?=$casting['Artwork']['name']?></h2>
<?=$main_img?>
</div>

<div class="col-xs-12">
<p>
<?

//debug($casting);
echo $this->Wordpress->get_WP($casting['Artwork']['essay_id_wp'])['content'];

?>
</p>
</div>
</div><!-- /row -->