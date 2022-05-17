<div class="body container">
    <?php include 'composants/searchProcess.php'; ?>
    <?php if(empty($user)){ ?>
    <a href="?page=login" style="float : right;">
        <button style="background-color: blue;border : 0; color: white;
           border-radius: 5px;padding:8px">Connexion </button></a>
    <a href="?page=register" style="float : right">
    <button style="background-color: blue;border : 0; color: white;
           border-radius: 5px;padding:8px;margin-right:5px">Inscription</button></a>

    <?php } ?>
    <?php if (isset($user) and $user["status"] == 1) { ?>
        <a href="?page=admin">
            <button style="background-color: blue;border : 0; color: white; border-radius: 5px;padding:8px;margin-right:5px">Accéder à la page admin</button>
        </a>    
    <?php } ?>
    <h1>Récents</h1>
    <?php include 'composants/grid.php'; ?>
</div>