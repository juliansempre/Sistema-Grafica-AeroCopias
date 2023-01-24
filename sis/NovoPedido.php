<html lang="pt-BR"> 
<head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<tittle id=titulo> </tittle>


</head>
<body>
<?php 
include '../conexao.php'; 
session_start();
?>
    <center>
    <div><a href="index.html"><input type="button" class="inicioa" value="Inicio"></a> <a href="imp/imp_arquivos/sheet001.php" target="_blank"><input type="button" class="impri" value=" Visualizar ultimo pedido "></a></div>

    <div id="principal" style="width: 100%; background-color: #D2D3D5; height: auto; margin-top:1%;">
            <form action="enviaros.php" method="POST">
<table border="0" class="tabform">
    <tr><td>Data do Pedido</td><td><input type="date" name="datadopedido"></td><td>Aprovação </td><td><input type="date" name="aprovacao"></td></tr>
    <tr><td>Entrega</td><td><input type="text" name="entrega"></td><td>Horário</td><td><input type="time" name="horario" ></td></tr>
    <tr></tr><td >Funcionário</td><td colspan="3" bgcolor="#FFFFFF" style=" border-style: groove; text-transform:uppercase;"><center> <?php echo "<b>". $_SESSION['nome']; ?></center> </td> 
    </tr>
    <tr><td>Cliente</td><td><input type="text" name="cliente"></td><td>Contato</td><td><input type="text" name="contato"></td></tr>
    <tr><td>E-mail</td><td  colspan="3"><input type="text" name="email" style="width: 400px;"></td>
    <tr><td>Arquivo salvo em</td><td  colspan="3"><input type="text" name="arquivosalvoem" style="width: 400px;"></td>

</table>

<table border="0">
<script>
function mu(){

let a = document.querySelector('#valortotal1').value;
let b = document.querySelector('#valortotal2').value;
let c = document.querySelector('#valortotal3').value;
let d = document.querySelector('#valortotal4').value;
let e = document.querySelector('#valortotal5').value;
let f = document.querySelector('#valortotal6').value;
let g = document.querySelector('#valortotal7').value;
let h = document.querySelector('#valortotal8').value;
let i = document.querySelector('#valortotal9').value;
let j = document.querySelector('#valortotal10').value;

window.mul = 
+ parseFloat(a)
+ parseFloat(b)
+ parseFloat(c)
+ parseFloat(d)
+ parseFloat(e)
+ parseFloat(f)
+ parseFloat(g)
+ parseFloat(h)
+ parseFloat(i)
+ parseFloat(j);

let res = mul.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
document.getElementById('resultado').innerHTML = res;
/*

*/
}
function resta(){


    let sinal = document.querySelector('#sinal').value;
    
    let somresta = mul - parseFloat(sinal);

    
    document.getElementById('resta').innerHTML = somresta;

    }


</script>

<!-- linha de separação --><tr > <td colspan="4" > <hr/></td></tr> <!-- linha de separação -->

<tr  style="text-align: center; font-weight: bold;"><td>Quantidade</td><td>Discriminação</td><td>Valor unitário</td><td>Valor total</td></tr>
<tr><td><input type="text" name="quantidade1" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao1"></td><td><input type="text" style="width: 100px;" name="valorunitario1"></td><td><input type="text" style="width: 80px;"  id="valortotal1" value="0" name="valortotal1" onBlur="mu()"></td></tr>
<tr><td><input type="text" name="quantidade2" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao2"></td><td><input type="text" style="width: 100px;" name="valorunitario2"></td><td><input type="text" style="width: 80px;"  id="valortotal2" value="0" name="valortotal2" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade3" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao3"></td><td><input type="text" style="width: 100px;" name="valorunitario3"></td><td><input type="text" style="width: 80px;"  id="valortotal3" value="0" name="valortotal3" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade4" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao4"></td><td><input type="text" style="width: 100px;" name="valorunitario4"></td><td><input type="text" style="width: 80px;"  id="valortotal4" value="0" name="valortotal4" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade5" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao5"></td><td><input type="text" style="width: 100px;" name="valorunitario5"></td><td><input type="text" style="width: 80px;"  id="valortotal5" value="0" name="valortotal5" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade6" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao6"></td><td><input type="text" style="width: 100px;" name="valorunitario6"></td><td><input type="text" style="width: 80px;"  id="valortotal6" value="0" name="valortotal6" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade7" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao7"></td><td><input type="text" style="width: 100px;" name="valorunitario7"></td><td><input type="text" style="width: 80px;"  id="valortotal7" value="0" name="valortotal7" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade8" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao8"></td><td><input type="text" style="width: 100px;" name="valorunitario8"></td><td><input type="text" style="width: 80px;"  id="valortotal8" value="0" name="valortotal8" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade9" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao9"></td><td><input type="text" style="width: 100px;" name="valorunitario9"></td><td><input type="text"style="width: 80px;"  id="valortotal9" value="0" name="valortotal9" onBlur="mu()" ></td></tr>
<tr><td><input type="text" name="quantidade10" style="width: 80px;"></td><td><input type="text" style="width: 300px;" name="discriminacao10"></td><td><input type="text" style="width: 100px;" name="valorunitario10"></td><td><input type="text" style="width: 80px;"  id="valortotal10" value="0" name="valortotal10" onBlur="mu()" ></td></tr>

</table>

<table>
<tr>
   <!-- linha de separação --><tr > <td colspan="4" > <hr/></td></tr> <!-- linha de separação -->
    <td colspan="1">Sinal <input onBlur="resta()" value="0" id="sinal"  type="text" name="sinal" style="width: 80px;"></td>
    <td>Resta <div id="resta"  style="background-color: #ffffff; display: inline-block; border-style: groove; width: 80px; height: 20px;"></div></td>
    <td><b>TOTAL</b> <div id="resultado" style="background-color: #ffffff; display: inline-block; border-style: groove; width: 120px; height: 25px;"></div></td>
    <td><input type="submit" value="GERAR O.S" onClick="impr()" name="GERAR" style="width: 100px; height: 45px;"></td>
</tr>

</table>

<br>
</form>
</center>
</div>
</body>

<!-- para impressão // document.getElementById('inputValor').value; --> 
</html>
