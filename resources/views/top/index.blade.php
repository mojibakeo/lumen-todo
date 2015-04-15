<h1>Hi, {{ $user }}</h1>
<form method="POST">
<input type="text" name="name" value="" placeholder="*あしたぼくは爆発する">
<button type="submit">追加</button>

@if ($tasks)
  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task->name }} [<a href="{{ route('delete_task', ['id' => $task->id]) }}">けす</a>]</li>
    @endforeach 
  </ul>
@else
  <p>タスクが追加されていません</p>
@endif

</form>
