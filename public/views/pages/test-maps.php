<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script>
    var daddr = window.location.search.slice(1);
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(data){
        if (data.coords) {
          window.location = 'https://maps.google.fr/maps?saddr=' + data.coords.latitude + ',' + data.coords.longitude + '&daddr=' + daddr;
        }
      });
    }
  </script>
</head>
<body>
</body>
</html>