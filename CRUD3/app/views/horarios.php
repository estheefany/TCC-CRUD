<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('horarios/salvar/'._v($data,"id"))?>'>

    <br><br>
    <h1>CRIAR HORÁRIOS</h1>
    <h6>MED.ONLINE</h6><br>


    <label class='col-md-6'>
        Data
        <input type="date" class="form-control" name="data_agenda" value="<?=_v($data,"data_agenda")?>">
    </label><br>

    <label class="col-md-6">
        Hora
        <input type="time" class="form-control" name="hora" min="07:00" max="16:00" value="<?=_v($data,"hora")?>">
    </label>

    <label class='col-md-6'>
        medico
        <select name="medico_id" class="form-select" class="form-control">
            <?php
        foreach($medicos as $med){
            _v($data,"medico_id") == $med['id'] ? $selected='selected' : $selected='';
            print "<option value='{$med['id']}'  $selected>{$med['nome']}</option>";
        }
        ?>
        </select>
    </label>

    <button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
    <a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("horarios")?>">Novo</a>

</form>
<br><br>
<hr>
<br>
<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Medico</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

    <tr>
        <td>
            <a href='<?=route("horarios/index/{$item['id']}")?>'>Editar</a>
        </td>
        <td><?=$item['data_agenda']?></td>
        <td><?=$item['hora']?></td>
        <td><?=$item['medico_nome']?></td>
        <td>
            <a href='<?=route("horarios/deletar/{$item['id']}")?>'>Deletar</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>