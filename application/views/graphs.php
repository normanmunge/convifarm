  <div class="mainpanel">

    <div class="contentpanel">

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="buttons.html">UI Elements</a></li>
        <li class="active">Graphs &amp; Charts</li>
      </ol>

      <hr class="darken">

      <h4 class="panel-title mb5">Flot Charts </h4>
      <p class="mb20"><a href="http://www.flotcharts.org/" target="_blank">Flot</a> is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Simple Chart</h4>
              <p>Create a placeholder, make sure it has dimensions (so Flot knows at what size to draw the plot), then call the plot function with your data.</p>
            </div>
            <div class="panel-body">
              <div id="basicflot" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Using Other Symbols</h4>
              <p>For other point types, you can define a callback function to draw the symbol. Some common symbols are available in the symbol plugin.</p>
            </div>
            <div class="panel-body">
              <div id="basicflot2" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Tracking With Crosshair</h4>
              <p>You can add crosshairs that'll track the mouse position, either on both axes or as here on only one.</p>
            </div>
            <div class="panel-body">
              <div id="trackingchart" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Real Time Updates</h4>
              <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
            </div>
            <div class="panel-body">
              <div id="realtimechart" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Bar Chart</h4>
              <p>With the categories plugin you can plot categories/textual data easily.</p>
            </div>
            <div class="panel-body">
              <div id="barchart" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Pie Chart</h4>
              <p>Labels can be hidden if the slice is less than a given percentage of the pie.</p>
            </div>
            <div class="panel-body">
              <div id="piechart" class="flot-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <hr class="darken">

      <h4 class="panel-title">Morris Charts </h4>
      <p class="mb20"><a href="http://www.oesmith.co.uk/morris.js/index.html" target="_blank">Morris</a> chart - good-looking charts shouldn't be difficult.</p>

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Line Chart</h4>
              <p>A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
            </div>
            <div class="panel-body">
              <div id="line-chart" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Area Chart</h4>
              <p>Area charts are used to represent cumulated totals using numbers or percentages (stacked area charts in this case) over time.</p>
            </div>
            <div class="panel-body">
              <div id="area-chart" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Bar Chart</h4>
              <p>A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
            </div>
            <div class="panel-body">
              <div id="bar-chart" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Stacked Chart</h4>
              <p>The stacked charts are used when data sets have to be broken down into their constituents.</p>
            </div>
            <div class="panel-body">
              <div id="stacked-chart" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Donut Chart</h4>
              <p>A donut chart, or doughnut chart, functions precisely like a pie chart. The only difference is that the center is blank.</p>
            </div>
            <div class="panel-body">
              <div id="donut-chart" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Donut Chart</h4>
              <p>A donut chart, or doughnut chart, functions precisely like a pie chart. The only difference is that the center is blank.</p>
            </div>
            <div class="panel-body">
              <div id="donut-chart2" class="body-chart"></div>
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title panel-title-alt">Sparkline Charts </h4>
          <p><a href="http://omnipotent.net/jquery.sparkline" target="_blank">jQuery Sparkline</a> generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript. </p>
        </div><!-- panel-heading -->
        <div class="panel-body">

          <div class="tinystat mr20">
            <div id="sparkline" class="chart mt5"></div>
            <div class="datainfo">
              <span class="text-muted">Total Sales</span>
              <h4>$630,201</h4>
            </div>
          </div><!-- tinystat -->

          <div class="tinystat mr20">
            <div id="sparkline2" class="chart mt5"></div>
            <div class="datainfo">
              <span class="text-muted">Avg Sales</span>
              <h4>$106,850</h4>
            </div>
          </div><!-- tinystat -->

          <div class="tinystat mr20">
            <div id="sparkline3" class="chart mt5">1,5,3,6,8,2</div>
            <div class="datainfo">
              <span class="text-muted">Avg Order</span>
              <h4>23,001,090</h4>
            </div>
          </div><!-- tinystat -->

          <div class="tinystat">
            <div id="sparkline4" class="chart mt5">1,5,3,6,8,2</div>
            <div class="datainfo">
              <span class="text-muted">Avg Expenses</span>
              <h4>$11,090</h4>
            </div>
          </div><!-- tinystat -->

        </div><!-- panel-body -->
      </div><!-- panel -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>

<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>

<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.symbol.js"></script>
<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.categories.js"></script>
<script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.pie.js"></script>

<script src="<?php echo base_url();?>assets/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="<?php echo base_url();?>assets/lib/morrisjs/morris.js"></script>
<script src="<?php echo base_url();?>assets/lib/raphael/raphael.js"></script>

<script src="<?php echo base_url();?>assets/lib/jquery-sparkline/jquery.sparkline.js"></script>

<script src="<?php echo base_url();?>assets/js/quirk.js"></script>
<script src="<?php echo base_url();?>assets/js/charts.js"></script>

