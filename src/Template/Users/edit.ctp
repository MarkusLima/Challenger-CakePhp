<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="users form large-12 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('EDITAR USUÁRIO') ?></legend>


        <?php

        echo $this->Form->control('name', ['label' => 'Nome']);
        echo $this->Form->control('cpf', ['label' => 'CPF']);
        echo $this->Form->control('dt_nascimento', ['label' => 'NASCIMENTO']);
        echo $this->Form->control('email', ['label' => 'E-MAIL']);
        echo $this->Form->control('phone', ['label' => 'TEL']);
        echo $this->Form->control('address', ['label' => 'ENDEREÇO']);
       
        ?>
       <label>Estado:</label>
		<select id="state" name="state" >
			<option value="<?= h($user->state) ?>"><?= h($user->state) ?></option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espirito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MT">Mato Grosso</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
        <input type="button" id="VerificationState" value="Buscar cidades" /><br /><br />
        
        <label>Cidade</label>
		<select id="city" name="city" disabled="disabled">
			<option value="">Selecione</option>
        </select>
        
    </fieldset>
    <?= $this->Form->button(__('ATUALIZAR')) ?>
    <?= $this->Form->end() ?>

    <button><?= $this->Html->link(__('CANCELAR'), ['action' => 'index'], ['class'=>'text-white']) ?> </button>
</div>

<script>
	var city = document.getElementById('city');

	const buscar = (state) => {
		city.innerHTML = '';
		let url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${state}/distritos`;
		fetch(url)
			.then((res) => {
				if (res) {
					res.json()
						.then((json) => {
							city.removeAttribute('disabled');
							for (var i = 0; i < json.length; i++) {
								city.innerHTML = city.innerHTML +
									'<option value="' + json[i]['nome'] + '">' + json[i]['nome'] + '</option>';
							}
						});
				}
			});
	}

	let btnVerificar = document.querySelector('#VerificationState');
	btnVerificar.addEventListener('click', function(e) {
		const INPUT_ESTADO = document.querySelector('#state');
		buscar(INPUT_ESTADO.value);
	});
</script>