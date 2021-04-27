var countries = [];

function drawBarChart(males, females)
{
    d3.select("#barchart").selectAll('*').remove();

    var BAR_CHART_HEIGHT = 250;

    var xScale = d3.scale.linear();
    var yScale = d3.scale.linear();
    
    var yScale = d3.scale.linear()
        .domain([0, 100])
        .range([BAR_CHART_HEIGHT, 0])

    var g = d3.select('#barchart');

    var yAxis = d3.svg.axis()
        .scale(yScale)
        .orient('left');

    g.append('g')
        .attr('class', 'axis')
        .call(yAxis);

    g.append('rect')
        .attr('x', 10)
        .attr('y', yScale(males))
        .attr('width', 30)
        .attr('height', yScale(100-males))
        .style('fill', '#66ccff');

    g.append('text')
        .attr('x', 10)
        .attr('y', BAR_CHART_HEIGHT+10)
        .html('males')

    g.append('rect')
        .attr('x', 60)
        .attr('y', yScale(females))
        .attr('width', 30)
        .attr('height', yScale(100-females))
        .style('fill', '#ff9999')

    g.append('text')
        .attr('x', 60)
        .attr('y', BAR_CHART_HEIGHT+10)
        .html('females')

}

function drawScatterplot()
{
    var CHART_WIDTH = 250;
    var CHART_HEIGHT = 250;

    var MAX_BAR_HEIGHT = 100;

    var xScale = d3.scale.linear();
    var yScale = d3.scale.linear();

    var maxGDP = d3.max(countries, function(d) { return d.gdp; })
    var minGDP = d3.min(countries, function(d) { return d.gdp; })

    var maxLifeExp = d3.max(countries, function(d) { return d.lifeExpectancy; });
    var minLifeExp = d3.min(countries, function(d) { return d.lifeExpectancy; })

    xScale
        .domain([minGDP, maxGDP])
        .range([0, CHART_WIDTH])
        .nice();
        
    yScale
        .domain([minLifeExp, maxLifeExp])
        .range([CHART_HEIGHT, 0]);

        
    var g = d3.select('svg').select('#scatterplot');


    // Create axes
    var xAxis = d3.svg.axis()
        .scale(xScale)
        .orient('bottom').ticks(5);
        //.tickFormat(function(d) { return "" + d; })

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

    // create circles for my data points
    var circles = g.selectAll('circle')
        .data(countries)
        .enter()
        .append('circle')

    circles
        .style('fill', 'steelblue')
        .attr('r', 5)
        .attr('cx', function(d) { return xScale(d.gdp) })
        .attr('cy', function(d) { return yScale(d.lifeExpectancy) } );

    circles
        .on('mouseover', function(d) {
            d3.select(this).style('fill', 'red')
            console.log('country: ' + d.country);
            drawBarChart(d.maleJobParticipation, d.femaleJobParticipation);

        })
        .on('mouseout', function(d) {
            d3.select(this).style('fill', 'steelblue');
        })
}

d3.csv('countries.csv', function(data) 
{
    countries = data;
    drawScatterplot();
});