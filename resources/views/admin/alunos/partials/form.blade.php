<div class="row g-3">

    <div class="col-md-6">
        <label class="form-label">Nome*</label>
        <input type="text" name="nome" class="form-control"
            value="{{ old('nome', $aluno->nome ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
            value="{{ old('email', $aluno->email ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control"
            value="{{ old('telefone', $aluno->telefone ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Data de nascimento</label>
        <input type="date" name="data_nascimento" class="form-control"
            value="{{ old('data_nascimento', $aluno->data_nascimento ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="ativo" @selected(old('status', $aluno->status ?? '') == 'ativo')>Ativo</option>
            <option value="inativo" @selected(old('status', $aluno->status ?? '') == 'inativo')>Inativo</option>
        </select>
    </div>

</div>