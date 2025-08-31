 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Network</title>
    @vite('resources/css/app.css')
 </head>
 <body>
    <header>
        <nav>
            <h1>New Network</h1>
            <a href={{route('networks.index')}}> All Networks</a>
            <a href={{route('networks.create')}} >Create New Networks</a>
        </nav>
     </header>
     <main class="container">
        {{$slot}}
     </main>
 </body>
 </html>