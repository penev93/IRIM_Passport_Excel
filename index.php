<!DOCTYPE html>
<html>
<?php

?>

<head>
<title>Task - Front End Developer (PHP , MSQL)</title>
<meta charset="UTF-8">
<style>
  td
{
	font-size:14px;
	font-weight: bold;
	padding-left:20px;
}

</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src='./init.js' type="text/javascript"></script>
  <script>
 $(function() {
  // this initializes the dialog (and uses some common options that I do)
  $("#dialog").dialog({autoOpen : false, modal : true, show : "blind", hide : "blind",width: '90%'});

  // next add the onclick handler
  $("#sub").on("submit",function(){
  	$("myForm")[0].reset();;
   // $("#dialog").dialog("open");


    //x();





//    return false;
  });
});

 </script>
</head>

<body>



<style>

#sub
{
	position: relative;
	display: block;
	width: 20%;
	height: 50px;
	font-weight: bold;
	left:48%;
	font-size:30px;
	color:white;
	background-color:green;
}
td
{
	text-align: right;
}

input[type="text"]
{
	width:250px;
}
</style>

<form id="myForm" action="handler.php" method="POST">

<table>

<tr>

<!--// ПАСПОРТ ЗА КОМПЮТЪРНА КОНФИГУРАЦИЯ Номер A3-->
<td><label for="КОМПЮТЪРНА КОНФИГУРАЦИЯ">ПАСПОРТ ЗА КОМПЮТЪРНА КОНФИГУРАЦИЯ № :</label></td>
	<td><input type="text" name="PC_Conf" id='PCConfNum'></input></td>
		</tr>

		<tr>
		<td>
		<!--//Местоположение на компютърна конфигурация 	C4-->
		<label for="Местоположение на компютърна конфигурация">Местоположение на компютърна конфигурация  : </label>
		</td>
		<td>
		<input type="text" name="place" id='PCPlace'></input>
		</td>
		</tr>

		<tr>
	<!--//Име PC B6-->
	<td><label for="Име PC">Име PC  : </label></td>
		<td><input type="text" name="name" id='PCName'></input></td>
		</tr>
<!--	//Потребител B7-->
	<tr>
		<td><label for="Потребител">Потребител  : </label></td>
		<td><input type="text" name="user" id='User'></input></td>
	</tr>

	<tr>
	<!--//Група D7-->

	<td><label for="Група">Група  : </label></td>
		<td><input type="text" name="group" id='Group'></input></td>
		</tr>

		<tr>
	<!--//Операционна система B8-->
<td><label for="Операционна система">Операционна система  : </label></td>
		<td><input type="text" name="os" id='OS'></input></td>
		</tr>

		<tr>
	<!--//Лиценз номер B9-->
		<td><label for="Лиценз">Лиценз  : </label></td>
		<td><input type="text" name="license" id='License'></input></td>
		</tr>

		<tr>
	<!--//MAC адрес B10-->
		<td><label for="MAC адрес">MAC адрес  : </label></td>
		<td><input type="text" name="mac" id='MAC'></input></td>
		</tr>

		<tr>
	<!--//IP адрес B11-->
	<td>	<label for="IP адрес">IP адрес  : </label></td>
		<td><input type="text" name="ip" id='IP'></input></td>
</tr>
	<tr>
	<!--//Закупен цена B12-->
	<td> <label for="Закупен цена">Закупен цена  : </label></td>
		<td><input type="text" name="price" id='Price'></input>	</td>
	</tr>



<!--	//HDD B14-->
<tr>
<td>	<label for="HDD">HDD  : </label></td>
	<td>	<input type="text" name="hdd" id='HDD'></input>	</td>
</tr>

<tr>
	<!--//RAM B15-->
	<td><label for="RAM">RAM  : </label></td>
		<td><input type="text" name="ram" id='RAM'></input>	</td>
</tr>
<tr>
	<!--//Процесор B16-->
<td>	<label for="Процесор">Процесор  : </label></td>
	<td>	<input type="text" name="processor" id='Processor'></input>	</td>
</tr>

<tr>
	<!--//Видео карта B17-->
	<td>	<label for="Видео карта">Видео карта  : </label>	</td>
			<td><input type="text" name="displayDrive" id='Display'></input>		</td>
	</tr>

	<tr>
	<!--//Активиран интернет B19-->
	<td><label for="Активиран интернет">Активиран интернет  : </label></td>
		<td><input type="text" name="activeNet" id='ActiveInternet'></input>	</td>
		</tr>

		<tr>
	<!--//Активиран Е-mail B20-->
	<td><label for="Активиран E-mail">Активиран Е-mail  : </label></td>
		<td><input type="text" name="activeEmail" id='Email'></input>		</td>
		</tr>

		<tr>
	<!--//Чат клиент(име) B21-->
		<td><label for="Чат клиент(име)">Чат клиент(име)  : </label></td>
		<td><input type="text" name="ChatClient" id='Chat'></input>		</td>
		</tr>

		<tr>
	<!--//Достъп към сървар B22-->
	<td><label for="Достъп към сървар">Достъп към сървар  : </label></td>
		<td><input type="text" name="AccessServer" id='Server'></input>		</td>
		</tr>

		<tr>
	<!--//Използва принтер B23-->
	<td><label for="Използва принтер">Използва принтер  : </label></td>
	<td>	<input type="text" name="usePrinter" id='Printer'></input>		</td>
		</tr>

		<tr>
	<!--//Разрешени USB B24-->
	<td><label for="Разрешени USB">Разрешени USB  : </label></td>
		<td><input type="text" name="perUSB" id='USB'></input>			</td>
		</tr>



	<tr>
	<td>
	<!--//Office B27 Версия-->
		<label for="Office Версия">Office Версия  : </label></td>
		<td><input type="text" name="OfficeV" id='OfficeVersion'></input>			
		</td>

		<td>
	<!--//Office C27 Фактура номер -->
	<label for="Office Фактура номер">Office Фактура номер  : </label></td>
		<td><input type="text" name="OfficeInvoice" id='OfficeInvoice'></input>			</td>
		
		<td>
<!--	//Office D27 Лиценз-->
			<label for="Office Лиценз">Office Лиценз  : </label></td>
			<td><input type="text" name="OfficeLicense" id='OfficeLicense'></input>			
			</td>
</tr>

<tr>
	<!--//Microsoft Access Версия B28-->
	<td><label for="Microsoft Access Версия">Microsoft Access Версия  : </label></td>
		<td><input type="text" name="MicrosoftAccessV" id='MicrosoftAccessVersion'></input>				</td>
		
		<!--//C28		 Фактура номер -->
		<td><label for="Microsoft Access Фактура номер">Microsoft Access Фактура номер  : </label></td>
		<td><input type="text" name="MicrosoftAccessInvoice" id='MicrosoftAccessInvoice'></input>			</td>
		
		<!--//D28 Лиценз-->
		<td><label for="Microsoft Access Лиценз">Microsoft Access Лиценз  : </label></td>
		<td>	<input type="text" name="MicrosoftAccessL" id='MicrosoftAccessLicense'></input>			</td>
	</tr>


<tr>
	<!--//DEGA Версия B29-->
	<td><label for="DEGA Версия">DEGA Версия  : </label></td>
		<td><input type="text" name="DEGAV" id='DEGAVersion'></input>				</td>
		
 		<!--//Фактура номер C29-->
 		<td><label for="DEGA Фактура номер">DEGA Фактура номер  : </label></td>
		<td><input type="text" name="DEGAInvoice" id='DEGAInvoice'></input>		</td>	
		
		<!--/D29 Лиценз-->
		<td><label for="DEGA Лиценз">DEGA Лиценз  : </label></td>
		<td>	<input type="text" name="DEGAL" id='DEGALicese'></input>			</td>
	</tr>

	<tr>
	<!--//Антивирус Версия B30-->
	<td><label for="Антивирус Версия">Антивирус Версия : </label></td>
		<td><input type="text" name="AntivirusV" id='AntivirusVersion'></input></td>
		
 	<!--//Фактура номер C30-->
 	<td><label for="Антивирус Фактура номер">Антивирус Фактура номер  : </label></td>
	<td>	<input type="text" name="AntivirusInvoice" id='AntivirusInvoice'></input></td>			
		
	<!--	//D30 Лиценз-->
		<td><label for="Антивирус Лиценз">Антивирус Лиценз  : </label></td>
			<td><input type="text" name="AntivirusL" id='AntivirusLicese'></input>			</td>
		</tr>

<tr>
	<!--//Архиватор Версия B31-->
	<td><label for="Архиватор Версия">Архиватор Версия : </label></td>
		<td><input type="text" name="ArchiveV" id='ArchiveVersion'></input>				</td>
		
 		<!--//Фактура номер  C31-->
 		<td><label for="Архиватор Фактура номер">Архиватор Фактура номер  : </label></td>
		<td><input type="text" name="ArchiveInvoice" id='ArchiveInvoice'></input>		</td>	
		
		<!--//D31 Лиценз-->
		<td><label for="Архиватор Лиценз">Архиватор Лиценз  : </label></td>
			<td><input type="text" name="ArchiveL" id='ArchiveLicese'></input>			</td>
	</tr>


	<tr>
	<!--//Виртуален принтер PDF Версия B32-->
	<td><label for="Виртуален принтер PDF Версия">Виртуален принтер PDF Версия : </label></td>
		<td><input type="text" name="VirtualPrinterV" id='VirtualPrinterVersion'></input>	</td>			
		
 		<!--	//Фактура номер C32-->
 			<td><label for="Виртуален принтер PDF Фактура номер">Виртуален принтер PDF Фактура номер  : </label></td>
				<td><input type="text" name="VirtualPrinterInvoice" id='VirtualPrinterInvoice'></input>			</td>
		
			<!--//D32 Лиценз-->
	<td>		<label for="Виртуален принтер PDF Лиценз">Виртуален принтер PDF Лиценз  : </label></td>
		<td>	<input type="text" name="VirtualPrinterL" id='VirtualPrinterLicese'></input>			</td>
		</tr>

<tr>
<!--	//Imos Версия B33-->
<td>	<label for="Imos Версия ">Imos Версия  : </label></td>
	<td>	<input type="text" name="ImosV" id='ImosVersion'></input>				</td>
		
 	<!--		//Фактура номер C33-->
<td><label for="IMOS Фактура номер">Imos Фактура номер  : </label></td>
	<td>			<input type="text" name="ImosInvoice" id='ImosInvoice'></input>			</td>
		
		<!--	//D33 Лиценз-->
		<td>	<label for="Imos Лиценз">Imos Лиценз  : </label></td>
		<td>	<input type="text" name="ImosL" id='ImosLicese'></input>			</td>
			

</tr>
	
	<tr>
	<!--//Отдалечен достъп Версия B 34-->
	<td><label for="Отдалечен достъп Версия ">Отдалечен достъп Версия  : </label></td>
		<td><input type="text" name="AccessV" id='AccessVersion'></input>			</td>	
		
 		<!--//		Фактура номер  C34-->
 		<td><label for="Отдалечен достъп Фактура номер">Отдалечен достъп Фактура номер  : </label></td>
			<td>	<input type="text" name="AccessInvoice" id='AccessInvoice'></input>		</td>	
		
		<!--//D34 Лиценз-->
		<td><label for="Отдалечен достъп Лиценз">Отдалечен достъп Лиценз  : </label></td>
			<td><input type="text" name="AccessL" id='AccessLicese'></input>			</td>
</tr>

<tr>
	<!--//Autocad Версия B35-->
	<td><label for="Autocad Версия ">Autocad Версия  : </label></td>
		<td><input type="text" name="AutocadV" id='AutocadVersion'></input>			</td>	
	
 		<!--//Фактура номер  C35-->
 		<td><label for="Autocad Фактура номер">Autocad Фактура номер  : </label></td>
			<td>	<input type="text" name="AutocadInvoice" id='AutocadInvoice'></input>			</td>
				
		<!--//D35 Лиценз-->
		<td><label for="Autocad Лиценз">Autocad Лиценз  : </label></td>
			<td><input type="text" name="AutocadL" id='AutocadLicese'></input>			</td>
			
</tr>

<tr>
	<!--//DWG viewers Версия B36-->
	<td><label for="DWG Версия ">DWG viewers Версия  : </label></td>
		<td><input type="text" name="DWGV" id='DWGVersion'></input>				</td>
		
 	<!--///Фактура номер C36-->
 		<td><label for="DWG номер">DWG viewers Фактура номер  : </label></td>
			<td>	<input type="text" name="DWGInvoice" id='DWGInvoice'></input>			</td>
		
	<!--//D36 Лиценз-->
	<td><label for="DWG Лиценз">DWG viewers Лиценз  : </label>
		<td>	<input type="text" name="DWGL" id='DWGLicese'></input>			</td>
<tr>
</table>

<input id="sub"  type="submit" value="Запази паспорт">
</form>



                    
           


<script src="./jquery-3.1.0.min">	
	
</script>


 

</script>


</body>




<!--
 <div id="dialog" title="Проверка на паспорт">
               <table>
               <tr>
               <td>ПАСПОРТ ЗА КОМПЮТЪРНА КОНФИГУРАЦИЯ : </td>
               <td id="cPCConfig"> </td>
               </tr>

               <tr>
               <td>Местоположение на компютърна конфигурация  :  </td>
               <td id="cPCplace"> </td>
               </tr>

               <tr>
               <td>Име PC : </td>
               <td id="cPCName"> </td>
               </tr>

               <tr>
               <td>Потребител :  </td>
               <td id="cUser"></td>
               <td>   Група :  </td>
               <td id="cGroup"></td>
               </tr>

               <tr>
               <td>Операционна система :  </td>
               <td id="cOS"></td>
               </tr>

               <tr>
               <td>Лиценз номер :  </td>
               <td id="cLicense"></td>
               </tr>

               <tr>
               <td>MAC адрес :  </td>
               <td id="cMAC"></td>
               </tr>

               <tr>
               <td>IP адрес :  </td>
               <td id="cIP"></td>
               </tr>

               <tr>
               <td>Закупена цена :  </td>
               <td id='cPrice'></td>
               </tr>

               <tr>
               <td>HDD :  </td>
               <td id="cHDD"></td>
               </tr>

               <tr>
               <td>RAM :  </td>
               <td id="cRAM"></td>
               </tr>

               <tr>
               <td>Процесор :  </td>
               <td id="cProcessor"></td>
               </tr>

               <tr>
               <td>Видео карта :  </td>
               <td id="Display"></td>
               </tr>

               <tr>
               <td>Активиран интернет</td>
               <td id="cActiveInternet"></td>
               </tr>

               <tr>
               <td>Активиран E-mail :  </td>
               <td id="cEmail"></td>
               </tr>

               <tr>
               <td>Чат клиент (име) :  </td>
               <td id="cChat"></td>
               </tr>

                <tr>
               <td>Достъп към сървър :  </td>
               <td id="cServer"></td>
               </tr>

                <tr>
               <td>Използва принтер :  </td>
               <td id="cPrinter"></td>
               </tr>

                <tr>
               <td>Разрешени USB :  </td>
               <td id="cUSB"></td>
               </tr>
               </table>

               <table>
                <tr>
               	<th>Инсталиран софтуер</th>
               	<th>Версия</th>
               	<th>Фактура номер</th>
               	<th>Лиценз</th>
               </tr>

                <tr>
               <td>Office</td>
               <td id="cOfficeVersion"></td>
               <td id="cOfficeInvoice"></td>
               <td id="cOfficeLicense"></td>
               
               </tr>

                <tr>
               <td>Microsoft Access</td>
               <td id="cMicrosoftAccessVersion"></td>
               <td id="cMicrosoftAccessInvoice"></td>
               <td id="cMicrosoftAccessLicense"></td>
               
               </tr>

               <tr>
               <td>DEGA</td>
               <td id="cDEGAVersion"></td>
               <td id="cDEGAInvoice"></td>
               <td id="cDEGALicese"></td>
               
               </tr>

               <tr>
               <td>Антивирус</td>
               <td id="cAntivirusVersion"></td>
               <td id="cAntivirusInvoice"></td>
               <td id="cAntivirusLicese"></td>
               
               </tr>

               <tr>
               <td>Архиватор</td>
               <td id="cArchiveVersion"></td>
               <td id="cArchiveInvoice"></td>
               <td id="cArchiveLicese"></td>
               
               </tr>

               <tr>
               <td>Виртуален принтер PDF</td>
               <td id="cVirtualPrinterVersion"></td>
               <td id="cVirtualPrinterInvoice"></td>
               <td id="cVirtualPrinterLicese"></td>
              
               </tr>

               <tr>
               <td>Imos</td>
               <td id="cImosVersion"></td>
               <td id="cImosInvoice"></td>
               <td id="cImosLicese"></td>
              
               </tr>

               <tr>
               <td>Отдалечен достъп</td>
               <td id="cAccessVersion"></td>
               <td id="cAccessInvoice"></td>
               <td id="cAccessLicese"></td>
               </tr>

               <tr>
               <td>Autocad</td>
               <td id="cAutocadVersion"></td>
               <td id="cAutocadInvoice"></td>
               <td id="cAutocadLicese"></td>
               </tr>

 				<tr>
               <td>DWG viewers</td>
               <td id="cDWGVersion"></td>
               <td id="cDWGInvoice"></td>
               <td id="cDWGLicese"></td>
               </tr>

               <tr>
              <button id="xz" >zapazi </button>
               </tr>
               </table>
            </div>
            -->
</html>







