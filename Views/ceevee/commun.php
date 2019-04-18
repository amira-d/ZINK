
                <!-- portfolio_filter -->
                <div class="filtering" style="  float: right; position: relative; bottom: 150px;">
                  <h2 style="color: #ffbf00;font-size: 15px; font-family: stencil;">Filter by :</h2>
                  
                    
                      <div class="list-group" style="padding: 0;">
     <h1>Price</h1>
     <input type="hidden" id="hidden_minimum_price" value="10" />
                    <input type="hidden" id="hidden_maximum_price" value="2000" />
                                        <input type="hidden" name="qq"id="type" value= <?php echo $var; ?>>

                    <p id="price_show">10 - 2000</p>
                    <div id="price_range"></div>
                </div> 
                <div class="list-group">
                  <h1>Name</h1>
                       <input type="checkbox"  class="common_selector name" value="nom_P"  > 
                  


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
  <footer class="footer" >

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links" style="">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

           
         </div>

        

      </div>

   </footer> <!-- Footer End-->

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
    <script type="text/javascript" src="js/Pagination.js"></script>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
      

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
        min:10,
        max:2000,
        values:[10, 2000],
        step:100,
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