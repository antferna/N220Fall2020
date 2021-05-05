// set the dimensions and margins of the graph
var margin = {top: 10, right: 30, bottom: 30, left: 60},
    width = 460 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;
    // append the svg object to the body of the page
    var svg = d3.select("#my_dataviz")
      .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
      .append("g")
        .attr("transform",
              "translate(" + margin.left + "," + margin.top + ")")

//Read the data
d3.csv('Batting.csv', function(data) {

  // Add X axis
  var x = d3.scaleLinear()
    .domain([0, 0])
    .range([ 0, width ]);
  svg.append("g")
    .attr("class", "myXaxis")   // Note that here we give a class to the X axis, to be able to call it later and modify it
    .attr("transform", "translate(0," + height + ")")
    .call(d3.axisBottom(x))
    .attr("opacity", "0")

  // Add Y axis
  var y = d3.scaleLinear()
    .domain([0, 90])
    .range([ height, 0]);
  svg.append("g")
    .call(d3.axisLeft(y));

  // Add dots
  svg.append('g')
    .selectAll("dot")
    .data(data)
    .enter()
    .append("circle")
      .attr("cx", function (d) { return x(d.yearID); } )
      .attr("cy", function (d) { return y(d.HR); } )
      .attr("r", 1.5)
      .style("fill", "#69b3a2")
      .on('mouseover',function(d){
          d3.select(this).style('fill','red')
          console.log('player:'+ d.playerID + ' HR:' + d.HR + ' Year:' + d.yearID);
      })

  // new X axis
  x.domain([1871, 2015])
  svg.select(".myXaxis")
    .transition()
    .duration(500)
    .attr("opacity", "1")
    .call(d3.axisBottom(x));

  svg.selectAll("circle")
    .transition()
    .delay(function(d,i){return(i*3)})
    .duration(500)
    .attr("cx", function (d) { return x(d.yearID); } )
    .attr("cy", function (d) { return y(d.HR); } )

// Add X axis label:
svg.append("text")
.attr("text-anchor", "end")
.attr("x", width)
.attr("y", height + margin.top + 20)
.text("Years");

// Y axis label:
svg.append("text")
.attr("text-anchor", "end")
.attr("transform", "rotate(-90)")
.attr("y", -margin.left+20)
.attr("x", -margin.top)
.text("Home-Runs")

})