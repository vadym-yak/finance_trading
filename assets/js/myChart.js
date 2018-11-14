// var chartData = [];
// $.ajax({
//     url: "dataLoader.php",
//     type: "post",
//     data: { model: "msft" },
//     success: function(res) {
//         chartData = JSON.parse(res);
//         console.log(chartData);
//     }
// })
    var chart = AmCharts.makeChart("chartdiv", {
      "type": "stock",
      "color": "#fff",
      "dataSets": [{
      "title": "ALGN",
        "fieldMappings": [{
          "fromField": "open",
          "toField": "open"
        }, {
          "fromField": "high",
          "toField": "high"
        }, {
          "fromField": "low",
          "toField": "low"
        }, {
          "fromField": "close",
          "toField": "close"
        }, {
          "fromField": "volume",
          "toField": "volume"
        }],
        "compared": false,
        "categoryField": "date",

        /**
         * data loader for data set data
         */
        "dataLoader": {
          "url": "include/dataLoader.php",
          "format": "json",
          "type": "post",
          "data": { "model": 'msft' }
       },
        // "dataProvider": chartData,

       /**
        * data loader for events data
        */
       //  "eventDataLoader": {
       //    "url": "data/MSFT_events.csv",
       //    "format": "csv",
       //    "showCurtain": true,
       //    "showErrors": true,
       //    "async": true,
       //    "reverse": true,
       //    "delimiter": ",",
       //    "useColumnNames": true,
       //    "postProcess": function ( data ) {
       //      for ( var x in data ) {
       //        switch( data[x].Type ) {
       //          case 'A':
       //            var color = "#85CDE6";
       //            break;
       //          default:
       //            var color = "#cccccc";
       //            break;
       //        }
       //        data[x].Description = data[x].Description.replace( "Upgrade", "<strong style=\"color: #0c0\">Upgrade</strong>" ).replace( "Downgrade", "<strong style=\"color: #c00\">Downgrade</strong>" );
       //        data[x] = {
       //          type: "pin",
       //          graph: "g1",
       //          backgroundColor: color,
       //          date: data[x].Date,
       //          text: data[x].Type,
       //          description: "<strong>" + data[x].Title + "</strong><br />" + data[x].Description
       //        };
       //      }
       //      return data;
       //    }
       // }

      }],
      "panels": [{
          "title": "Value",
          "percentHeight": 70,

          "stockGraphs": [{
            "type": "candlestick",
            "id": "g1",
            "openField": "open",
            "closeField": "close",
            "highField": "high",
            "lowField": "low",
            "valueField": "close",
            "lineColor": "#fff",
            "fillColors": "#fff",
            "negativeLineColor": "#db4c3c",
            "negativeFillColors": "#db4c3c",
            "fillAlphas": 1,
            "balloonText": "open:<b>[[open]]</b><br>close:<b>[[close]]</b><br>low:<b>[[low]]</b><br>high:<b>[[high]]</b>",
            "comparedGraphLineThickness": 2,
            "columnWidth": 0.7,
            "useDataSetColors": false,
            "comparable": true,
            "compareField": "close",
            // "showBalloon": false,
            "proCandlesticks": true,
          }],

          "stockLegend": {
            "markerType": "none",
            "markerSize": 0,
            "valueWidth": 250,
            "valueTextRegular": undefined,
            "periodValueTextComparing": "[[percents.value.close]]%"
          }

        },

        {
          "title": "Volume",
          "percentHeight": 30,
          "marginTop": 1,
          "columnWidth": 0.6,
          "showCategoryAxis": false,

          "stockGraphs": [{
            "valueField": "volume",
            "openField": "open",
            "type": "column",
            "showBalloon": false,
            "fillAlphas": 1,
            "lineColor": "#fff",
            "fillColors": "#fff",
            "negativeLineColor": "#db4c3c",
            "negativeFillColors": "#db4c3c",
            "useDataSetColors": false
          }],

          "stockLegend": {
            "markerType": "none",
            "markerSize": 0,
            "labelText": "",
            "periodValueTextRegular": "[[value.close]]"
          },

          "valueAxes": [{
            "usePrefixes": true
          }]
        }
      ],

      "panelsSettings": {
        "panEventEnabled": true,
        "color": "#fff",
        "plotAreaFillColors": "#333",
        "plotAreaFillAlphas": 1,
        "marginLeft": 60,
        "marginTop": 5,
        "marginBottom": 5
      },

      "chartScrollbarSettings": {
        "graph": "g1",
        "graphType": "line",
        "usePeriod": "WW",
        "backgroundColor": "#333",
        "graphFillColor": "#666",
        "graphFillAlpha": 0.5,
        "gridColor": "#555",
        "gridAlpha": 1,
        "selectedBackgroundColor": "#444",
        "selectedGraphFillAlpha": 1
      },

      "categoryAxesSettings": {
        // "groupToPeriods": ["DD"],
        // "minorGridEnabled": true, 
        "equalSpacing": true,
        "gridColor": "#555",
        "gridAlpha": 1,
        // "minPeriod": "YYYY",
        "parseDates": true
      },

      "valueAxesSettings": {
        "gridColor": "#555",
        "gridAlpha": 1,
        "inside": false,
        "showLastLabel": true
      },

      "chartCursorSettings": {
        "valueBallonEnabled": true,
        "fullWidth": true,
        "cursorAlpha": 0.1,
        "pan": true,
        "valueLineEnabled": true,
        "zoomable": true,
        "valueLineBalloonEnabled": true
      },

      "legendSettings": {
        "color": "#fff"
      },

      "stockEventsSettings": {
        "showAt": "high",
        "type": "pin"
      },

      "balloon": {
        "textAlign": "left",
        "offsetY": 10
      },

      "periodSelector": {
        "position": "bottom",
        "periods": [{
          "period": "DD",
          "count": 10,
          "label": "10D"
        }, {
          "period": "MM",
          "count": 1,
          "label": "1M"
        }, {
          "period": "MM",
          "count": 6,
          "label": "6M"
        }, {
          "period": "YYYY",
          "count": 1,
          "label": "1Y"
        }, {
          "period": "YYYY",
          "count": 2,
          "selected": true,
          "label": "2Y"
        }, {
          "period": "YTD",
          "label": "YTD"
        }, {
          "period": "MAX",
          "label": "MAX"
        }]
      }
    });

    function setGrouping(groupTo, button) {
      // set chart grouping
      chart.categoryAxesSettings.groupToPeriods = [groupTo];
      chart.validateData();
    
      // set selected style on the button
      var buttons = button.parentNode.getElementsByTagName("input");
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].className = "";
      }
      button.className = "selected";
    }