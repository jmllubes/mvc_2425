<form action="index.php/?controller=llibre&method=crear" method="post">
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <div class="form-group">
        <label for="titol">Títol</label>
        <input type="text" class="form-control" id="titol" name="titol">
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
    <div class="form-group">
        <label for="preu">Preu</label>
        <input type="text" class="form-control" id="preu" name="preu">
    </div>
    <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" id="editorial" name="editorial">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor">
    </div>
    <button type="submit" class="btn btn-primary">Insertar</button>
</form>