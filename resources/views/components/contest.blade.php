<div>


    <ul>
         @foreach ($contests as $contest)
<li>
  <p> <b> {{ $contest["name"] }}</b></p>
  <p>{{ $contest["url"] }}</p>
  <p>Start: {{ $contest["start_time"]  }}</p>
</li>
    @endforeach
</ul>
    <!-- Well begun is half done. - Aristotle -->
</div>
<style>

</style>
