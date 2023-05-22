<div>
    @foreach ($arr as $item)
     <h1>{{ $item }} - {{ $loop->index }}</h1>
    @endforeach
 </div>
