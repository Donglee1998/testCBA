
<table align="center">
<form enctype="multipart/form-data" action="index.php?controller=adminpages&action=editPost&id=<?php  echo $post->id?> " method="post">
	<tr>
		<td colspan="2"><h2 style="text-align: center">Edit Posts</h2></td>
	</tr>
	<tr>
		<td width="30%">
			<h4>Title</h4>
		</td>
		<td>
			<input type="text" name="title" value="<?php echo $post->title?>" required>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Content</h4>
		</td>
		<td>
			<textarea name="content" style="width: 600px;height: 100px"  value="" required><?php echo $post->content?></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Mode</h4>
		</td>
		<td>
			<?php
				if ($post->mode === 'public') {
			?>
				<input checked="checked" type="radio" id="" name="mode" value="public">
				<label for="public">Public</label><br>
				<input type="radio" id="" name="mode" value="private">
				<label for="private">Private</label>
			<?php
				}else{
			?>
				<input type="radio" id="" name="mode" value="public">
				<label for="public">Public</label><br>
				<input checked="checked" type="radio" id="" name="mode" value="private">
				<label for="private">Private</label>
			<?php
			}
			?>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Image</h4>
		</td>
		<td>
			<img src="./assets/uploads/<?php echo $post->image?>" width='100px'>
			<input type="file" name="image" id="" title = "Change a image">
		</td>
	</tr>
	<tr style="margin-top: 20px">
		<td colspan="2"  align="center"><button type="submit">Change</button></td>
	</tr>
</form>
</table>