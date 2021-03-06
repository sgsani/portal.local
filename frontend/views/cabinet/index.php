<link rel="stylesheet" type="text/css" href="/calc/calc.css">
<link rel="stylesheet" type="text/css" href="/calc/jquery-ui.min.css">
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/calc/jquery.mask.min.js"></script>
<script src="/calc/jquery-ui.min.js"></script>
<script src="/calc/html2canvas.js"></script>
<script src="/calc/script1.js"></script>-->

<div class="container">

    <h1 id="title">Рассчет оконной конструкции</h1>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <p style="font-family: OS4; font-size: 16px;">Тип</p>
            <p style="font-family: OS4; font-size: 16px;">окна:</p>
        </div>
        <div id="W1" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W21"></div>
        </div>
        <div id="W2" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W22"></div>
        </div>
        <div id="W3" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W23"></div>
        </div>
        <div id="W4" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W24"></div>
        </div>
        <div id="W5" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W25"></div>
        </div>
        <div id="W6" class="col-lg-1 col-md-1 col-sm-4 col-xs-4" onmousedown="mousem(this)">
            <div id="W26"></div>
        </div>
        <!--Конец серого блока с маленькими окошками--></div>

    <div class="row"><br/><br/>
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div id="id_MF" class="MF "></div>
        </div>
        <br/><br/>
    </div>
    <div class="row"><br/><br/><br/><br/><br/><br/>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-lg-2 col-md-2 col-sm-4">
            <p style="font-family: OS3; font-size: 14px;">Количество (шт.)</p>
            <input type="text" id="amount" value="1"
                   style="font-family: OS4; font-size: 14px; width: 40px; height: 30px; border: 5px solid #ebeff1; text-align: center;"/>
        </div>
        <!--<div class="col-lg-2 col-md-2 col-sm-4">
            <p style="font-family: OS3; font-size: 14px;">Демонтаж / монтаж</p>
            <select class="styled-select" id="disassembly"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 60px; height: 32px;">
                <option selected="selected" value="1">Да</option>
                <option value="2">Нет</option>
            </select></div>-->
        <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12"></div>
    </div>
    <div class="row"><br/><br/>
        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="col-lg-3 col-md-4 col-sm-4">
            <select class="styled-select" id="profil"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Профиль</option>
                <option value="1">REHAU Ecosol-Design 60 (3 камеры)</option>
                <option value="2">REHAU Ecosol-Design 70 (5 камер)</option>
                <option value="3">REHAU Ecosol-Design усиленный (5 камер)</option>
                <option value="4">REHAU Brillant-Design (5 камер)</option>
                <option value="5">REHAU Euro-Design 86 (6 камер)</option>
                <option value="6">SYNEGO</option>
                <option value="7">REHAU GENEO (6 камер)</option>
            </select>
            <select class="styled-select" id="steklopaket"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Стеклопакет</option>
                <option value="1">Clima Screen™Sun (Энергосберегающий Однокамерный)</option>
                <option value="2">ClimaScreen™Termo (Энергосберегающий Двухкамерный)</option>
                <option value="3">Clima Screen™Full (Энергосберегающий Мультифункциональный)</option>
            </select>
            <select class="styled-select" id="furnitura"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Фурнитура</option>
                <option value="1">Фурнитура Maco</option>
                <option value="2">Фурнитура SIEGENIA TITAN AF</option>
                <option value="3">Фурнитура AXOR</option>
            </select>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <select class="styled-select" id="podokon"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Подоконник</option>
                <option value="0">Не требуется</option>
                <option value="100">Подоконник 100 мм</option>
                <option value="150">Подоконник 150 мм</option>
                <option value="200">Подоконник 200 мм</option>
                <option value="250">Подоконник 250 мм</option>
                <option value="300">Подоконник 300 мм</option>
                <option value="350">Подоконник 350 мм</option>
                <option value="400">Подоконник 400 мм</option>
                <option value="450">Подоконник 450 мм</option>
                <option value="500">Подоконник 500 мм</option>
                <option value="550">Подоконник 600 мм</option>
            </select>
            <select class="styled-select" id="otliv"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Отлив</option>
                <option value="0">Не требуется</option>
                <option value="70">Отлив 70 мм</option>
                <option value="100">Отлив 100 мм</option>
                <option value="130">Отлив 130 мм</option>
                <option value="150">Отлив 150 мм</option>
                <option value="180">Отлив 180 мм</option>
                <option value="200">Отлив 200 мм</option>
                <option value="250">Отлив 250 мм</option>
                <option value="300">Отлив 300 мм</option>
            </select>
            <select class="styled-select" id="kozir"
                    style="font-family: OS3; font-size: 14px; border: 5px solid #ebeff1; width: 290px; height: 35px;">
                <option selected="selected" value="0">Козырек</option>
                <option value="0">Не требуется</option>
                <
                <option value="200">Козырек 200 мм</option>
                <option value="250">Козырек 250 мм</option>
                <option value="300">Козырек 300 мм</option>
                <option value="350">Козырек 350 мм</option>
                <option value="400">Козырек 400 мм</option>
                <option value="450">Козырек 450 мм</option>
                <option value="500">Козырек 500 мм</option>
            </select>
        </div>
    </div>
    <div class="row"><br/><br/>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-lg-6" style="background: url('/calc/img/Form.png') no-repeat;">
            <h1 style="text-align: center;"></h1>
            <div class="form-horizontal">

                <div class="form-group">
                    <div class="col-lg-5 col-md-2 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                        <div class="btn btn-success" onclick="PrScr(this)">РАССЧИТАТЬ СТОИМОСТЬ ОКНА</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>


    </div>

</div>
<?php
$this->registerJsFile('../../../../calc/script1.js', []);
?>