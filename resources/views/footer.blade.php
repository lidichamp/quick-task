<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.anredia.technology">AnRedia Technology</a>, by Lydia
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-hourglass',
            	message:"{{ getTimetodeadline() }}"

            },{
                type: 'danger',
                timer: 4000
               
            });

    	});
        @if(Session::has('success'))
        $.notify({
            	icon: 'pe-7s-check',
            	message:"{{Session::get('success')}}"

            },{
                type: 'success',
                timer: 4000
               
            });
    
  @endif

  

 
  @if(Session::has('message'))
        $.notify({
            	icon: 'pe-7s-check',
            	message:"{{Session::get('message')}}"

            },{
                type: 'success',
                timer: 4000
               
            });
    
  @endif
  @if(Session::has('error'))
        $.notify({
            	icon: 'pe-7s-check',
            	message:"{{Session::get('error')}}"

            },{
                type: 'success',
                timer: 4000
            });
    
  @endif
  @if(isset($error))
        $.notify({
            	icon: 'pe-7s-help',
            	message:"{{$error}}"

            },{
                type: 'danger',
                timer: 4000
            });
    
  @endif
 
	</script>

</html>