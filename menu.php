<?php
	if(!defined("INDEX")) die("---");
?>	

<?php
	$menu = mysql_query("select * from menu order by urutan");
	while($data=mysql_fetch_array($menu)){
		$submenu = mysql_query("select * from submenu where id_menu='$data[id_menu]'");
		$jmlsub = mysql_num_rows($submenu);	
		if($jmlsub < 1){
?>
			<li><a href="<?php echo $data['link']; ?>"> <?php echo $data['judul']; ?> </a></li>
<?php
		}else{
?>
		<li class="has-dropdown"> 
			<a href="<?php echo $data['link']; ?>" class="has-dropdown" data-toggle="dropdown"> <?php echo $data['judul']; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu">
		<?php
			while($datasub = mysql_fetch_array($submenu)){
		?>			
			<li><a href="<?php echo $datasub['link']; ?>"> <?php echo $datasub['judul']; ?> </a></li>
		<?php
			}
		?>
			</ul>
		</li>
<?php	
		}
	}
?>
</div>
</div>






