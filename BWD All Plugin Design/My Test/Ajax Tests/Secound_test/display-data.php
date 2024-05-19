<!-- https://codingstatus.com/load-records-on-select-box-using-ajax-php-mysql/ -->
<?php
include("database.php");
?>
<form action="" method="post">
<select id="courseName" onchange="loadData()">
    <option value="">Select Course</option>
    <?php 
    $query ="SELECT id, courseName FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['courseName'];
        $id =$optionData['id'];
    ?>
    <option value="<?php echo $id; ?>" ><?php echo $option; ?> </option>
   <?php

    }}
    ?>
</select>

</form>
<!-----display data-->

   <div id="displayData">
   </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript" src="ajax-script.js"></script>