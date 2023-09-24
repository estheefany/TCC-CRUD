<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('funcionario/salvar/'._v($data,"id"))?>'>

    <br><br>
    <h1>CADASTRO DE FUNCIONÁRIOS</h1>
    <h6>MED.ONLINE</h6><br>


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
        <input type="password" class="form-control" name="senha" value="<?=_v($data,"senha")?>">
    </label><br>


    <button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
    <a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("funcionario")?>">Novo</a>

</form>
<br><br>
<hr>
<br>
<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Nome Completo</th>
        <th>Email</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

    <tr>
        <td>
            <a href='<?=route("funcionario/index/{$item['id']}")?>'>Editar</a>
        </td>
        <td><?=$item['nome']?></td>
        <td><?=$item['email']?></td>
        <td>
            <a href='<?=route("funcionario/deletar/{$item['id']}")?>'>Deletar</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>