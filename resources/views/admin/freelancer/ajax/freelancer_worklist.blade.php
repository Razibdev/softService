<section class="content">
    <br>
    <div class="row">
      
        <div class="col-sm-12">
          @include('alerts.alerts')
  
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        All Job List
                    </h3>
                </div>
    
                <div class="card-body">
                    <div class="table-responsive">
          

                        <table class="table table-hover table-sm">
              
              
                            <thead>
                                <tr>
                                <th>SL</th>
                                <th>Freelancer</th>
                                <th>Job Title</th>
                                <th>Description</th>
                                <th>Work Station</th>
                                <th>Earned</th>
                                <th>Comments for works</th>
                                <th>Ratting</th>
                                <th>Status</th>
                                
                                </tr>
                            </thead>
              
                            <tbody> 
                
                                {{-- <?php $i = 1; ?> --}}
                
                                    <?php $l = (($works->currentPage() - 1) * $works->perPage() + 1); ?>


                
                                    @foreach($works as $work)        
                
                
                                    <tr>
                        
                                        <td>{{ $l }}</td>
                                        <td>{{$work->user->name ?? ''}}</td>
                                        
                                        <td>{{$work->title}}</td>
                                        <td>{{$work->description}}</td>
                                        <td>{{$work->workstation ? $work->workstation->title : ''}}</td> 
                                        @if($work->status == 'rejected')
                                        <td>BDT 0.00 </td> 
                                        @elseif($work->status == 'approved')
                                        <td>BDT {{$work->earn->job_work_price}} </td> 
                                        @else 
                                        <td>BDT 0.00 </td>  
                                        @endif
                                        <td>
                                            {{$work->admin_note}}
                                        </td>

                                        <td>
                                            @for ($i = 1; $i <= $work->ratting; $i++)
                                            <i class="fa fa-star w3-text-green" style="font-size: 6px;" aria-hidden="true"></i>
                                            @endfor
                                            <br>
                                            @if ($work->ratting)
                                                
                                            ({{$work->ratting}} out of 5)
                                            @endif
                                        </td>
                                        
                                        @if($work->status == 'pending')    
                                        <td>{{$work->status}}</td> 
                                        @elseif($work->status == 'approved' and $work->bt()->first())
                                        
                                        <td>{{$work->status}}</td> 
                                        @elseif(($work->status == 'approved') and (!$work->bt()->first()))
                                        <td>pending</td>
                                        @else 
                                        <td>{{$work->status}}</td> 
                                        @endif                   
                                    </tr>
                
                                    <?php $l++; ?>
                
                                    @endforeach 
                            </tbody>
              
                        </table>
              
                        {{ $works->render() }}
              
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>