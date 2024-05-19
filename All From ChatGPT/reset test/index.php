<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="its_row">
    <div class="reset_bt">
      <input type="button" value="Reset" id="resetButton">
    </div>
    <div class="reset_datas">
      <input type="checkbox" name="title" id="title1">
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#resetButton").click(function() {
      $("#title1").prop('checked', false); // Uncheck the checkbox
    });
  });
</script>

</body>
</html>