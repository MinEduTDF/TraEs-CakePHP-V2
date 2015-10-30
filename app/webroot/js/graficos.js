      function graficos(modo,id,json) {
            var jsonData = $.ajax({
				        url : "graficos/"+json,
                dataType: "json",
                async: true
            }).done(function(rta){

              var data = google.visualization.arrayToDataTable(rta.data);
              var options = rta.options;

              var chart;
              switch(modo) { 
                case 'torta':
                  chart = new google.visualization.PieChart(document.getElementById(id));
                break;
                case 'lineal':
                  chart = new google.visualization.LineChart(document.getElementById(id));
                break;
                case 'barra':
                  chart = new google.visualization.ColumnChart(document.getElementById(id));
                break;
              }
  
		      google.load('visualization', '1', {'packages':['corechart']});
	        google.setOnLoadCallback(graficos);
          chart.draw(data, options);

         });
      }

/*s

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('boolean', 'Full Time Employee');
        data.addRows([
          ['Mikeddeee',  {v: 10000, f: '$10,000'}, true],
          ['Jim',   {v:8000,   f: '$8,000'},  false],
          ['Alice', {v: 12500, f: '$12,500'}, true],
          ['Bob',   {v: 7000,  f: '$7,000'},  true]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      } */