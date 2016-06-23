<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="STYLESHEET" href="css/print_static.css" type="text/css" />
</head>
<body>
    <div id="body">
        <div id="section_header"></div>
        <div id="content">
            <div class="page" style="font-size: 7pt">
                <table style="width: 100%;" class="header">
                    <tr>
                        <td><h1 style="text-align: left">LEGAJO DE ALUMNO </h1></td>
                        <td><h1 style="text-align: right"><?php echo ($alumno['Alumno']['nombre_completo_alumno']) ?></h1></td>
                    </tr>
                </table>
                <table style="width: 100%; font-size: 8pt;">
                    <tr>
                        <td>Documento: <strong><?php echo ($alumno['Alumno']['documento_tipo']).' '.($alumno['Alumno']['documento_nro']); ?></strong></td>
                        <td>Dirección: <strong><?php echo $alumno['Alumno']['calle_nombre'].' N° '.$alumno['Alumno']['calle_nro']; ?></strong></td>
                    </tr>
                    <tr>
                        <td>Teléfono: <strong><?php echo $alumno['Alumno']['telefono_nro']; ?></strong></td>
                        <td>Email: <strong><?php echo ($this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email'])); ?></strong></td>
                    </tr>
                    <tr>
                        <td>Ocupación: <strong><?php echo ($alumno['Alumno']['ocupacion']); ?></strong></td>
                        <td>Lugar de trabajo: <strong><?php echo ($alumno['Alumno']['lugar_de_trabajo']); ?></strong></td>
                    </tr>
                </table>
                <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">
                    <tr>
                    <td>Model: <strong>Franklin</strong></td>
                    <td>Elevation: <strong>B</strong></td>
                    <td>Size: <strong>1160 Cu. Ft.</strong></td>
                    <td>Style: <strong>Reciprocating</strong></td>
                    </tr>
                </table>
                <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">
                    <tr><td colspan="6"><h2>Familiares Relacionados:</h2></td></tr>
                    <tr class="even_row">
                        <th><?php echo $this->Paginator->sort('vinculo', 'Vinculo');?></th>
                        <th><?php echo $this->Paginator->sort('nombre_completo', 'Nombre');?></th>
                        <th><?php echo $this->Paginator->sort('telefono_nro', 'Teléfono');?></th>
                        <th><?php echo $this->Paginator->sort('email', 'Email');?></th>
                        <th><?php echo $this->Paginator->sort('domicilio', 'Domicilio');?></th>
                    </tr>
                    <tbody>                     
                        <?php foreach($alumno['Familiar'] as $familiar): ?>              
                         <tr class="list">   
                            <td style="text-align: center"><?php echo $familiar['vinculo']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['nombre_completo']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['telefono_nro']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['email']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['domicilio']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">
                    <tr><td colspan="6"><h2>Inscripciones Relacionadas:</h2></td></tr>
                    <tr class="even_row">
                        <th><?php echo $this->Paginator->sort('vinculo', 'Vinculo');?></th>
                        <th><?php echo $this->Paginator->sort('nombre_completo', 'Nombre');?></th>
                        <th><?php echo $this->Paginator->sort('telefono_nro', 'Teléfono');?></th>
                        <th><?php echo $this->Paginator->sort('email', 'Email');?></th>
                        <th><?php echo $this->Paginator->sort('domicilio', 'Domicilio');?></th>
                    </tr>
                    <tbody>                     
                        <?php foreach($alumno['Familiar'] as $familiar): ?>              
                         <tr class="list">   
                            <td style="text-align: center"><?php echo $familiar['vinculo']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['nombre_completo']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['telefono_nro']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['email']; ?></td>
                            <td style="text-align: center"><?php echo $familiar['domicilio']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>            
</body>
</html>