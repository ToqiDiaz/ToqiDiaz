
<!-- Button trigger modal Agregar categorias -->
<?php
    include_once('template/header.php');
    
    ?>
 
<div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form  method="post"  action="controller/addCategoryProduct.php">
        <div class="form-group">
            <div class="row">
                <div class="col-md justify-content-center.">
                    <label class="font-weight-bold ">Nombre de la categoria</label>
                    <input type="text" name="nombreCategoria" class=" form-control input-sm">
                    
                </div>
                
            </div>
        </div>
        <div class="form-group">
            <input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" class="btn btn-primary btn-block" >
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

  

<?php
    include_once('template/footer.php');
    
    ?>
</footer>


