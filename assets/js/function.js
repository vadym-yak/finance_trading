function getCurrentStockBodyHtml(stock_types, stock_datas) {
    var i_html = '';
    for (var i=0; i<stock_types.length; i++ ) {
        i_html += '<tr>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][1] + '</a></td>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][2] + '</a></td>';
        if (stock_datas[i][4].substring(0, 1) == '+') {
            i_html += '<td style="color: #22caac;"><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][4] + '</a></td>';
        } else {
            i_html += '<td style="color: #fd3d73;"><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][4] + '</a></td>';
        }
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][5] + '</a></td>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][6] + '</a></td>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][7] + '</a></td>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][8] + '</a></td>';
        i_html += '<td><a href="./?model='+stock_datas[i][1]+'">' + stock_datas[i][9] + '</a></td>';
        i_html += '</tr>';
    }
    
    return i_html;
}
$(document).ready(function() {
    
    $(".p-right").click(function(){
        if ($(this).hasClass('active')) {
            $(".p-right").removeClass('active');
        } else {
            $(".p-right").removeClass('active');
            $(this).addClass('active');
        }
    });

    $(".stock-row").click( function(){
        $model = $(this).data('model');
        console.log($model);
        location.href = '/?model='+$model;
    });
})