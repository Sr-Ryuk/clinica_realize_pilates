@extends('admin.layouts.app')

@section('title', 'Alunos')

@section('content')

@include('admin.alunos.modals.create')
@include('admin.alunos.modals.edit')




<!-- Cabeçalho -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Alunos</h2>

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateAluno">
        <i class="bi bi-person-plus"></i> Novo Aluno
    </button>
</div>

<!-- Alert de sucesso -->
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Card principal -->
<div class="card shadow-sm">
    <div class="card-body p-0">

        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Status</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->telefone }}</td>

                    <td>
                        <span class="badge bg-{{ $aluno->status === 'ativo' ? 'success' : 'secondary' }}">
                            {{ ucfirst($aluno->status) }}
                        </span>
                    </td>

                    <td class="text-end">

                        <button
                            class="btn btn-sm btn-warning btn-edit"
                            data-id="{{ $aluno->id }}">
                            <i class="bi bi-pencil"></i>
                        </button>

                        <button
                            type="button"
                            class="btn btn-sm btn-danger btn-delete"
                            data-id="{{ $aluno->id }}">
                            <i class="bi bi-trash"></i>
                        </button>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center p-4 text-muted">
                        Nenhum aluno encontrado.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>

    <!-- Paginação -->
    <div class="p-3">
        {{ $alunos->links() }}
    </div>
</div>

@endsection


{{-- ============================================================
     SCRIPTS (SweetAlert + AJAX)
=============================================================== --}}
@push('app')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // DELETE com SweetAlert2
        document.querySelectorAll('.btn-delete').forEach(btn => {
            btn.addEventListener('click', function() {

                const id = this.dataset.id;

                Swal.fire({
                    title: "Tem certeza?",
                    text: "Esta ação não poderá ser desfeita!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#6c757d",
                    confirmButtonText: "Sim, excluir",
                    cancelButtonText: "Cancelar"
                }).then((result) => {

                    if (result.isConfirmed) {

                        const form = document.createElement('form');
                        form.action = `/admin/alunos/${id}`;
                        form.method = 'POST';

                        const csrf = document.createElement('input');
                        csrf.type = 'hidden';
                        csrf.name = '_token';
                        csrf.value = '{{ csrf_token() }}';
                        form.appendChild(csrf);

                        const method = document.createElement('input');
                        method.type = 'hidden';
                        method.name = '_method';
                        method.value = 'DELETE';
                        form.appendChild(method);

                        document.body.appendChild(form);
                        form.submit();
                    }

                });

            });
        });


        // EDIT: Carregar formulário via AJAX
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', async function() {

                const id = this.dataset.id;

                // Definir rota do UPDATE
                document.getElementById('formEditAluno').action = `/admin/alunos/${id}`;

                const modal = new bootstrap.Modal(document.getElementById('modalEditAluno'));
                modal.show();

                // Carregar HTML do form
                const response = await fetch(`/admin/alunos/${id}`);
                const html = await response.text();

                document.getElementById('editAlunoBody').innerHTML = html;
            });
        });

    });
</script>
@endpush