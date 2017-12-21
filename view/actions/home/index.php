<?php 
    if(isset($_SESSION['logado'])){
        $mandaPara = ROOT_URL."share";
    }
    else{
        $mandaPara = ROOT_URL."users/login";
    }
?>

<div class="text-center">
    <h1>Bem-vindo ao Product Manager</h1>
    <p>Quer ver algo bem legal?</p>
    <a href="<?php echo $mandaPara; ?>"><button class="btn btn-secondary">Vamos lá</button></a>
</div>
