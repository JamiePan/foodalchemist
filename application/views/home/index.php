
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url("includes/assets/js/jquery.cslider.js") ?> "></script>
            <script type="text/javascript">
                $(function() {
                
                    $('#da-slider').cslider({
                        autoplay    : true,
                        bgincrement : 450
                    });
                
                });
            </script>
                <!---//End-da-slider----->
            </div>
            <!--//End-header---->
        </div>
        <!---strat-content---->
        <div class="content">
            <div class="wrap">
            <!---start-welcome-note---->
            <div class="wellcome-note">
                <p>Guardians Of Melbourne or GOM are the self-proclaimed saviors of Melbourne.
We united after we saw that there are unsolved issues in this beautiful city. We are a
bunch of immigrant students who call Melbourne home and have banded together
and pledged to do everything and anything in our power to make this city the
world&#39;s most liveable city once again. God bless Melbourne. God bless Australia.</p>
            </div>
            <!---//End-welcome-note---->
            <!---start-top-grids--->
            <div class="top-grids">
                <a href="<?php echo site_url("Cafe_Owner"); ?>"> 
                    <div class="top-grid">
                    <div class="top-grid-head">
                        
                    </div>
                    <div class="top-grid-head-icon">
                        <span> </span>
                    </div>
                    <h3>Restraurant/Cafe Owner</h3>

                    </div>
                </a>
                <a href="<?php echo site_url("Independent_Person"); ?>"> 
                    <div class="top-grid top-grid1">

                        <div class="top-grid-head top-grid-head1">
                            
                        </div>

                        <h3>Independent Person</h3>

                    </div>
                </a>
                <a href="<?php echo site_url("Charity_Service"); ?>"> 
                    <div class="top-grid top-last-grid">
                        <div class="top-grid-head top-grid-head3">
                            
                        </div>
                        <h3>Charity Service</h3>

                    </div>
                </a>
                <div class="clear"> </div>

            </div>
            <!---//End-top-grids--->
            <!---start-Features---->
       
            <!---End-Features---->
            <!---start-our-projects--->

            <!---End-our-projects--->
            <div class="clear"> </div>
            <!---start-client-testmonials---->
 
            <!---//End-client-testmonials---->
            </div>
        </div>
        <!---End-content---->


<script type="text/javascript">
    
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBackgroundColor2);
google.charts.setOnLoadCallback(drawBackgroundColor1);

function drawBackgroundColor1() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Cafe');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);

      var options = {
        hAxis: {
          title: 'Days'
        },
        vAxis: {
          title: 'HomeLess'
        },
        backgroundColor: '#f1f8e9'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
      chart.draw(data, options);
    }
function drawBackgroundColor2() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Person');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);

      var options = {
        hAxis: {
          title: 'Days'
        },
        vAxis: {
          title: 'Waste Food'
        },
        backgroundColor: '#f1f8e9'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      chart.draw(data, options);
    }

</script>