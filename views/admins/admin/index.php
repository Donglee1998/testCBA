<?php
        if (isset($note)) {
            echo "<div class='alert alert-danger' style='text-align:center'><h5>";
            echo $note;
            echo "</h5></div>";
        }
        if (isset($notes)) {
            echo "<div class='alert alert-success' style='text-align:center'><h5>";
            echo $notes;
            echo "</h5></div>";
        }
      ?>
<h3 style="text-align: center;">Users List </h3>

<table style="text-align: center;" border="1px">
    <tr>
        <td width="10%">Name</td>
        <td width="40%">Email</td>

        <td width="10%">Image</td>
        <td width="10%"></td>
    </tr>
<?php
foreach ($list as $admin) {
?>
    <tr>
        <td >
            <?php echo $admin->name?>
        </td>
        <td >
            <?php echo $admin->email?>
        </td>
        <td>
            <?php echo $admin->role?>        
        </td>
        <td>
            <div class="alert alert-danger" role="alert">
                     <a href="index.php?controller=adminadmins&action=viewEditAdmin&id=<?php  echo $admin->id  ?> " class="alert-link">Edit</a>
            </div>
            <div class="alert alert-success" role="alert">
                     <a href="index.php?controller=adminadmins&action=deleteAdmin&id=<?php  echo $admin->id  ?> " class="alert-link">Delete</a>
            </div>
        </td>
    </tr>
<?php
}
?>
</table>