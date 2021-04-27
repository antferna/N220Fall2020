
		var BAR_WIDTH = 10;
		var MAX_BAR_HEIGHT = 100;

		var energyProduction = [];

		function drawBarChart() 
		{
			

			var maxValue = d3.max(energyProduction);

		}
			

		d3.csv('energy_us.csv', function(data) 
		{
			for (var i=0; i<data.length; i++)
			{
				var record = data[i];
				
				// loop through all years, from 1980 to 2012
				for (var year=1980; year<=2012; year++) 
				{
					var value = record[year];

					// deal with missing data points
					if (value === '--') {
						value = 0;
					}
					else if (value === 'NA') {
						value = 0;
					}
					else if (value === '(s)') {
						value = 0;
					}
					else if (value === 'W') {
						value = 0;
					}
					energyProduction.push(+value);

				}
			}
			drawBarChart();

		});