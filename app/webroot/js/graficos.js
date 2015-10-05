      function graficos(modo,id) {
            var jsonData = $.ajax({
				        url : "graficos/json",
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