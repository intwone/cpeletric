google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    const container = document.querySelector('#chart');
    const data = new google.visualization.arrayToDataTable([

        ['Caracter', 'Ki'],
        ['Goku', 60000],
        ['Vegeta', 35000],
        ['Gohan', 55000],
        ['Freeza', 11000],
        ['Picolo', 52000]
    ]);

    const options = {
        title: "Dragon Ball Z",
        height: 400,
        width: 720
    }

    const chart = new google.visualization.ColumnChart(container);
    chart.draw(data, options);

}