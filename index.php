<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <h1>
        Temp: 4455 we are so fucke
        <br>
        s
    </h1>
    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>


    <script>
        var tempNew = [{
                x: 2,
                y: 7
            },
            {
                x: 6,
                y: 8
            },
            {
                x: 7,
                y: 8
            },
            {
                x: 8,
                y: 9
            },
            {
                x: 9,
                y: 9
            },
            {
                x: 10,
                y: 9
            },
            {
                x: 110,
                y: 10
            },
            {
                x: 12,
                y: 11
            },
            {
                x: 13,
                y: 14
            },
            {
                x: 14,
                y: 14
            },
            {
                x: 150,
                y: 15
            }
        ];



        var tempCurrent = [{
                x: 50,
                y: 7
            },
            {
                x: 60,
                y: 8
            },
            {
                x: 70,
                y: 8
            },
            {
                x: 80,
                y: 9
            },
            {
                x: 90,
                y: 9
            },
            {
                x: 100,
                y: 9
            },
            {
                x: 110,
                y: 10
            },
            {
                x: 120,
                y: 11
            },
            {
                x: 130,
                y: 14
            },
            {
                x: 140,
                y: 14
            },
            {
                x: 150,
                y: 15
            }
        ];



        var test = new Chart("myChart", {
            type: "scatter",
            data: {
                datasets: [{
                    labels: "sdsds",
                    pointRadius: 4,
                    pointBackgroundColor: "rgb(0,0,255)",
                    data: tempNew
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            min: 4,
                            max: 400
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 6,
                            max: 16
                        }
                    }],
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
            chart.data.labels.pop();
            chart.data.datasets.forEach((dataset) => {
                dataset.data.pop();
            });
            chart.update();
        }

        while (true) {
            log("fddf");
            setInterval(0.5, myChart.update());
        }
    </script>
</body>

</html>