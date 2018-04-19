<?php 
require_once('../connection.php');
include "header.php";
if (isset($_POST['edit'])) {
  $complain = $_POST['complain'];
  $status  = $_POST['status'];
  $result = mysqli_query($bd,"SELECT c_discription from complain WHERE c_id ='".$complain."'");
  $complain_details = mysqli_fetch_array($result);
  $complain_detail = $complain_details['c_discription'];
  $res = mysqli_query($bd,"SELECT description from status WHERE complain_id ='".$complain."' and id='".$status."'");
  $status_details = mysqli_fetch_array($res);
  $status_detail = $status_details['description'];
}

?>
<div class="search">
    <fieldset style="color:white">update  Feedback
      <hr>
      complain : <?php echo $complain_detail;?>
      <form method="post" action="update.php">
        Feedback:
        <textarea placeholder="Add Your Progress status of this case" rows="7" cols="87" name="status_detail"><?php echo $status_detail;?></textarea>
        <input type="hidden"  name="status" value="<?php echo $status; ?>">
        <input type="submit" value="update" name="update">
        <input type="reset" value="Reset">
      </form>
    </fieldset>
</div>
<?php include "footer.php" ?>
