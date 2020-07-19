$(document).ready(function () {
    let i = 1;
    $('.create-table-form .btn-add-row').on('click', function () {
        $('.create-table-form .newColumns').append(`<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="column-name-${i}" class="form-control" placeholder="Column Name">
                    </div>
                    <div class="col-md-5">
                        <select class="form-control columnType" name="column-type-${i}">
                            <option value="string">String</option>
                            <option value="integer">Integer</option>
                            <option value="float">Float</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <a href="javascript:void(0)" class="btn btn-success btn-remove-row"> - </a>
                    </div>
                </div>`);
        i+=1;
    });
});
