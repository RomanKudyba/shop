<? ob_start(); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{$css}">
	<title>Report</title>
</head>
<body>
    <h5><small>Звіт: "Kількість проданих товарів за період"</small></h5><br>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Кількість</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $vars as $var}
                        <tr>                            
                            <td>{$var['date']}</td>
                            <td>{$var['count']}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>