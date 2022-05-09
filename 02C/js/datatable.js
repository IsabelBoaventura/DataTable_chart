

$(document).ready(function(){
    fetch_data();


    var sale_chart;
    var start_date2 = '04/05/2022';
    var end_date2 = '08/05/2022';


    //var start_date = '04-05-2022';
    // var end_date = '05-10-2022';

function fetch_data(){
    //alert( 'oi '); 
    // 
    // console.log(       'Today ' +  moment() +' ' + moment().subtract(1, 'days')  );
    var dataTable = $('#order_table').DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax" : {
            url:"action.php",
            type:"POST",
           // 
           data:{action:'fetch'}
            //data:{action:'fetch', start_date:start_date, end_date:end_date}
          
        },
        "drawCallback" : function(settings)
            {
                var sales_date = [];
                var sale = [];

                for(var count = 0; count < settings.aoData.length; count++)
                {
                    sales_date.push(settings.aoData[count]._aData[2]);
                    sale.push(parseFloat(settings.aoData[count]._aData[1]));
                }

                var chart_data = {
                    labels:sales_date,
                    datasets:[
                        {
                            // 
                            label : 'Vendas',
                            backgroundColor : 'rgba(153, 102, 255)',
                            color : '#fff',
                            data:sale
                        }
                    ]   
                };

                var group_chart3 = $('#bar_chart');

                //var sale_chart = new Chart()

                if(sale_chart)
                {
                    sale_chart.destroy();
                }

                sale_chart = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data
                });
            }
    });
    
}

//pesquisa de tempo
$('#daterange_textbox').daterangepicker({ 
    ranges:{
        'Hoje' : [moment(), moment()],
        'Ontem' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'últimos 7 Dias' : [moment().subtract(6, 'days'), moment()],
        'Últimos 30 Dias' : [moment().subtract(29, 'days'), moment()],
        'Este mês' : [moment().startOf('month'), moment().endOf('month')],
        'Mês passado' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
    //
    ,
  // 
   format : 'YYYY-MM-DD'//'DD/MM/YYYY'
}, function(start, end){

   // 
   $('#order_table').DataTable().destroy();

  //
    fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

});






});
