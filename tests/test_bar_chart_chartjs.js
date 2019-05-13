<script>
    $(function(){
        ////////////////////////////////
        //var canvasCtx = $('#areaChart').get(0).getContext('2d');
        var canvasCtx = $('#areaChart').get(0).getContext('2d');
        var chartConfig = {
            type: 'horizontalBar',
            data: {
                /////////////////////////////////////////////
                labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [
                    {
                        label: "Population (millions)",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                        borderColor: 'rgba(0,153,0,1)',
                        borderWidth: 1,
                        data: [2478,5267,734,784,433]
                    }
                ]
                /////////////////////////////////////////////
            },
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    position: 'right',
                },
                tooltips: {
                    //mode: 'nearest',
                    callbacks: {
                       label: function(tooltipItem) {
                            console.log(tooltipItem);
                            return tooltipItem.yLabel;
                       }
                    }
                },
                title: {
                    display: true,
                    text: 'Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                'onClick': function (event, item) {}
            }
        }
        var chartObj = new Chart(canvasCtx, chartConfig);
        ////////////////////////////////
    }); 
    </script>