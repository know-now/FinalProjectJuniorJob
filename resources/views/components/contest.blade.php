<div>



    <ul>
         @foreach ($contests as $contest)
<li>
  <p> <b> {{ $contest["name"] }}</b></p>
  <a href={{ $contest ["url"] }} target=”_blank”>Register</a>
  <p>Start: {{ date('Y/m/d', (strtotime($contest["start_time"]))) }}</p>

</li>
    @endforeach
</ul>
    <!-- Well begun is half done. - Aristotle -->
</div>
<style>

</style>
