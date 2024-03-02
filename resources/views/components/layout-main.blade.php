<div>
  <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="../../css/app.css">
  <title>{{$title ?? ''}}</title>
</head>

<body>


  {{$slot}}


  <x-footer />
</body>

</html>