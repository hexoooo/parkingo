@extends('layouts/contentNavbarLayout')

@section('title', 'parkingo')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
@endif
<div class="card">
  <h5 class="card-header">الأماكن</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>

          <th>الاسم</th>
            <th>التوفر</th>

        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
          @foreach ($places as $place)
          <tr>
          <td> <strong>{{$place->name}}</strong></td>
          <td>
            @if($place->available==1)
    <div class="col-12">
            <div class="card-body">
              <form action="{{route('parking.update',$place->id)}}" method="post">
                @csrf
                @method('put')
                <button type="submit" class="btn btn-success">متوفر</button>
                </form>
      </div>
      @else
          <div class="col-12">
            <div class="card-body">
              <form action="{{route('parking.update',$place->id)}}" method="post">
                @csrf
                @method('put')
                <button type="submit" class="btn btn-danger">غير متوفر</button>
              </form>
      </div>
      @endif
              </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    </div>
</div>
</div>
<!--/ Responsive Table -->



        @endsection
