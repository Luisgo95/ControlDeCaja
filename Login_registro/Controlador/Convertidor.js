var concatenar = "  ";

var zero = "Cero";

var numero = [

      [ "", "Uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"],
      [ "", "Diez", "veinte", "Treinta", "cuarenta", "cincuenta", "Sesenta", "setenta", "ochenta", "Noventa"],
      [ "", "Cien", "doscientos", "trescientos", "cuatrocientos", "Quinientos", "seiscientos", "sietecientos", "ochocientos", "nuevecientos"],
      [ '', '', "mil", "millones", "mil millones", "billón"],
      [ "Diez", "Once", "Doce", "Trece", "catorce", "quince", "dieciséis", "diecisiete", "Dieciocho", "Diecinueve"]
];


function ConvertNum(num, tt) {
    if (typeof(tt) === 'undefined') {
        tt = 0;
    }
    if(typeof(num) === 'number'){
		num = num.toString();
	}
    var let_stack = [];
    //num = num.toString();
    len = num.length;
    var chars = [];
    if (len > 3) {

        var carry = len % 3;
        var jc = 0;
        if (carry > 0) {
            chars.push(num.substring(0, carry));
        }
        for (var j = carry; len > j; j++) {
            if (jc % 3 == 0)
                chars.push(num.substring(j, j + 3));
            jc++;
        }

        var len = chars.length;
        var t = [];
        for (i = 0; len > i; i++) {

            var nn = ConvertNum(chars[i], 2);

            if (Object.prototype.toString.call(nn) === '[object Array]') {
                k = nn.join(concatenar);
                if (numero[3][len - i] != '')
                    k += numero[3][len - i];

                t.push(k);
            }

        }
        return (t.join(concatenar));
    } else {
        var ar = num.split('');
        if (parseInt(num) == 0) {
            if (tt == 0) {
                return zero;
            } else {
                return '';
            }
        }

        if (len == 3) {

            if (parseInt(ar[0] + ar[1]) == 0) {
                let_stack.push(numero[0][ar[2]]);
            } else {
                for (var i = 0; i < ar.length; i++) {
                    if (ar[i] != 0) {

                        if (i == 0)
                            let_stack.push(numero[2][ar[i]]);

                        if (i == 1) {
                            var baghi = parseInt(ar[i] + ar[i + 1]);

                            if (baghi > 19)
                                let_stack.push(numero[1][ar[i]]);
                            else
                                let_stack.push(numero[4][ar[i + 1]]);
                        }

                        if (i == 2 && ar[i] != 0) {
                            let_stack.push(numero[0][ar[i]]);
                        }
                    }
                }
            }
        } else if (len == 2) {
            if (ar[0] != 0 && ar[1] == 0) {
                let_stack.push(numero[1][ar[0]]);
            } else if (ar[1] != 0 && ar[0] != 0 && parseInt(ar[0] + ar[1]) > 20) {
                let_stack.push(numero[1][ar[0]]);
                let_stack.push(numero[0][ar[1]]);
            } else if (parseInt(ar[0] + ar[1]) < 20) {
                let_stack.push(numero[4][ar[1]]);
            } else {
                return '';
            }
        } else if (len == 1) {
            let_stack.push(numero[0][ar[0]]);
        }
        if (tt === 0)
            return let_stack.join(concatenar);
    }
    return let_stack;
}
String.prototype.tonumero = function () {
    return ConvertNum(this,0);
};
