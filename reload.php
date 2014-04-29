


<?php

$variable = <<<XYZ
<script>document.write(currentdate.getSeconds());</script>
<script type="text/javascript"> document.write('<h3 class ="text-center">' + currentdate.getMinutes() + ' Minutes Passed in the Hour</h3>'); </script>
<div class="progress progress-info">
<script type="text/javascript"> document.write('<div class="bar" style="width: ' + minutesdiffperc + '%"></div>'); </script>
</div>
<script type="text/javascript"> document.write('<h3 class ="text-center">' + currentdate.getHours() + ' Hours Passed in the Day</h3>'); </script>
<div class="progress progress-success">
<script type="text/javascript"> document.write('<div class="bar" style="width: ' + hoursdiffperc + '%"></div>'); </script>
</div>
<script type="text/javascript"> document.write('<h3 class ="text-center">' + currentdate.getDate() + ' Days Passed in the Month</h3>'); </script>
<div class="progress progress-warning">
<script type="text/javascript"> document.write('<div class="bar" style="width: ' + daysdiffperc + '%"></div>'); </script>
</div>
<script type="text/javascript"> document.write('<h3 class ="text-center">' + currentdate.getMonth() + ' Months Passed in the Year</h3>'); </script>
<div class="progress progress-danger">
<script type="text/javascript"> document.write('<div class="bar" style="width: ' + monthsdiffperc + '%"></div>'); </script>
XYZ;
echo $variable;


?>