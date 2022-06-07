@extends('user.layouts.userMaster')

@section('content')
    <section class="content">

        <br>
        <div class="row">

            <div class="col-sm-12">

                @include('alerts.alerts')

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                           {{__('deliveryman.delivery_man_list')}}
                        </h3>
                        <div class="card-tools">
                            <a class="btn btn-default text-dark btn-sm" href="{{route('user.createdeliveryman')}}" >
                                <i class="fa fa-plus"></i>{{__('deliveryman.add_new_delivery_man')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">


                            <table class="table table-hover">


                                <thead>
                                    <tr>
                                        <th>{{__('deliveryman.sl')}}</th>
                                        <th>{{__('deliveryman.name')}}</th>
                                        <th>{{__('deliveryman.image')}}</th>
                                        <th>{{__('deliveryman.phone')}}</th>
                                        <th>{{__('deliveryman.nid')}}</th>
                                        <th>{{__('deliveryman.address')}}</th>
                                        <th>{{__('deliveryman.area')}}</th>
                                        <th>{{__('deliveryman.action')}}</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php $i = 1; ?>

                                    <?php $i = ($datas->currentPage() - 1) * $datas->perPage() + 1; ?>

                                    @foreach ($datas as $data)


                                        <tr>

                                            <td>{{ $i }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td><img class="img-fluid" src="{{ route('imagecache', ['template' => 'ppmd', 'filename' => $data->ni()]) }}" alt=""></td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->nid }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->area }}</td>



                                            <td>



                                                <div class="btn-group btn-group-xs">

                                                    <a class="btn btn-info btn-xs"
                                                    href="{{route('user.editdeliveryman',$data->id)}}">Edit</a>
                                                    <a class="btn btn-danger btn-xs"
                                                        href="{{route('user.deletedeliveryman',$data->id)}}">Delete</a>



                                                </div>


                                            </td>

                                        </tr>

                                        <?php $i++; ?>

                                    @endforeach
                                </tbody>

                            </table>

                            {{ $datas->render() }}

                        </div>



                    </div>
                </div>
            </div>
        </div>



        
    </section>
@endsection


@push('js')


    

@endpush
