$(document).ready(function () {
    $.getJSON( "http://127.0.0.1:8000/storage/air.json", function( data ) {
        var rows = '';
        $.each(data, function (key, value) {
            rows = rows + '<tr>';
            rows = rows + '<td>' + value.Content + '</td>';
            rows = rows + '<td>' + value.Area + '</td>';
            rows = rows + '<td>' + value.MajorPollutant + '</td>';
            rows = rows + '<td>' + value.AQI + '</td>';
            rows = rows + '<td>' + value.ForecastDate + '</td>';
            rows = rows + '<td>' + value.MinorPollutant + '</td>';
            rows = rows + '<td>' + value.MinorPollutantAQI + '</td>';
            rows = rows + '<td>' + value.PublishTime + '</td>';
            rows = rows + '<td><button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button></td>';
            rows = rows + '<td><button class="btn btn-danger remove-item">Delete</button></td>';
            rows = rows + '</tr>';
        });
        $("tbody").html(rows);
    });
});