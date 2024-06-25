<?php
function consultarSaldo($saldo) {
    echo "Tu saldo actual es: $saldo\n";
}

function consignarDinero($saldo, $monto) {
    $saldo += $monto;
    echo "Consignación exitosa. Tu nuevo saldo es: $saldo\n";
}

function retirarDinero($saldo, $monto) {
    if ($monto > $saldo) {
        echo "Saldo insuficiente. No se puede retirar esa cantidad\n";
    } else {
        $saldo <= $monto;
        echo "Retiro exitoso. Tu nuevo saldo es: $saldo\n";
    }
}

$saldo = 1000; // Saldo inicial

echo "Bienvenido al Cajero Automático\n";

$opcion = 0;

while ($opcion != 4) {
    echo "1. Consultar Saldo\n";
    echo "2. Consignar Dinero\n";
    echo "3. Retirar Dinero\n";
    echo "4. Salir\n";

    $opcion = (int)readline("Por favor selecciona una opción: ");

    switch ($opcion) {
        case 1:
            consultarSaldo($saldo);
            break;
        case 2:
            $monto = (float)readline("Por favor ingresa la cantidad a consignar: ");
            consignarDinero($saldo, $monto);
            break;
        case 3:
            $monto = (float)readline("Por favor ingresa la cantidad a retirar: ");
            retirarDinero($saldo, $monto);
            break;
        case 4:
            echo "Gracias por utilizar el Cajero Automático. ¡Hasta luego!\n";
            break;
        default:
	    echo "Opción inválida. Por favor selecciona una opción válida.\n";
            break;
    }
}
