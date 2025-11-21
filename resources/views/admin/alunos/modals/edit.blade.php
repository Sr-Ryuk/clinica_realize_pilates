<div class="modal fade" id="modalEditAluno" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title fw-bold">Editar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="formEditAluno" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body" id="editAlunoBody">
                    <div class="text-center p-4 text-muted">
                        <div class="spinner-border"></div>
                        <p>Carregando...</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>

        </div>
    </div>
</div>