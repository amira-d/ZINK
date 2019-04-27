
                <!-- portfolio_filter -->
                <div class="filtering" id="fix" style="  float: right;  
  border: 1px solid #ffbf00 ; padding: 10px;


 
 position: fixed;right: 80px;top: 200px; bottom: 150px;">
                  <h2 style="color: #ffbf00;font-size: 25px; font-family: stencil;text-align: center;">Filter by :</h2>
                  
                    
                      <div class="list-group" style="padding: 0;">
     <h1>Price</h1>
     <input type="hidden" id="hidden_minimum_price" value="3" />
                    <input type="hidden" id="hidden_maximum_price" value="45" />
                                        <input type="hidden" name="qq"id="type" value= <?php echo $var; ?>>

                    <p id="price_show" style="text-align: center; position: relative;bottom: 30px;">3 - 45</p>
                    <div id="price_range" style="position: relative;bottom: 30px;"></div>
                </div> 
                <div class="list-group" style="position: relative;bottom: 40px;">
                  <h1>Name</h1>
                       <label style=" padding: 5px; position: relative; bottom: 30px;">Sort by Name      <input type="checkbox" class="common_selector name" value="nom_P" style="size: 50px;"  ></label>
                  


                </div>
                </div>   
                    
                    
                      
              <div>
                <div class="filter_data"  style=" position: ab;display: inline;">

                </div>
               </div>
               

                <!-- portfolio_container -->
 
                <!-- end portfolio_container -->
                
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->
  </section>
     <!-- <div class="row">

         <div class="twelve columns collapsed">




   


   <!-- footer
   ================================================== -->
  

   <!-- Java Script
   ================================================== -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
       <script src="js/animated-headline.js"></script>
    <!-- jQuery -->
    <script src="js1/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/menu.js"></script>
    <script src="js1/animated-headline.js"></script>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->

    
  <script src="js2/owl.carousel.min.js"></script>
  <script src="js2/circle-progress.min.js"></script>
  <script src="js2/main.js"></script>

      

 <script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {

        $('.filter-data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
                var type = $('#type').val();

        var nom_P= get_filter('name');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action,type:type, minimum_price:minimum_price,nom_P:nom_P, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
 function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }


   $('.common_selector').click(function(){
        filter_data();
    });


    $('#price_range').slider({
        range:true,
        min:3,
        max:45,
        values:[3, 45],
        step:5,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
 <script type="text/javascript">
  function fixDiv() {
  var $cache = $('#fix'); 
  if ($(window).scrollTop() > 180) 
    $cache.css({'position': 'fixed', 'top': '280px'}); 
  else
    $cache.css({'position': 'relative', 'top': 'auto'});
}
$(window).scroll(fixDiv);
fixDiv();
    </script>