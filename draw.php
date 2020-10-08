<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Subject', 'Percentage'],
          <?php
     // include("connect.php");
     $con=mysqli_connect("localhost","root","","quizzz") or die("Could not Connect My Sql");
      $stats=mysqli_query($con,"select subject,count(*) as number FROM user_result GROUP BY subject");
while($s=mysqli_fetch_array($stats))
{
  echo "['".$s['subject']."',".$s['number']."],";
}
?>]);

        var options = {
          title: 'Subjects Percentage'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 400px; height: 400px;"></div>
  </body>
</html>