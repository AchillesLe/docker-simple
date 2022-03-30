<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>record</title>
</head>
<body>
  <a href="javascript:void(0)" id="done">done</a>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script>
  $(document).ready(function() {
    $('#done').on('click', function() {
      window.close()
    })

    window.onunload = function(event) {
      var win = window.opener
      if (!win.closed) {
        window.opener.receivedData('kkkkkkkkkkkkkk')
      }
    }
  });
</script>