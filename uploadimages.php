<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include __DIR__ . '/tmp/template/headerDenis.tpl ' ?>
<body>
<p style="margin-top: 5%; margin-bottom: 5%; text-align: center">Ajouter les images:</p>

<?php include __DIR__ . '/tmp/template/uploadimgs.tpl ' ?>
</body>
</html>
<?php
if (isset($_POST['submitN'])) {

    try {

        $num_circuit = $_POST['idNumeroC'];
        $mkdir = @mkdir('upload/'.$num_circuit);
        $_SESSION['numCircuit'] = $num_circuit;

    }
    catch (Exception $e) {
        print $e->getMessage();
    }
}


