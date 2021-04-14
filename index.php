<header>
    <?php
    include_once('template/header.php');
    include_once('view/viewAddProduc.php');
    include_once('view/viewAddCategory.php');
    ?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />

</header>

<div class="row">
    <div class="col-sm-3"></div>

</div>



<div class="row">


    <div class="col-md-2 col-lg-2 border " id="red" style=" background: #343A40; height: 800px;">
        <div class="container">
            <br>
            <center>

                <a href=""><img src="img/presupuesto.png" style="width: 100px; " alt=""></a>
                <br>
            </center>
            
            <button type="button" class="btn btn-dark" style="width: 100%;">HOME</button>
            <button type="button" class=" btn btn-dark" style="width: 100%;">Reportes </button>
           





        </div>
    </div>
<br>
    <div class="container col-md-10 col-lg-10 border "  style="text-align: center;">
    <center>
    <div class="row">
    <div class="col-md 5">
    <h1 class="group-text">Data Tables</h1>

    </div>
    <div class="col-md-5">
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalAddProduct"    > <img src="img/agregar.png" alt="" style="width: 25px;"> </button>
    </div>
    </div>
    
    </center>
            <table id="tableView" class="table table-striped table-bordered " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col"> PRODUCTO</th>
                        <th scope="col"> MARCA</th>
                        <th scope="col"> CATEGORIA</th>
                        <th scope="col"> DISTRIBUIDOR</th>
                        <th scope="col"> CANTIDAD</th>
                        <th scope="col"> PRECIO/Uni</th>    
                        <th scope="col"> PRECIO</th>
                        <th scope="col"> ACCIONES</th>
                        



                    </tr>
                </thead>

            </table>

           
        </div>
        
    

    





    <footer>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableView').DataTable({
                    "ajax":{
                        "method": "POST",
                        "url": "controller/selectTableProduc.php"

                    },
                    "columns":[
                        {"data": "name_product"},
                        {"data": "model_product"},
                        {"data": "distributor_product"},
                        {"data": "category_product"},
                        {"data": "cant_product"},
                        {"data": "price_product"},
                        {"data": "price_businessman"}

                    ]



                });
            });
        </script>

        



        <?php
        include_once('template/footer.php');
        ?>
    </footer>