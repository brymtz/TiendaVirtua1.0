<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.9.11\themes\default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.9.11/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.9.11/themes/color.css">
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.9.11/demo/demo.css">
    <script type="text/javascript" src="../../jquery-easyui-1.9.11/jquery.min.js"></script>
    <script type="text/javascript" src="../../jquery-easyui-1.9.11/jquery.easyui.min.js"></script>
    <link rel=StyleSheet href="../../css/login.css" typr="text/css">
</head>

<body>
<div class="login">
	<h1>Login</h1>
 
    <form action="../../models/validar.php" method="post">
    	
    
    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required="required" />
        <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required="required" />
        <input type="submit" value="Ingresar">

        </form>


            <input type="button" name="Registro" id="Registro" value="Registrarse" onclick="newUser()"/>

        


   
</div>

<div id="dlg" name="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" name="dlg" method="post" novalidate style="margin:0;padding:20px 50px" action="../../models/registro.php">
        <input type="hidden" id="op" name="op" value="insertarUsuario">
            <h3>Crear usuario</h3>
            <div style="margin-bottom:10px">
                <input name="NOM_USU" class="easyui-textbox" required="true" label="Usuario:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="CLAVE_USU" class="easyui-textbox" required="true" label="Clave:" style="width:100%">
            </div>
        </form>
    </div>

    <div id="dlg-buttons">
        <a href="#" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="submitForm()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>

<script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('load');
            url = 'save_user.php';
        }


        function submitForm(){
            $('#fm').form("submit");
            $('#fm').form({
                success:function(data){
                    console.log(data);
                    if(data.indexOf("ERROR")!==-1){
                        $.messager.alert("ERROR",data,"ERROR");
                    }else{
                        $.messager.alert(data);
                    }
                }
            });
        }

      

        
        

    
        
    </script>
   
</body>

</html>