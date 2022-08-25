<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <table id="impressos" class="table table-striped" width="100%">
                    <thead>
                        <th class="th-sm"> Nº Impressões </th>
                        <th class="th-sm"> Servidor </th>
                        <th class="th-sm"> Editar </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td> 
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#impressos').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

</body>