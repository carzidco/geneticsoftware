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
    
    var t=document.getElementById("myChart"), 
    o=(new Chart(t, {
        type:"bar", data: {
            labels:["Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre"], 
            datasets:[ {
                label: "% de compras", data: [65, 59, 80, 81, 56, 55, 40], backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)"], borderColor: ["rgba(255,99,132,1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"], borderWidth: 1
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
    ) , 
    document.getElementById("myChart2")), 
    l=new Chart(o, {
        type:"bar", data: {
            labels:["Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre"], datasets:[ {
                label: "# de clientes por mes", data: [12, 19, 3, 5, 2, 3], backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)"], borderColor: ["rgba(255,99,132,1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"], borderWidth: 1
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
    ), 
    d=document.getElementById("myChart3"), n=new Chart(d, {
        type:"bar", data: {
            labels:["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], datasets:[ {
                label: "Label", data: [12, 19, 3, 5, 8, 3], backgroundColor: "rgba(255,255,255,.3)", borderColor: "rgba(255,255,255,0.5)", borderWidth: 1
            }
            ]
        }
        , options: {
            deferred: {
                yOffset: "80%", delay: 100
            }
            , legend: {
                labels: {
                    fontColor: "#fff", fontFamily: "Roboto"
                }
            }
            , scales: {
                xAxes:[ {
                    display: !1
                }
                ], yAxes:[ {
                    display:!1, ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
    }
    ), 
    b=document.getElementById("myChart4"), 
    s=new Chart(b, {
        type:"bar", data: {
            labels:["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], datasets:[ {
                label: "Label", data: [12, 19, 3, 5, 8, 3], backgroundColor: "rgba(255,255,255,.3)", borderColor: "rgba(0,0,0,0.2)", borderWidth: 2
            }
            ]
        }
        , options: {
            deferred: {
                yOffset: "80%", delay: 100
            }
            , legend: {
                labels: {
                    fontColor: "#fff", fontFamily: "Roboto"
                }
            }
            , scales: {
                xAxes:[ {
                    display: !1
                }
                ], yAxes:[ {
                    display:!1, ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
    }
    ), 
    i=document.getElementById("myChart5"), g=new Chart(i, {
        type:"bar", data: {
            labels:["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Green", "Purple", "Orange", "Blue", "Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Green", "Purple", "Orange", "Blue"], datasets:[ {
                label: "Label", data: [12, 19, 3, 5, 8, 3, 6, 15, 13, 16, 12, 19, 3, 5, 8, 3, 6, 15, 13, 16], backgroundColor: "rgba(255,255,255,.1)", borderColor: "rgba(255,255,255,1)", borderWidth: 0
            }
            ]
        }
        , options: {
            deferred: {
                yOffset: "80%", delay: 100
            }
            , tooltips: {
                enabled: !1
            }
            , legend: {
                display: !1
            }
            , scales: {
                xAxes:[ {
                    display: !1
                }
                ], yAxes:[ {
                    display:!1, ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
    }
    ), f=document.getElementById("myChart6"), y=new Chart(f, {
        type:"bar", data: {
            labels:["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Green", "Purple", "Orange", "Blue", "Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Green", "Purple", "Orange", "Blue"], datasets:[ {
                label: "Label", data: [12, 19, 3, 5, 8, 3, 6, 15, 13, 16, 12, 19, 3, 5, 8, 3, 6, 15, 13, 16], backgroundColor: "rgba(255,255,255,.1)", borderColor: "rgba(255,255,255,1)", borderWidth: 0
            }
            ]
        }
        , options: {
            deferred: {
                yOffset: "80%", delay: 100
            }
            , tooltips: {
                enabled: !1
            }
            , legend: {
                display: !1
            }
            , scales: {
                xAxes:[ {
                    display: !1
                }
                ], yAxes:[ {
                    display:!1, ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
    }
    );
    setInterval(function() {
        y.data.datasets[0].data.shift(), y.update(0), y.data.datasets[0].data.push(Math.floor(21*Math.random())+10), y.update()
    }
    , 1200);
    var u=document.getElementById("myChart7"), c=new Chart(u, {
        type:"bar", data: {
            labels:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"], datasets:[ {
                label: "Venta por edad", data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], backgroundColor: "rgba(255,255,255,.3)", borderColor: "rgba(255,255,255,0.5)", borderWidth: 1
            }
            ]
        }
        , options: {
            defaultFontColor:"#fff", deferred: {
                yOffset: "80%", delay: 100
            }
            , title: {
                display: !0, text: "Ventas por edades", fontColor: "#fff", fontSize: 20, fontFamily: "Roboto", fontStyle: "normal", padding: 20
            }
            , legend: {
                display:!1, labels: {
                    fontColor: "#fff", fontFamily: "Roboto"
                }
            }
            , scales: {
                xAxes:[ {
                    display:!0, gridLines: {
                        color: "rgba(255,255,255,0.1)", fontColor: "#fff", drawOnChartArea: !1, zeroLineColor: "rgba(255,255,255,.1)", zeroLineWidth: 0
                    }
                    , ticks: {
                        fontColor: "#fff"
                    }
                }
                ], yAxes:[ {
                    display:!0, color:"#fff", gridLines: {
                        color: "rgba(255,255,255,0.1)", fontColor: "#fff", drawOnChartArea: !1, zeroLineColor: "rgba(255,255,255,.1)", zeroLineWidth: 0
                    }
                    , ticks: {
                        beginAtZero: !0, fontColor: "#fff"
                    }
                }
                ]
            }
        }
    }
    );
    setInterval(function() {
        a(c, r(12, 10, 200))
    }
    , 2e3);
    
    // chart 8
    var p=document.getElementById("myChart8");
    new Chart(p, {
        type:"bar", data: {
            labels:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"], datasets:[ {
                label: "Producto 1", data: r(12, 1, 2e3), backgroundColor: "rgba(1, 188, 212, 1)", borderColor: "rgba(1, 188, 212, 1)", borderWidth: 1
            }
            , {
                label: "Producto 2", data: r(12, 1, 2e3), backgroundColor: "rgba(255,152,0,1)", borderColor: "rgba(255,152,0,1)", borderWidth: 1
            }
            , {
                label: "Producto 3", data: r(12, 1, 2e3), backgroundColor: "rgba(156, 39, 176, 1)", borderColor: "rgba(156, 39, 176, 1)", borderWidth: 1
            }
            ]
        }
        , options: {
            defaultFontColor:"#fff", deferred: {
                yOffset: "80%", delay: 100
            }
            , title: {
                display: !0, text: "Reporte de ventas", fontSize: 20, fontFamily: "Roboto", fontStyle: "normal", padding: 20
            }
            , legend: {
                labels: {
                    fontFamily: "Roboto"
                }
            }
            , scales: {
                xAxes:[ {
                    display:!0, gridLines: {
                        color: "rgba(255,255,255,0.1)", drawOnChartArea: !1, zeroLineColor: "rgba(255,255,255,.1)", zeroLineWidth: 0
                    }
                    , ticks: {}
                }
                ], yAxes:[ {
                    display:!0, gridLines: {
                        zeroLineWidth: 1
                    }
                    , ticks: {
                        beginAtZero: !0
                    }
                }
                ]
            }
        }
    }
    );
    setInterval(function() {
        a(l, r(6, 0, 20))
    }
    , 2e3), setInterval(function() {
        a(n, r(6, 0, 20))
    }
    , 2e3), setInterval(function() {
        a(s, r(6, 0, 20))
    }
    , 2e3), setInterval(function() {
        a(g, r(20, 0, 100))
    }
    , 100)
}

);