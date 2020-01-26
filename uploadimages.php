<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/formulaires.js"></script>
    <?php include __DIR__ . '/tmp/template/headerDenis.tpl '; ?>
</head>

<body>
<?php include __DIR__ . '/tmp/template/menu-ren.tpl ' ?>
<h3 style="margin-top: 5%; margin-bottom: 5%; text-align: center">Ajouter les images:</h3>

<?php
require __DIR__.'/libs/Smarty/libs/Smarty.class.php';
$smarty1 = new Smarty();
$smarty1->setTemplateDir(__DIR__.'/tmp/template');
$smarty1->setCompileDir(__DIR__.'/tmp/template_c');
$smarty1->setCacheDir(__DIR__.'/tmp/cashe');
$smarty1->setCompileDir(__DIR__.'/tmp/configs');
$smarty1->assign('idNumeroC', $_POST['idNumeroC']);
$smarty1->display('form_Dropzone.tpl');

include __DIR__ . '/tmp/template/Script_Dropzone.tpl '; ?>

<?php include __DIR__ . '/tmp/template/footer.tpl ' ?>
</body>

<?php
if (isset($_POST['submitN'])) {

    try {
        $num_circuit = $_POST['idNumeroC'];
        //@mkdir('upload/circuits/'.$num_circuit);
        $_SESSION['numCircuit'] = $num_circuit;
    }
    catch (Exception $e) {
        print $e->getMessage();
    }
}?>

</html>


