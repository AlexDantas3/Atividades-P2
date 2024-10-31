<?php
    include ('header.php');
?>
<?php
    include ('db.php');
?>


<div>
    <h2>Filmes Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Disponibilidade</th>
                <th>Ações</th>
            </tr>
        </thead>
    
    <tbody>
        <?php
        if(false){

        }else{
            echo "<p>Nenhum filme encontrado.</p>";
        }

        ?>
    </tbody>
    </table>
</div>


<?php
    include('footer.php');
?>