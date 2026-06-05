import {Chart} from 'chart.js'

console.log("hi")

var tempChart;

const ctx= document.getElementById('acquisitions');


(async function() {
  const data = [
    { year: 2010, count: 10 },
    { year: 2011, count: 20 },
    { year: 2012, count: 15 },
    { year: 2013, count: 25 },
    { year: 2014, count: 22 },
    { year: 2015, count: 30 },
    { year: 2016, count: 28 },
  ];

  var tempChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      datasets: [{
        data: [6000, 5000, 8000, 2000, 10000, 3500, 6000, 2000, 4000, 6000]
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            autoSkip: false,
            min: 15,
            max: 40
          },
          afterBuildTicks: function(scale) {
            scale.ticks = ticks;
            return;
          },
          beforeUpdate: function(oScale) {
            return;
          }
        }]
      }
    }
  });
function addData(chart, label, newData) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(newData);
    });
    chart.update();
}

function removeData(chart) {
    chart.data.labels.shift();
    chart.data.datasets.forEach((dataset) => {
        dataset.data.shift();
    });
    chart.update();
}


setInterval(() => {
    console.log("fddf");
    removeData(tempChart);
    addData(tempChart, "", myArray[1]);
    console.log(myArray[1]);
}, 4000);}
)
