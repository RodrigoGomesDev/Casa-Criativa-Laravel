<div id="modal" class="hide">
    <div class="content-modal">
        <h1 class="mt-2">Nova Ideia</h1>
        
    <form action="{{ route('create') }}" method="POST" class="mt-3">
        @csrf
            <div class="form-group">
                <label for="title" class="form-label">Título da ideia</label>
                <input type="text" id="title" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="category" class="form-label">Categoria</label>
                <input type="text" id="category" class="form-control" name="category" required>
            </div>

            <div class="form-group">
                <label for="image" class="form-label">Imagem para a ideia</label>
                <input type="url" id="image" class="form-control" name="image" required>
            </div>
                
            <div class="form-group">
                <label for="description" class="form-label">Descrição</label>
                <textarea cols="20" rows="3" id="description" class="form-control" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="url" class="form-label">URL</label>
                <input type="url" id="url" class="form-control" name="link" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-outline-light px-4" onclick="onOff()">Voltar</a>
                <button type="submit" class="btn btn-light px-4" style="color: #ff5E84">Salvar</button>        
            </div>
        </form>
    </div>  
</div>