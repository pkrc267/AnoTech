<script>

    $(document).ready(function() {
        if (isAPIAvailable()) {
            $('#files').bind('change', handleFileSelect);
        }

        $('#run').bind('click', chartTextData);
    });

    function isAPIAvailable() {
        // Check for the various File API support.
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            // Great success! All the File APIs are supported.
            return true;
        }
        else {
            alert("The browser you're using does not currently support\nthe HTML5 File API. As a result the file loading demo\nwon't work properly.");
            return false;
        }
    }

    function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object
        var file = files[0];
        // read the file contents and chart the data
        chartFileData(file, function(parsed) {
            drawChart(parsed);
        });
    }

    function chartFileData(fileToParse, callback) {
        $('#padding').css({visibility: "visible"});
        var reader = new FileReader();
        reader.readAsText(fileToParse);
        reader.onload = function() {
            var csv = event.target.result;
            var parsedData = $.csv.toArrays(csv, {
                onParseValue: $.csv.hooks.castToScalar
            });
            callback(parsedData);
        };
        reader.onerror = function() {
            alert('Unable to read ' + file.fileName);
        };
    }

    //draw chart
    function drawChart (setChartData) {
        var data = new google.visualization.arrayToDataTable(setChartData);
        var dash = new google.visualization.Dashboard(document.getElementById('dashboard'));
        var control = new google.visualization.ControlWrapper({
            controlType: 'ChartRangeFilter',
            containerId: 'control',
            options: {
                filterColumnIndex: 0,
                ui: {
                    chartOptions: {
                        height: 50,
                        width: 800,
                        chartArea: {
                            width: '60%'
                        }
                    },
                    chartView: {
                        columns: [0, 1]
                    }
                }
            }
        });

        var chart = new google.visualization.ChartWrapper({
            chartType: 'LineChart',
            containerId: 'chart'
        });

        function fixOptions(wrapper) {
            // sets the options on the chart wrapper so that it draws correctly
            wrapper.setOption('height', 300);
            wrapper.setOption('width', 800);
            wrapper.setOption('chartArea.width', '60%');
            // the chart editor automatically enables animations, which doesn't look right with the ChartRangeFilter
            wrapper.setOption('animation', null);
            // the chart editor sets hAxis.viewWindowMode to 'pretty', which doesn't work well with continuous axes
            wrapper.setOption('hAxis.viewWindowMode', 'maximized');
            wrapper.setOption('curveType', 'function');
        }

        fixOptions(chart);

        document.getElementById('edit').onclick = function() {
            var editor = new google.visualization.ChartEditor();
            google.visualization.events.addListener(editor, 'ok', function() {
                chart = editor.getChartWrapper();
                fixOptions(chart);
                dash.bind([control], [chart]);
                dash.draw(data);
            });
            editor.openDialog(chart);
        };

        dash.bind([control], [chart]);
        dash.draw(data);
    }
</script>