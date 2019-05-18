function calculo(){
	var num1=Number(document.getElementById('c1').value);
	var num2=Number(document.getElementById('t1').value);

	var num3=Number(document.getElementById('c2').value);
	var num4=Number(document.getElementById('t2').value);

	var num5=Number(document.getElementById('c3').value);
	var num6=Number(document.getElementById('t3').value);

	var num7=Number(document.getElementById('abono').value);

	var saldo=((num1*num2)+(num3*num4)+(num5*num6))-(num7);
	document.getElementById('saldo').value=saldo;
	


}