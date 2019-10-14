$(document).ready(function () {
    $('input[type=button]').on('click',function () {
        let name = $('.name').val();
        let count = $('.count').val();
        let price = $('.price').val();
        let cost = $('.cost').val();
        let result =
            '<table>' +
                '<tr>' +
                    '<th>Наименование</th>' +
                    '<th>Количество</th>' +
                    '<th>Цена</th>' +
                    '<th>Стоимость</th>' +
                '</tr>'+
                '<tr>' +
                    '<td>' + name + '</td>' +
                    '<td>' + count + '</td>' +
                    '<td>' + price +'</td>' +
                    '<td>'+ cost+'</td>' +
                    '</tr>' +
            '</table>';
        $('div').html(result);
    });
});