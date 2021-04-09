<h3 style="text-align: center;">Posts List </h3>

<table style="text-align: center;" border="1px">
	<tr>
			<td width="10%">Title</td>
		<td width="40%">Content</td>
		<td width="10%">Mode</td>
		<td width="10%">Image</td>
		<td width="10%"></td>
	</tr>
<?php
foreach ($posts as $post) {
?>
	<tr>
		
		<td>
			<?php echo $post->title?>
		</td>
		<td style="text-align: left;">
			<?php echo $post->content?>
		</td>
		<td>
			<?php echo $post->mode?>
		</td>
		<td>
			<img style="width: 100px" src="./assets/uploads/<?php echo $post->image?>">
			
		</td>
		<td>
			<div class="alert alert-info" role="alert">
  					 <a href="index.php?controller=adminpages&action=viewEditPost&id=<?php  echo $post->id  ?> " class="alert-link">Edit</a>
			</div>
			<div class="alert alert-danger" role="alert">
  					 <a href="index.php?controller=adminpages&action=deletePost&id=<?php  echo $post->id  ?> " class="alert-link">Delete</a>
			</div>
			</div>
		</td>
	</tr>
<?php
}
?>
</table>