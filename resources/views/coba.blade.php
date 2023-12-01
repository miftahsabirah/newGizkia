<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <title>AdminKit</title>
 
  <!-- AdminKit CSS file -->
  <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
</head>
<body>
  <h1>Hello, world!</h1>
  <div id="chartjs-bar"></div>
 
  <!-- AdminKit JS file -->

  <script>
    new Chart(document.getElementById("chartjs-bar"), {
  type: "bar",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Last year",
      backgroundColor: window.theme.primary,
      borderColor: window.theme.primary,
      hoverBackgroundColor: window.theme.primary,
      hoverBorderColor: window.theme.primary,
      data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
      barPercentage: .75,
      categoryPercentage: .5
    }, {
      label: "This year",
      backgroundColor: "#dee2e6",
      borderColor: "#dee2e6",
      hoverBackgroundColor: "#dee2e6",
      hoverBorderColor: "#dee2e6",
      data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
      barPercentage: .75,
      categoryPercentage: .5
    }]
  },
  options: {
    scales: {
      yAxes: [{
        gridLines: {
          display: false
        },
        stacked: false
      }],
      xAxes: [{
        stacked: false,
        gridLines: {
          color: "transparent"
        }
      }]
    }
  }
});
  </script>

<script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>

</body>
</html>