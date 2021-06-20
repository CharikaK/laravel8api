<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products view</h1>
    <a href="{{ route('procuts') }}">Products </a>
   {{--
     if you pass the whole array = return $data;
     Then you have to loop through the array
     Out put is a JSON array
     showName() 

    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach 

    --}}

    {{-- retruning a key value 
        showName()
        <p>{{ $products }}</p>
    --}}
    
  
    
</body>
</html>