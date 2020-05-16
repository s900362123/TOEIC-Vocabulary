@extends('layouts.master')
@section('title', '每日單字')
@section('content')

      <div class="container">



        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">English</th>
              <th scope="col">
Part of speech</th>
              <th scope="col">Chinese</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($vocabularies as $vocabularies =>$vocabulary )

              <tr>
                <th scope="row">{{$vocabularies+1}}</th>
                <td><a href='https://dictionary.cambridge.org/zht/%E8%A9%9E%E5%85%B8/%E8%8B%B1%E8%AA%9E-%E6%BC%A2%E8%AA%9E-%E7%B9%81%E9%AB%94/{{$vocabulary->en}}' target='_blank'>{{$vocabulary->en}}</a></td>
                <td>{{$vocabulary->pos}}</td>
                <td>{{$vocabulary->zh}}</td>
              </tr>

            @endforeach

          </tbody>
        </table>

      </div>

@endsection
