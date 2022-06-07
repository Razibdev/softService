@extends('admin.layouts.adminMaster')

@push('css')

@endpush

@section('content')
  <section class="content">

    <style>
  tr.nowrap td {
       white-space:nowrap;
   }

   tr.nowrap th {
       white-space:nowrap;
   }
</style>

  	<br>
    <div class="card card-primary">
      <div class="card-header with-border">
          <h3 class="card-title">
             All Works of Subscriber <a class="btn btn-xs w3-round w3-border" href="{{ route('admin.subscribersList', ['subscriber'=>$subscriber->id]) }}">{{$subscriber->subscription_code}}</a>, ({{ $subscriber->name }}), ({{ $subscriber->mobile }})
              
          </h3>
      </div>
      <div class="card-body">

        @include('admin.job.ajax.allWorks')
         
      </div>
    </div>
  </section>
@endsection