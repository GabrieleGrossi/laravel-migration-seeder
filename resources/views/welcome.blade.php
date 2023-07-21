@extends('layouts.app')
@section('title', 'Welcome')
@section('main-content')
    <h1>
        TrainStation
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap" >
                @foreach ($trains as $train)
                    <div class="card" style="width: calc(100% / 5 - 1rem)">
                        <div class="card-title">
                            <h3>
                                The train: {{$train->train_code}} of  {{$train->agency}} whit {{$train->number_of_carriages}} carriages
                            </h3>
                        </div>
                        <div class="card-text">
                            <h4>
                                From: {{$train->departure_stration}}
                            </h4>
                        </div>
                        <div class="card-text">
                            <h4>
                                To: {{$train->arrival_station}}
                            </h4>
                        </div>
                        <div class="card-text">
                            <h5>
                                Departure Time: {{$train->departure_time}}
                            </h5>
                        </div>
                        <div class="card-text">
                            <h5>
                                Arrive Time: {{$train->arrival_time}}
                            </h5>
                        </div>
                        <div class="card-text">
                            <h5>
                                Is on time : {{$train->on_time}} or {{$train->in_late}}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection