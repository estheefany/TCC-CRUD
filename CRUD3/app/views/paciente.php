<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('paciente/salvar/'._v($data,"id"))?>'>

    <br><br>
    <h1>CADASTRO DE PACIENTES</h1>
    <h6>MED.ONLINE</h6><br>

    <label class='col-md-6'>
        Sus
        <input type="text" class="form-control" name="sus" value="<?=_v($data,"sus")?>">
    </label><br>

    <label class='col-md-6'>
        Nome Completo
        <input type="text" class="form-control" name="nome" value="<?=_v($data,"nome")?>">
    </label><br>

    <label class='col-md-6'>
        Email
        <input type="email" class="form-control" name="email" value="<?=_v($data,"email")?>">
    </label><br>

    <label class='col-md-3'>
        Senha
        <input type="password" class="form-control" name="senha" value="">
    </label><br>

    <label class='col-md-3'>
        Data de nascimento
        <input type="text" class="form-control" name="dataNascimento" value="<?=_v($data,"dataNascimento")?>">
    </label><br>

    <!--<label class='col-md-4 d-flex'>
        Sexo <br>
        <label class='col-md-2'>
            <input type="radio" class="form-check-input" name="sexo" value="m"
                <?=_v($data,"sexo") == "m" ? 'checked' : '' ?>>
            M
        </label>

        <label class='col-md-2'>
            <input type="radio" class="form-check-input" name="sexo" value="f"
                <?=_v($data,"sexo") == "f" ? 'checked' : '' ?>>
            F
        </label>
    </label><br> -->

    <label>
        Sexo
        <label class="col-md-4 d-flex">
            <label class='col-md-2'>
                <input type="radio" class="form-check-input" name="sexo" value="m"
                    <?=_v($data,"sexo") == "m" ? 'checked' : '' ?>>
                M
            </label>

            <label class='col-md-2'>
                <input type="radio" class="form-check-input" name="sexo" value="f"
                    <?=_v($data,"sexo") == "f" ? 'checked' : '' ?>>
                F
            </label>
        </label>
    </label><br>

    <button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
    <a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("paciente")?>">Novo</a>

</form>
<br><br>
<hr>
<br>
<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Sus</th>
        <th>Nome Completo</th>
        <th>Email</th>
        <th>Data de nascimento</th>
        <th>Sexo</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

    <tr>
        <td>
            <a href='<?=route("paciente/index/{$item['id']}")?>'>Editar</a>
        </td>
        <td><?=$item['sus']?></td>
        <td><?=$item['nome']?></td>
        <td><?=$item['email']?></td>
        <td><?=$item['dataNascimento']?></td>
        <td><?=$item['sexo']?></td>
        <td>
            <a href='<?=route("paciente/deletar/{$item['id']}")?>'>Deletar</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>