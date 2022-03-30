<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>guide popup</title>
</head>

<body>
  <a href="javascript:void(0)" id="recorder">recorder</a>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script>
  var videoWin = null
  $(document).ready(function() {
    $('#recorder').on('click', function() {
      const url = 'http://localhost:4000/recorded_popup.php'
      videoWin = window.open(url, 'recorder_popup', 'left=100,top=100,width=320,height=320');
    })
  });
  function receivedData(data) {
    alert('nhan du lieu ' + data)
    window.close();
  }
</script>