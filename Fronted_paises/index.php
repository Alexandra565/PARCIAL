<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    fetch('http://localhost:8000/api/paises')
    .then(result=>result.json())
    .then(items=>this.setState({
        done: true,
        items
    }))
    <div>
        <table class="table table-blue table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Pais</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Idioma</th>
                    <th scope="col">Poblacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="div1"></div>
    <script src="chart.js"></script>
</body>
</html>
           