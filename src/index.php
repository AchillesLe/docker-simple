<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
</head>
<body>
  <a href="javascript:void(0)" id="upload">upload</a>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script>
  $(document).ready(function() {
    $('#upload').on('click', function() {
      const url = 'http://localhost:4000/guide_popup.php'
      window.open(url)
    })
  });
</script>