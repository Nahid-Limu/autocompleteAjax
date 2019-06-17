<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

</head>
<body>
    <h1>AutoComplete</h1>
    <input class="form-control" type="text"name="country" id="country" placeholder="Enter Country Name">
    <div  id="countrylist">
    	
    </div>

    <div id="data">
    	
    </div>
    
</body>
</html>

<script>


            $(document).ready(function () {

            	$("#country").keyup(function() {
            		
            		var query = $(this).val();

            		if (query != '') {

            			$.post("search.php",{query:query}, function (data) {

	                        $("#countrylist").fadeIn();
	                        $("#countrylist").html(data);

                    		});
            			}
            	});
            
                $(document).on('click', 'li', function() {
                	
                	$('#country').val($(this).text());
                	$('#countrylist').fadeOut();

                	var data = $('#country').val();
                	

                	$('#data').append(data);

                });

            });
        </script>