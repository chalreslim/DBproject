<html>
<head>
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script> 
        <script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <title>AJAX Persons Example</title>
        <script>
        $(document).ready(function() {
                $( "#Schoolinput" ).change(function() {
                
                        $.ajax({
                                url: 'searchSchools.php', 
                                data: {searchSchools: $( "#Schoolinput" ).val()},
                                success: function(data){
                                        $('#Schoolresult').html(data);   
                                
                                }
                        });
                });
                
        });
        </script>
</head>
<body>
        <h3>Browse clubs and activities in a school</h3>

        <input class="xlarge" id="Schoolinput" type="search" size="50" placeholder="School Name"/>

        <div id="Schoolresult">Search Result</div>


</body>
</html>