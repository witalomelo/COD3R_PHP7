<div class="titulo"></div>

<h1 center azul>
    <?php
        echo 'ola <br>';
        echo '<small>';
        echo ' mundo';
        echo '</small>';
    ?>
</h1>

<?= 'ola <br>'; ?>

<br>
<div>
    <button center dobro>
        <?= "legal"?>
    </button>
</div>

<style>
    button {
        padding: 5px <?= 10 *2 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }
</style>


