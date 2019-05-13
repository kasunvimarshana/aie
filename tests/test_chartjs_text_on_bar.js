//chartjs
<!-- ------------------------------------------------------------------------- -->
<script>
animation: {
  onComplete: function () {
    var chartInstance = this.chart;
    var ctx = chartInstance.ctx;
    console.log(chartInstance);
    var height = chartInstance.controller.boxes[0].bottom;
    ctx.textAlign = "center";
    Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
      var meta = chartInstance.controller.getDatasetMeta(i);
      Chart.helpers.each(meta.data.forEach(function (bar, index) {
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 2));
      }),this)
    }),this);
  }
}
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<script>
Chart.helpers.each(meta.data.forEach(function (bar, index) {
    var centerPoint = bar.getCenterPoint();
    ctx.fillText(dataset.data[index], centerPoint.x, centerPoint.y);
}),this)
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Red", "Green"],
    datasets: [{
      label: '# of Votes',
      data: [12, 23]
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    },
    animation: {
      onComplete: function () {
        var chartInstance = this.chart;
        var ctx = chartInstance.ctx;
        console.log(chartInstance);
        var height = chartInstance.controller.boxes[0].bottom;
        ctx.textAlign = "center";
        Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
          var meta = chartInstance.controller.getDatasetMeta(i);
          Chart.helpers.each(meta.data.forEach(function (bar, index) {
            ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 2) - 10);
          }),this)
        }),this);
      }
    }
  }
});
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<script>
scope.options = {
    tooltips: {
        enabled: true
    },
    hover: {
        animationDuration: 1
    },
    animation: {
        duration: 1,
        onComplete: function () {
            var chartInstance = this.chart,
                ctx = chartInstance.ctx;
            ctx.textAlign = 'center';
            ctx.fillStyle = "rgba(0, 0, 0, 1)";
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                meta.data.forEach(function (bar, index) {
                    var data = dataset.data[index];
                    ctx.fillText(data, bar._model.x, bar._model.y - 5);

                });
            });
        }
    }
}
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<script>
onAnimationComplete: function(){
    if (this.options.showInlineValues) {
        if (this.name == "Bar") {
            this.eachBars(function(bar){
                var tooltipPosition = bar.tooltipPosition();
                new Chart.Tooltip({
                    x: Math.round(tooltipPosition.x),
                    y: this.options.centeredInllineValues
                        ? Math.round( bar.y + (bar.height() / 2) + ((this.options.tooltipFontSize + this.options.tooltipYPadding) / 2) )
                        : Math.round(tooltipPosition.y),
                    xPadding: this.options.tooltipXPadding,
                    yPadding: this.options.tooltipYPadding,
                    fillColor: this.options.tooltipFillColor,
                    textColor: this.options.tooltipFontColor,
                    fontFamily: this.options.tooltipFontFamily,
                    fontStyle: this.options.tooltipFontStyle,
                    fontSize: this.options.tooltipFontSize,
                    caretHeight: this.options.tooltipCaretSize,
                    cornerRadius: this.options.tooltipCornerRadius,
                    text: template(this.options.tooltipTemplate, bar),
                    chart: this.chart
                }).draw();
            });
        }
    }
}
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<script>
onAnimationComplete: function(){
    if (this.options.showInlineValues) {
            if (this.name == "Bar") {
                this.eachBars(function(bar){
                    var tooltipPosition = bar.tooltipPosition();
                    new Chart.Tooltip({
                        x: Math.round(tooltipPosition.x),
                        y: Math.round(tooltipPosition.y),
                        xPadding: this.options.tooltipXPadding,
                        yPadding: this.options.tooltipYPadding,
                        fillColor: "rgba(255,255,255,1)", //fill bg the color with white
                        textColor: "rgba(0,0,0,1)", //set text color to black
                        fontFamily: this.options.tooltipFontFamily,
                        fontStyle: this.options.tooltipFontStyle,
                        fontSize: 9, //set font size
                        caretHeight: this.options.tooltipCaretSize,
                        cornerRadius: this.options.tooltipCornerRadius,
                        text: template(this.options.tooltipTemplate, bar),
                        chart: this.chart
                    }).draw();
                });
            }
        }
    }
</script>
<!-- /.------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------- -->
<canvas id="barChart" width="400" height="120"></canvas>
<script>
$(document).ready(function(){
    var horizontalBarChartData = {
        labels: ["Category 1", "Category 2", "Category 3", "Interview 4", "Category 5", "Category 6", "Category 7"],
        datasets: [{
            backgroundColor: "#00b0f0",
            data: [80,10,15,5,20,3,25]
        }]

    };
    var ctx = document.getElementById("barChart").getContext("2d");
    var myHorizontalBar = new Chart(ctx, {
        type: 'horizontalBar',
        data: horizontalBarChartData,
        options: {

            scales: {
                yAxes:[{
                    barThickness: 20,
                    ticks: {
                        beginAtZero:true,
                        mirror: true,
                    },
                }],
            },
            responsive: true,
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Horizontal Bar Chart'
            },
            animation: {
                duration: 1,
                onComplete () {
                const chartInstance = this.chart;
                    const ctx = chartInstance.ctx;
                    const dataset = this.data.datasets[0];
                    const meta = chartInstance.controller.getDatasetMeta(0);

                    Chart.helpers.each(meta.data.forEach((bar, index) => {
                        const label = this.data.labels[index];
                        const labelPositionX = 20;
                        const labelWidth = ctx.measureText(label).width + labelPositionX;

                        ctx.textBaseline = 'middle';
                        ctx.textAlign = 'left';
                        ctx.fillStyle = '#333';
                        ctx.fillText(label, labelPositionX, bar._model.y);
                    }));
                }
            }
        }
    });
});
</script>
<!-- /.------------------------------------------------------------------------- -->