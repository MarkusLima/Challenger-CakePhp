<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?><nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('AÇÕES') ?></li>
        <li><?= $this->Html->link(__('EDITAR'), ['action' => 'edit',$user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('APAGAR'), ['action' => 'delete',$user->id], ['confirm' => __('TEM CERTEZA QUE QUER APAGAR REGISTRO{0}?',$user->id)]) ?> </li>
      </ul>
</nav>
<div class="users view large-10 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($user->state) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Dt Nascimento') ?></th>
            <td><?= h($user->dt_nascimento) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>    </table></div>
