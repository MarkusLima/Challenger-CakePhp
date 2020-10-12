<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container-fluid">
    <h3><?= __('USUÁRIOS') ?></h3>
    <div class="row">
        <?php foreach ($users as $user) : ?>
            <div class="col col-lg-4">
                <div class="card shadow-lg p-3 mb-5 bg-ligth rounded">
                    <div><span class="text-primary">ID: </span><span class="text-secondary"><?= $this->Number->format($user->id) ?></span></div>
                    <div><span class="text-primary">NOME: </span><span class="text-secondary"><?= h($user->name) ?></span></div>
                    <div><span class="text-primary">CPF: </span><span class="text-secondary"><?= h($user->cpf) ?></span></div>
                    <div><span class="text-primary">NASCIMENTO: </span><span class="text-secondary"><?= h($user->dt_nascimento) ?></span></div>
                    <div><span class="text-primary">E-MAIL: </span><span class="text-secondary"><?= h($user->email) ?></span></div>
                    <div><span class="text-primary">TEL: </span><span class="text-secondary"><?= h($user->phone) ?></span></div>
                    <div><span class="text-primary">ENDEREÇO: </span><span class="text-secondary"><?= h($user->address) ?></span></div>
                    <div><span class="text-primary">CIDADE: </span><span class="text-secondary"><?= h($user->city) ?></span></div>
                    <div><span class="text-primary">ESTADO: </span><span class="text-secondary"><?= h($user->state) ?></span></div>
                    <div><span class="text-primary">CRIADO EM: </span><span class="text-secondary"><?= h($user->created) ?></span></div>
                    <div class="actions text-center">
                        <?= $this->Html->link(__('VER'), ['action' => 'view', $user->id], ['class'=>'text-white bg-success p-1 mb-1']) ?>
                        <?= $this->Html->link(__('EDITAR'), ['action' => 'edit', $user->id], ['class'=>'text-white bg-warning p-1 mb-1']) ?>
                        <?= $this->Form->postlink(__('DELETAR'), ['action' => 'delete', $user->id], ['class'=>'text-white bg-danger p-1 mb-1'], ['confirm' => __('TEM CERTEZA QUE QUER APAGAR REGISTRO{0}?', $user->id)]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, {{current}} regristro(s) - {{count}} total')]) ?></p>
    </div>
</div>