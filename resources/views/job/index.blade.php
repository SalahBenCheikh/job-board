<div>
   <h1>job bord</h1>

   @foreach ($jobs as $job )
    <div>{{ $job["title"] }}: {{ $job["salary"] }}</div>
   @endforeach
</div>
