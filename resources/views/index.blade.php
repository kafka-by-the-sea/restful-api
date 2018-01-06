@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <form action="#" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">Go!</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <button class="btn btn-info" type="button">新增資料</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Content</th>
                    <th>Area</th>
                    <th>MajorPollutant</th>
                    <th>AQI</th>
                    <th>ForecastDate</th>
                    <th>MinorPollutant</th>
                    <th>MinorPollutantAQI</th>
                    <th>PublishTime</th>
                    <th>編輯</th>
                    <th>刪除</th>
                </thead>
                <tbody>
                </tbody>
            </table> 
        </div>
@endsection
