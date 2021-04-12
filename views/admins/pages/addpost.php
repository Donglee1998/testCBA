
<table align="center">
<form enctype="multipart/form-data" action="http://localhost/test/index.php?controller=adminpages&action=addPost" method="post">
	<tr>
		<td colspan="2"><h2 style="text-align: center">Add Posts</h2></td>
	</tr>
	<tr>
		<td width="30%">
			<h4>Title</h4>
		</td>
		<td>
			<input type="text" name="title" value="" required>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Content</h4>
		</td>
		<td>
			<textarea name="content" style="width: 600px;height: 100px"  value="" required></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Mode</h4>
		</td>
		<td>
			
				<input checked="checked" type="radio" id="" name="mode" value="public">
				<label for="public">Public</label><br>
				<input type="radio" id="" name="mode" value="private">
				<label for="private">Private</label>
			
				
			
		</td>
	</tr>
	<tr>
		<td>
			<h4>Image</h4>
		</td>
		<td>
			<input type="file" name="image" >
		</td>
	</tr>
	<tr style="margin-top: 20px">
		<td colspan="2"  align="center"><button type="submit" name="add">Add Post</button></td>
	</tr>
</form>
</table>