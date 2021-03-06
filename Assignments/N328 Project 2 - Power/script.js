var CHART_WIDTH = 400;
var CHART_HEIGHT = 200;

var MAX_BAR_HEIGHT = 100;

var energyProduction = [];

function drawScatterPlot() 
{
    var maxValue = d3.max(energyProduction);
    var xScale = d3.scale.linear();
    var yScale = d3.scale.linear();

    xScale.domain([1980, 2012]).range([0, CHART_WIDTH]);
    yScale.domain([0, 100]).range([CHART_HEIGHT, 0]);

    
    var g = d3.select('svg').select('g');



    var xAxis = d3.svg.axis()
        .scale(xScale)
        .orient('bottom')
        .tickFormat(function(d) { return "" + d; })

    var yAxis = d3.svg.axis()
        .scale(yScale)
        .orient('left');


    g.append('g')
        .attr('class', 'axis')
        .attr('transform', 'translate(0,' + CHART_HEIGHT + ')')
        .call(xAxis);

    g.append('g')
        .attr('class', 'axis')
        .call(yAxis);
    
    var circles = g.selectAll('circle')
        .data(energyProduction)
        .enter()
        .append('circle')

    circles 
        .style('fill', 'steelblue')
        .attr('r', 5)
        .attr('cx', function(d) { return xScale(d.year)})
        .attr('cy', function(d){ return yScale(d.production)});

}
    

d3.csv('energy_us.csv', function(data) 
{
    for (var i=0; i<data.length; i++)
    {
        var record = data[i];
        
        // loop through all years, from 1980 to 2012
        for (var y=1980; y<=2012; y++) 
        {
            var value = record[y];
            var object = {
                year: y,
                production: +value
            };

            energyProduction.push(object);
        }
    }
    drawScatterPlot();

});