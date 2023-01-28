/*=========================================================================================
    File Name: custom-chart.js
    ----------------------------------------------------------------------------------------
    Item Name: Seorun - SEO & Digital Marketing Agency Template
    Version: 1.0
    Author: Validthemes
    Author URL: http://www.themeforest.net/user/validthemes
==========================================================================================*/

$(function ($) {
  'use strict';

/*====  Line chart for business growth =====*/
var ctx = document.getElementById("lineChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5", "Week 6"],
        datasets: [{
            label: 'Website traffic',
            data: [8900, 18600, 51300, 58000, 86000, 120789],
            backgroundColor: [
                'rgba(34, 128, 252, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(34, 128, 252, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
/*====  End line chart =====*/


});