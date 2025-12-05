@extends('auth.layouts.header')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/index.css') }}" />
@endsection

<style>
  /* th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  } */

  svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>

@section('content')

<div class = "content">

<form action = "/weight_logs" method = "get">
    @csrf

    <div class = "table__heading">
        <table>
            <tr>
                <th>目標体重</th>
                <th>目標まで</th>
                <th>最新体重</th>
            </tr>
            <tr>
                <td>{{$hd->target_weight}} kg</td>
                <td>{{$hd->target_weight - $hd->weight}} kg</td>
                <td>{{$hd->weight}} kg</td>
            </tr>
        </table>
    </div>

    <div class = "table__content">
      <div class = "table__content--buttons">
        
        <div class = "buttons__search">
          <div class="date-container">
            <div class="date-field">
              <label for="start-date">🗓️ </label>
              <input type="date" id="start-date" name="start-date">
            </div>
            <span> ～ </span>
            <div class="date-field">
              <label for="end-date">🗓️ </label>
              <input type="date" id="end-date" name="end-date">
            </div>
          </div>
          <a class = "search-btn" href = "/weight/logs/search">検索</a>
        </div>

        <button class = "add-btn" type = "submit">データ追加</button>
      </div>

      <div class = "table__content--logs">
        <table>
            <tr>
                <th>日付</th>
                <th>体重</th>
                <th>食事摂取カロリー</th>
                <th>運動時間</th>
            </tr>
            @foreach ($logs as $log)
            <tr>
                <td>{{$log->date}}</td>
                <td>{{$log->weight}}</td>
                <td>{{$log->calories}}</td>
                <td>{{$log->exercise_time}}</td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>

</form>

</div>
