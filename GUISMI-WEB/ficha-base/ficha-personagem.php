<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include "php\config.php";
		include "php/function.php";?>
	<script src="js/ficha-personagem.js"></script>
</head>
<body onload='inicializa()'>
<?php
	session_start(); 
	$_SESSION["idFichaAtual"] = @$_REQUEST['idFicha'];
	$idFichaAtual = $_SESSION["idFichaAtual"];
?>
    <label>nome:</label>
    <label ondblclick="modalTextBox(this)" id="nome_pers"></label>
    <input type="text" id="nome_pers_input" />
    <label>Raca:</label>
    <label ondblclick="modalTextBox(this)" id="raca_pers"></label>
	<select id="raca_pers_input" onchange='onChangeRaca(this.value)'><option>-</option>
	</select>
	<div id="caminhos_pers">
		<label>caminho:</label>
		<label ondblclick="modalTextBox(this)"></label>
		<select id="caminhos_pers_input"></select>
		<button>+</button>
	</div>
    <label>idiomas:</label>
    <label ondblclick="modalTextBox(this)" id="idiomas_pers">Draconico</label>
    <select list='idiomas_pers_input'></select>
    <button>+</button>
    <label>sanidade:</label>
    <label ondblclick="modalTextBox(this)" id="sanidade_pers">0</label>
    <input type="number" id="sanidade_pers_input" min="-4" max="0" value="0" title="" />
    <label>Nivel</label>
    <label id="nivel_pers"></label>
    <input type="number" id="nivel_pers_input" />
    <label>Experiência</label>
    <label id="exp_pers"></label>
    <input type="number" id="exp_pers_input" />
    <span id='exp_pers_nivel'>9999</span>
    <label>Descendências</label>
    <ul>
        <li>Descendência 1</li>
    </ul>
    <table> <!-- quadro de combate -->
        <caption>Quadro</caption>
        <tbody>
            <tr>
                <th>Sangue</th>
                <td id='sangue_base'>0</td>
                <td><input type="number" id='sangue_perdido' onkeyup='calculaQuadro()' onchange='calculaQuadro()'/></td>
                <td id='sangue_total'>0</td>
            </tr>
            <tr>
                <th>Vigor</th>
                <td id='vigor_base'>0</td>
                <td><input type="number"  id='vigor_perdido' onkeyup='calculaQuadro()' onchange='calculaQuadro()'/></td>
                <td id='vigor_total'>0</td>
            </tr>
            <tr>
                <th>Mana</th>
                <td id='mana_base'>0</td>
                <td><input type="number" id='mana_perdido' onkeyup='calculaQuadro()' onchange='calculaQuadro()'/></td>
                <td id='mana_total'>0</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <th>Regen. Sangue</th>
                <td id='regen_sangue_base'>0</td>
                <td id='regen_sangue_buff'>0</td>
                <td id='regen_sange_final'>0</td>
            </tr>
            <tr>
                <th>Regen. Vigor</th>
                <td id='regen_vigor_base'>0</td>
                <td id='regen_vigor_buff'>0</td>
                <td id='regen_vigor_final'>0</td>
            </tr>
            <tr>
                <th>Regen. Mana</th>
                <td id='regen_mana_base'>0</td>
                <td id='regen_mana_buff'>0</td>
                <td id='regen_mana_final'>0</td>
            </tr>
        </tbody>
    </table>
    <table>
        <caption>Atributos</caption>
        <thead>
            <tr>
                <th>Atributos</th>
                <th>R</th>
                <th>DS</th>
                <th>B.Gerais</th>
                <th>TT</th>
                <th>M5</th>
                <th>M2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>FOR</th>
                <td id="raca_for">0</td>
                <td><label id="dist_for"></label><input type="number" id="dist_for_input" /></td>
                <td><input type='number' id='bg_for' /></td>
                <td id="tt_for">0</td>
                <td id="m5_for">0</td>
                <td id="m2_for">0</td>
            </tr>
            <tr>
                <th>CON</th>
                <td id="raca_con">0</td>
                <td><label id="dist_con"></label><input type="number" id="dist_con_input"/></td>
                <td><input type='number' id='bg_con' /></td>
                <td id="tt_con">0</td>
                <td id="m5_con">0</td>
                <td id="m2_con">0</td>
            </tr>
            <tr>
                <th>AGI</th>
                <td id="raca_agi">0</td>
                <td><label id="dist_agi"></label><input type="number" id="dist_agi_input"/></td>
                <td><input type='number' id='bg_agi' /></td>
                <td id="tt_agi">0</td>
                <td id="m5_agi">0</td>
                <td id="m2_agi">0</td>
            <tr>
                <th>DES</th>
                <td id="raca_des">0</td>
                <td><label id="dist_des"></label><input type="number" id="dist_des_input"/></td>
                <td><input type='number' id='bg_des' /></td>
                <td id="tt_des">0</td>
                <td id="m5_des">0</td>
                <td id="m2_des">0</td>
            </tr>
            <tr>
                <th>INT</th>
                <td id="raca_int">0</td>
                <td><label id="dist_int"></label><input type="number" id="dist_int_input"/></td>
                <td><input type='number' id='bg_int' /></td>
                <td id="tt_int">0</td>
                <td id="m5_int">0</td>
                <td id="m2_int">0</td>
            </tr>
            <tr>
                <th>SAB</th>
                <td id="raca_sab">0</td>
                <td><label id="dist_sab"></label><input type="number" id="dist_sab_input"/></td>
                <td><input type='number' id='bg_sab' /></td>
                <td id="tt_sab">0</td>
                <td id="m5_sab">0</td>
                <td id="m2_sab">0</td>
            </tr>
            <tr>
                <th>CAR</th>
                <td id="raca_car">0</td>
                <td><label id="dist_car"></label><input type="number" id="dist_car_input"/></td>
                <td><input type='number' id='bg_car' /></td>
                <td id="tt_car">0</td>
                <td id="m5_car">0</td>
                <td id="m2_car">0</td>
			</tr>
        </tbody>
    </table>
    <table name="habitos-ficha-personagem">
        <caption>Hábitos</caption>
        <thead>
            <tr>
                <th id="tabela-habitos-compelta-habitos">Hábitos</th>
                <th>G</th>
                <th>DT</th>
                <th>BG</th>
                <th>TT</th>
                <th>M10</th>
                <th>M5</th>
            </tr>
        </thead>
		<tbody>
<?php
	$query = "SELECT habitos.nome,habitos.desc_hab,ficha_has_habitos.qtd_fic_hab,caminho_has_habitos.qtd_cam_hab,descendencia_has_habitos.qtd_desc_hab,raca_has_habitos.qtd_rac_hab FROM ficha
LEFT JOIN ficha_has_caminho ON ficha_has_caminho.idFicha = ficha.idFicha
LEFT JOIN descendencia_has_ficha ON descendencia_has_ficha.idFicha = ficha.idFicha
LEFT JOIN habitos ON habitos.idHabitos IS NOT NULL
LEFT JOIN ficha_has_habitos ON ficha_has_habitos.idFicha = ficha.idFicha AND  ficha_has_habitos.idHabitos = habitos.idHabitos
LEFT JOIN raca_has_habitos ON raca_has_habitos.idRaca = ficha.idRaca AND raca_has_habitos.idHabitos = habitos.idHabitos
LEFT JOIN caminho_has_habitos ON caminho_has_habitos.idCaminho = ficha_has_caminho.idCaminho AND caminho_has_habitos.idHabitos = habitos.idHabitos
LEFT JOIN descendencia_has_habitos ON descendencia_has_habitos.idDescendencia = descendencia_has_ficha.idDescendencia AND descendencia_has_habitos.idHabitos = habitos.idHabitos
where ficha.idFicha=$idFichaAtual";
	$result = mysqli_query($con, $query);
	
	while($coluna=mysqli_fetch_array($result)){
?>
       
            <tr>
                <th><?php echo $coluna['nome']; ?></th>
                <td><?php echo $coluna['qtd_fic_hab']+$coluna['qtd_cam_hab']+$coluna['qtd_desc_hab']+$coluna['qtd_rac_hab']; ?></td>
                <td><label>0</label><input type="number" /></td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
<?php
	}
?>
        </tbody>
    </table>
    <button>+</button>
    <table>
        <caption>Especialização</caption>
        <tbody>
            <tr>
                <td>ESP:XXXX</td>
            </tr>
        </tbody>
    </table>
    <table class="tabela-atributos col-4">
        <caption>Defesas</caption>
        <tr>
            <th>Reflex</th>
            <td>1</td>
        </tr>
        <tr>
            <th>fortitude</th>
            <td>1</td>
        </tr>
        <tr>
            <th>Vontade</th>
            <td>1</td>
        </tr>
    </table>
    <table>
        <caption>Habilidades</caption>
        <tr>
            <th>Nome Habilidade<input type="text" value="Nome Habilidade"></th>
            <td>AtAc.:
                <label>FOR</label>
                <select>
                    <option>FOR</option>
                    <option>CON</option>
                    <option>AGI</option>
                    <option>DES</option>
                    <option>INT</option>
                    <option>SAB</option>
                    <option>CAR</option>
                </select>
                Mod.:<label>0</label>
                Tipo<span></span><input type="text" />
            </td>
            <td>
                Hábito:<label>XXX</label>
                <select>

                </select>
                M10:<label></label>
                5:<label></label>
            </td>
            <td>
                Gastos:
                <label></label>
                <label></label>
                <label></label>
            </td>
            <td>
                Utilização:
                <input type="text" />
                <label></label>
            </td>
            <td>
                <label nome="desc_hab">
                </label>
                <textarea>
                    descri��o da Habilidade
                </textarea>
            </td>
            <td>
                <label></label>
                <input type="text" nome="pre_req"/>
            </td>
            
        </tr>
    </table>
</body>
</html>