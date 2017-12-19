$(document).ready(function() {
    function e(e, r) {
        return Math.floor(Math.random()*(r-e+1))+e
    }
    function r(r, a, t) {
        result=[], r=void 0!==r?r: 5, a=void 0!==a?a: 0, t=void 0!==t?t: 10;
        for(var o=0;
        o<r;
        o++)result.push(e(a, t));
        return result
    }
    function a(e, r) {
        e.data.datasets[0].data=r, e.update()
    }
    
    var first_bar_chart = document.getElementById("myChart2");
    
    var first_bar_chart_init = new Chart(first_bar_chart, {
        type:"bar", 
        data: {
        labels:["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], 
        datasets:
        [ 
            {
              label: "# of Votes", data: [12, 19, 3, 5, 2, 3], 
              backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)"], 
              borderColor: ["rgba(255,99,132,1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"], 
              borderWidth: 1
            }
        ]
        }
        , options: {
            deferred: {
                yOffset: "80%", delay: 100
            }
            , scales: {
                yAxes:[ {
                    ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
      }
    );
    
    setInterval(function() {
      
        var address = "/serviciosbm/intelligence/products";
        $.ajax({
          url: address,
          type: "get",
          cache: "false",
          datatype: "html",
          error: function () {
            console.log('Failed execution');
          },
          success: function (response) {
            console.log('Succesful');
            /*var products = JSON.parse(response);
            myLineChart.data.datasets[0].data[7] = 10;
            myLineChart.data.labels[8] = "Newly Added";
            myLineChart.update();
            first_bar_chart_init.update();*/
            // first_bar_chart_init.data.datasets.push(products); 
            // first_bar_chart_init.update();
            // first_bar_chart_init.data.datasets[0].data.shift(), 
            // first_bar_chart_init.update(0), 
            // first_bar_chart_init.data.datasets[0].data.push(Math.floor(21*Math.random())+10), 
            // first_bar_chart_init.update()
          }
        });
      
        
    }, 2200);
  }
);