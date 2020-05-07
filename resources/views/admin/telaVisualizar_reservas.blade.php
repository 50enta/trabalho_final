@extends('home')
@section('base')


    <div class="row">

        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Visualizar Pedidos de Reserva </h5>

                </div>
                <div class="card-body">
                    <div class="xp-badge">
                        <div class="row">


                                <div class="col-lg-12 pb-5">

                                    <div class="table-responsive">
                                        <table id="datatable-1" class="table table-datatable table-striped table-hover">
                                            <thead>
{{--                                            @foreach($dados['users'] as $item)--}}
                                            <tr>
                                                <th>Film Title</th>
                                                <th>Released</th>
                                                <th>Studio</th>
                                                <th>Worldwide Gross</th>
                                                <th>Domestic Gross</th>
                                                <th>Foreign Gross</th>
                                                <th>Budget</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Frozen</td>
                                                <td>2013</td>
                                                <td>
                                                    <span class="badge badge-primary">Disney</span>
                                                </td>
                                                <td>$1,232,617,000</td>
                                                <td>$400,617,000</td>
                                                <td>$832,000,000</td>
                                                <td>$150,000,000</td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



{{----}}
                        </div>





@endsection
