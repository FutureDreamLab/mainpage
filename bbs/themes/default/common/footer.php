<footer class="small">
	<div class="container">
		<div class="row">
			<?php if($page_links){?>
			<ul class="list-inline">
			<?php foreach($page_links as $key=>$v){?>
			<?php if($v['go_url']){?>
			<li><a href="<?php echo $v['go_url'];?>" target=_blank><?php echo $v['title'];?></a></li>
			<?php } else{?>
			<li><a href="<?php echo site_url('page/index/'.$v['pid']);?>"><?php echo $v['title'];?></a></li>
			<?php }?>
			 <?php }?>
			</ul>
			<?php }?>
			<p><?php echo $settings['site_name']?>  <?php echo $settings['site_stats']?></p>
<p> <a  target="_blank"></p>
		</div>
	</div>
</footer>
<script src="<?php echo base_url('static/common/js/bootstrap.min.js')?>"></script>