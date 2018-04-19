<?php 
require_once('../connection.php');
include "header.php";
if (isset($_POST['save'])) {
  $complain = $_POST['complain'];
  $result = mysqli_query($bd,"SELECT c_discription from complain WHERE c_id ='".$complain."'");
  $complain_details = mysqli_fetch_array($result);
  $complain_detail = $complain_details['c_discription'];
}

?>
<div class="search">
    <fieldset style="color:white">Add Feedback
      <hr>
      complain : <?php echo $complain_detail;?>
      <form method="post" action="add.php">
        Feedback:
        <textarea placeholder="Add Your Progress status of this case" rows="7" cols="87" name="status_detail"></textarea>
        <input type="hidden"  name="complain" value="<?php echo $complain; ?>">
        <input type="submit" value="add" name="add">
        <input type="reset" value="Reset">
      </form>
    </fieldset>
</div>
<?php include "footer.php" ?>
