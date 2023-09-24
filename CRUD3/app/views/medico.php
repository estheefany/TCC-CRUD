<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('medico/salvar/'._v($data,"id"))?>'>

    <br><br>
    <h1>CADASTRO DE ESPECIALISTAS</h1>
    <h6>MED.ONLINE</h6><br>


    <label class='col-md-6'>
        Nome Completo
        <input type="text" class="form-control" name="nome" value="<?=_v($data,"nome")?>">
    </label><br>

    <label class='col-md-6'>
        CRM/CRO/CRE
        <input type="text" class="form-control" name="crm" value="<?=_v($data,"crm")?>">
    </label><br>

    <label class='col-md-6'>
        Especialidade
        <select name="especialidade" class="form-select" class="form-control">
            <?php
        foreach($especialidades as $k=>$esp){
            _v($data,"especialidade") == $k ? $selected='selected' : $selected='';
            print "<option value='{$k}'  $selected>{$esp}</option>";
        }
        ?>
        </select>
    </label>

    <button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
    <a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("medico")?>">Novo</a>

</form>
<br><br>
<hr>
<br>
<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Nome Completo</th>
        <th>CRM/CRO/CRE</th>
        <th>Especialidade</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

    <tr>
        <td>
            <a href='<?=route("medico/index/{$item['id']}")?>'>Editar</a>
        </td>
        <td><?=$item['nome']?></td>
        <td><?=$item['crm']?></td>
        <td><?=$especialidades[$item['especialidade']]?></td>
        <td>
            <a href='<?=route("medico/deletar/{$item['id']}")?>'>Deletar</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>