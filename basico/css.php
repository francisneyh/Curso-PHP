<div class="titulo">Intergração CSS</div>

<h1 center> 
    <?php //todo HTML dentro do PHP estará dentro de aspas simples ' ou aspas duplas ". E todo PHP dentro do HTML estará dentro das tags PHP < > para que se consiga interpretar código PHP 
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';
    ?>
</h1> 

<?= "<div center azul> Outra forma de me 'expressar' </div>" ?>

<br>
<div center ><button dobro><?="Legal" ?></button><div> 

<style> 
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] { /*outro tipo de seletor em CSS, exemplo no elemento h1 <h1 center>*/
        display: flex;
        justify-content: center;
    }

    <s?= "[azul]" ?> {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8?>rem;
    }

</style>

