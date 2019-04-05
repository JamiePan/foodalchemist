
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
                <p>This antidote borrows its idea from the popular manga series "Full Metal Alchemist" where alchemists use their power to yield anything they desire (except money) to help the sufferers in the context of European Industrial Revolution. Recent reports have suggested that there has been a steep rise of homeless people in the city of Melbourne, a successive increase in global food demand and improper waste management at restaurants (globally). This antidote combines all the problem to solve the problem of food for the home.
</p>
            </div>
            <!---//End-welcome-note---->
            <!---start-top-grids--->
            <div class="top-grids">
                <a href="<?php echo site_url("Cafe_Owner"); ?>"> 
                    <div class="top-grid">
                    <div class="top-grid-head">
                        
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
             <!---start-Features---->
            <div class="feature-grids">
                <div class="feature-grid-head">
                    <div class="feature-grid-head-top">
                        <label> </label><span> </span> <label> </label>
                        <div class="clear"> </div>
                    </div>
                    <h3><span></span> Trend</h3>
                </div>
                    <div class="clear"> </div>
                    <div class="feature-grid">
                        <div class='tableauPlaceholder' id='viz1554437310988' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Fo&#47;FoodAlchemist&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='FoodAlchemist&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Fo&#47;FoodAlchemist&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                 var divElement = document.getElementById('viz1554437310988');                   var vizElement = divElement.getElementsByTagName('object')[0];                  vizElement.style.minWidth='420px';vizElement.style.maxWidth='1350px';vizElement.style.width='100%';vizElement.style.minHeight='887px';vizElement.style.maxHeight='1087px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                   var scriptElement = document.createElement('script');                   scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                 vizElement.parentNode.insertBefore(scriptElement, vizElement);              </script>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
              
            </div>

            <!---End-Features---->
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