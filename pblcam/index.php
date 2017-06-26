<!DOCTYPE html>
<html>

    <head>
        <META charset="utf8"/>
        <!--<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Flash Entregas</title>
    </head>
    
    <body>
        <div class="wrapper">
            <hr></hr>
            
            <h3><center>Cadastro de Itens</center></h3>
            <h2></h2>
            
            <form method="post" action="form1.php">
                        
             <!--//////////////////////////////// FORMULARIO 1 \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
             
            &nbsp; Informe nome do cliente: <input type="text" name="nome" size="40"/> &nbsp;&nbsp;
            &nbsp; Informe o destino:&nbsp; 
            <select name="destino1">
                <option value="selecione">selecione</option>
                <option value="jupter">Bairro Júpiter</option>
                <option value="terra">Bairro Terra</option>
                <option value="venus">Bairro Vênus</option>
                <option value="saturno">Bairro Saturno</option>
                <option value="urano">Bairro Urano</option>
            </select>
            </br></br>
            &nbsp; Informe o tipo do item:&nbsp;&nbsp;
            <input type="RADIO" name="item1" value=2/> Geladeira &nbsp;
            <input type="RADIO" name="item1" value=0.5/> Fogão &nbsp;
            <input type="RADIO" name="item1" value=0.10/> Televisão &nbsp;
            <input type="RADIO" name="item1" value=0.07/> Microondas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp; Informe a quantidade de itens: <input type="number" name="qtitens1" min="0" max="100" step="1" value="0"/>
            &nbsp; Selecione caminhão:&nbsp;
            <select name="caminhao1">&nbsp;&nbsp;
                <option value="selecione">selecione</option>
                <option value="tresquartos">CAMINHÃO 3/4</option>
                <option value="troco">CAMINHÃO TROCO</option>
                <option value="truck">CAMINHÃO TRUCK</option>
            </select>
            
            <br><br><br><br>
            
             <!--//////////////////////////////// FORMULARIO 2 \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
            
            &nbsp; Informe nome do cliente: <input type="text" name="nome" size="40"/> &nbsp;&nbsp;
            &nbsp; Informe o destino:&nbsp; 
            <select name="destino2">
                <option value="selecione">selecione</option>
                <option value="jupter">Bairro Júpiter</option>
                <option value="terra">Bairro Terra</option>
                <option value="venus">Bairro Vênus</option>
                <option value="saturno">Bairro Saturno</option>
                <option value="urano">Bairro Urano</option>
            </select>
            </br></br>
            &nbsp; Informe o tipo do item:&nbsp;&nbsp;
            <input type="RADIO" name="item2" value=2/> Geladeira &nbsp;
            <input type="RADIO" name="item2" value=0.5/> Fogão &nbsp;
            <input type="RADIO" name="item2" value=0.10/> Televisão &nbsp;
            <input type="RADIO" name="item2" value=0.07/> Microondas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp; Informe a quantidade de itens: <input type="number" name="qtitens2" min="0" max="100" step="1" value="0"/>
            &nbsp; Selecione caminhão:&nbsp;
            <select name="caminhao2">&nbsp;&nbsp;
                <option value="selecione">selecione</option>
                <option value="tresquartos">CAMINHÃO 3/4</option>
                <option value="troco">CAMINHÃO TROCO</option>
                <option value="truck">CAMINHÃO TRUCK</option>
            </select>
            
            <br><br><br><br>
            
             <!--//////////////////////////////// FORMULARIO 3 \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
            
            &nbsp; Informe nome do cliente: <input type="text" name="nome" size="40"/> &nbsp;&nbsp;
            &nbsp; Informe o destino:&nbsp; 
            <select name="destino3">
                <option value="selecione">selecione</option>
                <option value="jupter">Bairro Júpiter</option>
                <option value="terra">Bairro Terra</option>
                <option value="venus">Bairro Vênus</option>
                <option value="saturno">Bairro Saturno</option>
                <option value="urano">Bairro Urano</option>
            </select>
            </br></br>
            &nbsp; Informe o tipo do item:&nbsp;&nbsp;
            <input type="RADIO" name="item3" value=2/> Geladeira &nbsp;
            <input type="RADIO" name="item3" value=0.5/> Fogão &nbsp;
            <input type="RADIO" name="item3" value=0.10/> Televisão &nbsp;
            <input type="RADIO" name="item3" value=0.07/> Microondas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp; Informe a quantidade de itens: <input type="number" name="qtitens3" min="0" max="100" step="1" value="0"/>
            &nbsp; Selecione caminhão:&nbsp;
            <select name="caminhao3">&nbsp;&nbsp;
                <option value="selecione">selecione</option>
                <option value="tresquartos">CAMINHÃO 3/4</option>
                <option value="troco">CAMINHÃO TROCO</option>
                <option value="truck">CAMINHÃO TRUCK</option>
            </select>
            <br></br>
        
            <table border="1" align="center"> 
        
                <tr><br>
                    <th>&nbsp; CAMINHÕES &nbsp; </th>
                    <th>&nbsp; VOL. COMPORTADO &nbsp; </th>
                    <th>&nbsp; CONSUMO km/L &nbsp; </th>
                </tr>
                
                <tr>
                    <td>&nbsp; CAMINHÃO 3/4 &nbsp; </td>
                    <td align="center">&nbsp; 29 m³ &nbsp; </td>
                    <td align="center">&nbsp; 7.00 &nbsp; </td>
                </tr>
                
                <tr>
                    <td>&nbsp; CAMINHÃO TOCO &nbsp; </td>
                    <td align="center">&nbsp; 44 m³ &nbsp; </td>
                    <td align="center">&nbsp; 6.50 &nbsp; </td>
                </tr>
                
                <tr>
                    <td>&nbsp; CAMINHÃO TRUCK &nbsp; </td>
                    <td align="center"> &nbsp; 58 m³ &nbsp; </td>
                    <td align="center">&nbsp; 6.50 &nbsp; </td>
                </tr>
            
            </table> 
                    
            <br><br>
            
            <center><input type="submit" name= "acao" value="ADICIONAR"/></center>
        </br></br>
    </div>
        
    </body>

</html>

