$(document).ready(function(){
    $.ajax({
        url: "chart_data.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            // var prod_id  = [];
            var p_stock  = [];
            var product_name = [];

            for(var i in data){
                product_name.push(data[i].product_desc);
                p_stock.push(data[i].available_stock);
            }
            
            var chartdata = {
                labels: product_name,
                datasets : [
                    {
                        label: 'Available Stocks',
                        backgroundColor: 'rgb(63, 191, 127, 0.7)',
                        borderColor: 'rbga(200, 200, 200, 200, 1)',
                        hoverBackgroundColor: 'rbga(200, 200, 200, 200, 1)',
                        hoverBorderColor: 'rbga(200, 200, 200, 200, 1)',
                        data: p_stock                        
                    }
                ]                
            };

            var ctx = $("#my_canvas");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function(data){
            console.log(data);
        }
    });
});