
<!-- Button trigger modal Agregar categorias -->
<?php
    include_once('template/header.php');
    
    ?>
 
<div class="modal fade " id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!--action="controller/addProduc.php"-->
      <form method="post" id="formAddProduct">

        <div class="form-group">
            <div class="row">
                <div class="col-md">
                    <label for="" >Nombre del producto</label>
                    <input type="text" name="nombre" id="nombreAddProduct class=" form-control">
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md">
                    <label for="">Marca del producto</label>
                    <input type="text" name="marca" id="marcaAddProduct class=" form-control">
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md">
                    <label for="">Distribuidor</label>
                    <input type="text" name="distribuidor" id="marcaAddProduct class=" form-control">
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md">
                    <label for="">Categoria del producto</label>
                    <select name="categoria" id="cateAddProduct">
                        <option value="0">Seleccione:</option>

                        <?php
                        include_once('controller/db.php');
                        $query = "SELECT * FROM categoria ORDER by category ASC";
                        $resultado = $con->query($query);
                        while ($row = $resultado->fetch_assoc())
                            echo '<option value="' . $row['pk_category'] . '">' . $row['category'] .'</option>' ;
                            

                        ?>
                        

                    </select>
                    <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#modalAddCategory" img> Agregar formulario</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#modalAddCategory" img> Agregar</button>
                </div>
            </div>
            
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md">
                    <label for="">Cantidad</label>
                    <input type="number" name="cantidad" id="marcaAddProduct" class=" form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs ">
                    <label for="">Precio al público</label>
                </div>
                <div class="col">
                    <div class="input-group lg-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <div class="col-xs-3">
                            <input class="form-control" type="text" name="precioComer" id="precioAddProduct" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs ">
                    <label for="">Precio comerciante</label>
                </div>
                <div class="col">
                    <div class="input-group lg-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <div class="col-xs-3">
                            <input class="form-control" type="text" name="precioPub" id="precioAddProduct" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input  id="btnGuardar" name="save_task" value="Guardar" class="btn btn-success btn-block" id="nombre">
        </div>
    </form>

  
      </div>
      <div class="modal-footer">
        <button type="" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<footer>

<script type="text/javascript">
    $(document).ready(function(){

        $('#btnGuardar').click(function(){
            var datos = $('#formAddProduct').serialize();
           
            $.ajax({
                type: "POST",
                url: "controller/addProduc.php",
                data:datos,
                success: function(e){
                    if(e==11){
                        alert("Agregado con exito")
                    }else{
                        alert("Fallo en el server")
                    }

                }
            });
            return false;

        });
    });
    
    </script>
  

<?php
    include_once('template/footer.php');
    
    ?>
</footer>


