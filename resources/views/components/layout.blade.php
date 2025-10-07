 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>{{ $title ?? 'Space Tourism' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
</head>

<body style="background-image: url('{{ $bgImage }}')" class="min-h-screen  bg-cover bg-center ">

 
        {{ $slot }}
 
    
</body>
</html>
 
 