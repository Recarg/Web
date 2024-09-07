<?php
     if (isset($_POST["codigoBarras"])) {
         $codigoBarras = $_POST["codigoBarras"];
     } else {
         header("Location: index");
     }
?>
<html lang="es">
   <head>
        <?php include_once("parts/header.php"); ?>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/internal/site.css">
        <link rel="stylesheet" href="css/internal/set1.css">
        <link rel="stylesheet" href="css/internal/agente.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
   </head>
   <body>
    <div class="wrapper">
            <div class="step-container">
        <a class="step active"></a>
        <a class="step"></a>
        <a class="step"></a>
    </div>

        <div class="container">
                <div class="payment-title">
        Detalles de su pago
    </div>
    <div class="detail-body">
        <form action="confirm" method="POST">
            <input type="hidden" name="codigoBarras" value="<?php echo $codigoBarras; ?>"></input>
            <div class="row detail-item">
                <div class="col-md-6 col-xs-6 detail-title">
                    <span>Precio a pagar</span>
                </div>
                <div id="lineInputDetalle" class="v-input theme--light v-text-field v-text-field--is-booted error--text v-input--has-state" style="margin-top:0;padding-top: 0;">
                    <div class="v-input__control">
                        <div class="v-input__slot">
                            <div class="v-text-field__slot" style="width:50;">
                            <label style="padding:4px;">$ </label>
                            <input placeholder="Monto a pagar" name="amount" required="required" id="inputDetalle" type="text" required></div>
                                </div>
                                    <div class="v-text-field__details">
                                        <div class="v-messages theme--light">
                                    <div class="v-messages__wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row detail-item">
                <div class="col-md-6 col-xs-6 detail-title">
                    <span>Medio de pago</span>
                </div>
                <div class="col-md-6 col-xs-6  detail-value">
                    <select id="inputPago" class='text' name='type'>
                        <option value="none" selected disabled>Medio de pago
                        <option value='vd'>Visa Débito
                        <option value='md'>Mastercard Débito
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 button-container">
                    <button type="submit"><a id="detailsFacturaConfirmButton" class="button">SIGUIENTE</a></button>
                </div>
            </div>
        </form>
    </div>
        </div>
        <a href="https://pagosenlinea.pagofacil.com.ar/"><img class="logo" src="img/glogo.png"></a>
    </div>

    <?php include_once("parts/footer.php"); ?>
</body>
</html>