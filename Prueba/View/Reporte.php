<html>

<head>

    <!-- BOOTSTARP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table id="myTable">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Due</th>
                <th>Web Site</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Smith</td>
                <td>John</td>
                <td>jsmith@gmail.com</td>
                <td>$50.00</td>
                <td>http://www.jsmith.com</td>
            </tr>
            <tr>
                <td>Bach</td>
                <td>Frank</td>
                <td>fbach@yahoo.com</td>
                <td>$50.00</td>
                <td>http://www.frank.com</td>
            </tr>
            <tr>
                <td>Doe</td>
                <td>Jason</td>
                <td>jdoe@hotmail.com</td>
                <td>$100.00</td>
                <td>http://www.jdoe.com</td>
            </tr>
            <tr>
                <td>Conway</td>
                <td>Tim</td>
                <td>tconway@earthlink.net</td>
                <td>$50.00</td>
                <td>http://www.timconway.com</td>
            </tr>
        </tbody>
    </table>


    <script>
        (function($) {
            $.fn.extend({
                makeSortable: function() {
                    var Mitabla = this;

                    var getCellValue = function(fila, index) {
                        return $(fila).children('td').eq(index).text();
                    };

                    Mitabla.find('th').click(function() {
                        var tabla = $(this).parents('table').eq(0);

                        
                        var fila = tabla.find('tr:gt(0)').toArray().sort(function(a, b) {
                            var index = $(this).index();
                            var valA = getCellValue(a, index),
                                valB = getCellValue(b, index);

                            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
                        });

                        this.asc = !this.asc;

                        if (!this.asc) {
                            fila = fila.reverse();
                        }

                        for (var i = 0; i < fila.length; i++) {
                            tabla.append(fila[i]);
                        }
                    });
                }
            });
        })(jQuery);


        $(function() {
            $("#myTable").makeSortable();
        });
    </script>
</body>

</html>