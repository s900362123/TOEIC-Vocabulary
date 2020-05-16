@extends('layouts.master')
@section('title', '設定單字')
@section('content')

      <div class="container">

        <form method="post" action="{{route('Settings.update')}}">
          @csrf
          {{method_field('PATCH')}}
          
          @foreach ($userinfo as $userinfos )

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="staticEmail" value="{{$userinfos->email}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputState" class="col-sm-2 col-form-label">several</label>
              <select id="inputState" name="inputState" class="form-control col-sm-10">
                <option selected>Choose...</option>
                <option @if($userinfos->several=='5') selected @endif >5</option>
                <option @if($userinfos->several=='10') selected @endif >10</option>
                <option @if($userinfos->several=='15') selected @endif >15</option>
                <option @if($userinfos->several=='20') selected @endif >20</option>
              </select>
            </div>

          @endforeach


          <button type="submit" class="btn btn-success mb-2">Submit</button>

        </form>


      </div>

@endsection
