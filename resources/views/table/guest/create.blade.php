@extends('base.guest')

@section('content')
<section>
<div class="row">
    <div class="col-md-12" id="guest-create-table">
        <h3>Create Table</h3>

        <div class="create-table-form">
            <form class="createTableForm" action="{{route('table.create.post',['id' => $appId])}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control" name="table-name" placeholder="Enter Table name">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="column-name-0" class="form-control" placeholder="Column Name">
                    </div>
                    <div class="col-md-6">
                        <select class="form-control columnType" name="column-type-0">
                            <option value="string">String</option>
                            <option value="integer">Integer</option>
                            <option value="float">Float</option>
                        </select>
                    </div>
{{--                    <div class="col-md-2">--}}
{{--                        <a href="javascript:void(0)" class="btn btn-success btn-remove-row"> - </a>--}}
{{--                    </div>--}}
                </div>
                <div class="newColumns">
                </div>
                <div class="form-group">
                    <a href="javascript:void(0)" class="btn btn-success btn-add-row"> + </a>
                </div>
                <p><input type="submit" class="btn btn-secondary px-4 py-3" value="Next"></p>
            </form>
        </div>
    </div>
</div>
</section>
@endsection

@section('scripts')
    <script src="{{asset('js/appTable.js')}}"></script>
@endsection


