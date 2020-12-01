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
                        <div class="col-md-6 endpoint-info-container">
                            <h4>Create</h4>
                            <p>
                                <span>POST</span>
                                <span class="endpoint">{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/create</span>
                                <span class="btn-copy">Copy</span>
                            </p>
                            <h6>Responses</h6>
                            {
                                'true'
                            }, {'false'}
                        </div>
                        <div class="col-md-6 endpoint-info-container">
                            <h4>Read</h4>
                            <p>
                                <span>GET</span>
                                <span class="endpoint">{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</span>
                                <span class="btn-copy">Copy</span>
                            </p>
                            <h6>Responses</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 endpoint-info-container">
                            <h4>Update</h4>
                            <p>
                                <span>POST</span>
                                <span class="endpoint">{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</span>
                                <span class="btn-copy">Copy</span>
                            </p>
                            <h6>Responses</h6>
                        </div>
                        <div class="col-md-6 endpoint-info-container">
                            <h4>Delete</h4>
                            <p>
                                <span>DELETE</span>
                                <span class="endpoint">{{config('app.url')}}/api/{{$appId}}/{{$tableName}}/{id}</span>
                                <span class="btn-copy">Copy</span>
                            </p>
                            <h6>Responses</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('js/api.js')}}"></script>
@endsection


