@extends('base.guest')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/api.css')}}">
@endsection

@section('content')
    <section>
        <div class="row container-fluid api-details">
            <div class="col-md-12">
                <h3>Api Details</h3>
                <div class="api-details-container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Create</h4>
                            <h6>End-Point (get request)</h6>
                            <p>
                                <span>GET</span>
                                {{config('app.url')}}/api/{{$appId}}/{{$tableName}}/create
                                <span>Copy</span>
                            </p>
                            <h6>Responses</h6>
                            {
                                'true'
                            }, {'false'}
                        </div>
                        <div class="col-md-6">
                            <h4>Read</h4>
                            <h6>End-Point (get request)</h6>
                            <p>{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</p>
                            <h6>Responses</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Update</h4>
                            <h6>End-Point (get request)</h6>
                            <p>{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</p>
                            <h6>Responses</h6>
                        </div>
                        <div class="col-md-6">
                            <h4>Delete</h4>
                            <h6>End-Point (get request)</h6>
                            <p>{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</p>
                            <h6>Responses</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection


