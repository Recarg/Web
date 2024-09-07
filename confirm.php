<?php
     if (isset($_POST["codigoBarras"]) && isset($_POST["amount"]) && isset($_POST["type"])) {
        $codigoBarras = $_POST["codigoBarras"];
        $amount = $_POST["amount"];
        $pago = $_POST["type"];
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

        <style>
            input { margin: -7;}
            .control-container {padding-top: 0;}
            svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1em}.svg-inline--fa.fa-stack-2x{height:2em;width:2em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}
        </style>
   </head>
   <body>
    <div class="wrapper">
            <div class="step-container">
        <a href="#" class="step"></a>
        <a class="step active"></a>
        <a class="step"></a>
    </div>

        <div class="container">
                <div class="payment-title">
        Formulario de Pago
    </div>

    <form id="paymentForm">
    <input type="hidden" name="codigoBarras" value="<?php echo $codigoBarras; ?>"></input>
    <input type="hidden" name="amount" value="<?php echo $amount; ?>"></input>
    <input type="hidden" name="pago" value="<?php echo $pago; ?>"></input>
        <div class="payment-body">
            <div class="row">
                <div class="col-md-12">
                  <div class="cards">
		      <img src="https://static.pagospyme.com/pagofacil/tarjetas.png">
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 control-container">
                    <span class="input input--isao">
                        <input style="width: 409px !important; padding: 3px !important;" type="text" id="card" name="card" class="input__field input__field--isao" autocomplete="off" checkout-id="cardNumber" onpaste="return false;">
                        <label class="input__label input__label--isao" data-content="Número de tarjeta">
                            <span class="input__label-content input__label-content--isao">Número de tarjeta</span>
                        </label>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 control-container">
                    <span class="input input--isao">
                        <input style="width: 193px !important;margin-top: 1.5px;padding: 3px;" type="text" id="venc" name="venc" class="input__field input__field--isao" autocomplete="off" checkout-id="dueDate" data-toggle="tooltip" data-placement="top" title="" maxlength="5" data-original-title="Solo números">
                        <label class="input__label input__label--isao" data-content="Vencimiento (MM/AA)">
                            <span class="input__label-content input__label-content--isao">Vencimiento (MM/AA)</span>
                        </label>
                    </span>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 control-container">
                    <span class="input input--isao" id="cvv-field">
                        <svg class="svg-inline--fa fa-question-circle fa-w-16 cvv-tooltip-icon-pf" aria-hidden="true" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg><!-- <i class="far fa-question-circle cvv-tooltip-icon-pf"></i> -->
                        <div class="cvv-tooltip-container-pf"></div>
                        <input style="width: 193px !important;margin-top: 1.5px;padding: 3px;" type="password" id="cvv" name="cvv" class="input__field input__field--isao input__tooltip" autocomplete="off" checkout-id="ccv" onpaste="return false;" maxlength="4">
                        <label class="input__label input__label--isao" data-content="Código de seguridad">
                            <span class="input__label-content input__label-content--isao input__tooltip">Código de seguridad</span>
                        </label>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 control-container">
                    <span class="input input--isao">
                        <input style="width: 409px !important; padding: 3px !important;" type="text" id="name" name="name" class="input__field input__field--isao" autocomplete="off" checkout-id="cardHolderName" onpaste="return false;">
                        <label class="input__label input__label--isao" data-content="Nombre y apellido (tal como figura en su tarjeta)">
                            <span class="input__label-content input__label-content--isao">Nombre y apellido (tal como figura en su tarjeta)</span>
                        </label>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 control-container">
                    <select id="customer_identification_type" checkout-id="identificationType">
                        <option value="DNI">DNI</option>
                    </select>
                    <span class="label-alike">Tipo de documento</span>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 control-container">
                    <span class="input input--isao">
                        <div class="cvv-tooltip-container"></div>
                        <input style="width: 193px !important;margin-top: 1.5px;padding: 3px;" maxlength="8" type="text" id="dni" name="dni" class="input__field input__field--isao" autocomplete="off" checkout-id="identificationNumber" data-toggle="tooltip" data-placement="top" title="" onpaste="return false;" data-original-title="Solo números"> 
                        <label class="input__label input__label--isao" data-content="Número de documento">
                            <span class="input__label-content input__label-content--isao">Número de documento</span>
                        </label>
                    </span>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 control-container">
                    <span class="input input--isao">
                        <input style="width: 409px !important; padding: 3px !important;" type="text" id="email" name="email" class="input__field input__field--isao" required="required" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mail inválido">
                        <label class="input__label input__label--isao" data-content="Dirección de email">
                            <span class="input__label-content input__label-content--isao">Dirección de email</span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 button-container">
                    <button type="button" id="buttonFacturaSubmit" class="button">PAGAR</button>
                </div>
            </div>
        </div>
    </form>
        </div>
        <a href="#"><img class="logo" src="img/glogo.png"></a>
    </div>
    </p>
    <?php include_once("parts/footer.php"); ?>
    </body>
</html>