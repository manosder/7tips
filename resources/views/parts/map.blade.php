<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv" style="width: 100%; height: 100%;"></div>
<script>
  var map = AmCharts.makeChart("chartdiv", {
  "type": "map",
  "theme": "light",
  "dataProvider": {
    "map": "worldLow",
    "getAreasFromMap": true
  },
  "areasSettings": {
    "autoZoom": true,
    "selectedColor": "#CC0000"
  }
});
</script>
