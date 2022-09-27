<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="search_result" method="GET">
						<div class="input-group input-group-lg mt-2 mb-4">
							<input class="form-control rounded-left border-0" type="search" autocomplete="off" id="search_posts" name="keyword" placeholder="Търсене..." aria-label="Search">
							<div class="input-group-append">
							<input class="btn btn-light border-0" name="submit" type="submit"value="Търси">
							</div>
						</form>   
    
    
          <script>
                // Current Date
                var weekday = ["Неделя", "Понеделник", "Вторник", "Сряда", "Четвъртък", "Петък", "Събота"],
                  month = ["Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември"],
                  a = new Date();

                jQuery('.date-today').html(weekday[a.getDay()] + ', ' + a.getDate() + ' ' + month[a.getMonth()] );
              </script>


		<!-- Jquery autocomplete -->
		<script type="text/javascript">
			$(function() {
				$( "#search_posts" ).autocomplete({
				source: 'funkcii/autocomplete.php',
				});
			});
			</script>
    
</body>
</html>

