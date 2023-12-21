<?php

session_start(); // Iniciar a sessão
if (isset($_SESSION['name'])) {
    // Usuário está logado
    //  echo 'Usuário logado: ' . $_SESSION['name'];
} else {
    // Usuário não está logado
    header("Location: login-form.php");
}
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/EstudanteDAO.php");
include_once("../model/DTO/Estudante.php");
$produto = new Estudante();
$produtoDAO = new EstudanteDAO();


// Iniciar a sessão




$count = 0;
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <?php
        $index = 0;
        include_once("navbarApp.php"); ?>
        <center>
            <div class="body-wrapper"> <?php
                                        include_once("headerApp.php"); ?>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-8 d-flex align-items-strech">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                        <div class="mb-3 mb-sm-0">
                                            <h5 class="card-title fw-semibold">Estudantes Matriculados</h5>
                                        </div>
                                        <div>
                                            <select class="form-select">
                                                <option value="1">March 2023</option>
                                                <option value="2">April 2023</option>
                                                <option value="3">May 2023</option>
                                                <option value="4">June 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="chart" style="min-height: 360px;">
                                        <div id="apexchartsgvhy2hxi" class="apexcharts-canvas apexchartsgvhy2hxi apexcharts-theme-light" style="width: 611px; height: 345px;"><svg id="SvgjsSvg1302" width="611" height="345" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-15, 0)" style="background: transparent;">
                                                <g id="SvgjsG1304" class="apexcharts-inner apexcharts-graphical" transform="translate(50.046875, 30)">
                                                    <defs id="SvgjsDefs1303">
                                                        <linearGradient id="SvgjsLinearGradient1308" x1="0" y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1309" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1310" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1311" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskgvhy2hxi">
                                                            <rect id="SvgjsRect1313" width="557.953125" height="278.73" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskgvhy2hxi"></clipPath>
                                                        <clipPath id="nonForecastMaskgvhy2hxi"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskgvhy2hxi">
                                                            <rect id="SvgjsRect1314" width="554.953125" height="279.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1312" width="12.052099609375" height="275.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1308)" class="apexcharts-xcrosshairs" y2="275.73" filter="none" fill-opacity="0.9"></rect>
                                                    <line id="SvgjsLine1358" x1="0" y1="276.73" x2="0" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1359" x1="68.869140625" y1="276.73" x2="68.869140625" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1360" x1="137.73828125" y1="276.73" x2="137.73828125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1361" x1="206.607421875" y1="276.73" x2="206.607421875" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1362" x1="275.4765625" y1="276.73" x2="275.4765625" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1363" x1="344.345703125" y1="276.73" x2="344.345703125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1364" x1="413.21484375" y1="276.73" x2="413.21484375" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1365" x1="482.083984375" y1="276.73" x2="482.083984375" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1366" x1="550.953125" y1="276.73" x2="550.953125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <g id="SvgjsG1374" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g id="SvgjsG1375" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1377" font-family="inherit" x="34.4345703125" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1378">16/08</tspan>
                                                                <title>16/08</title>
                                                            </text><text id="SvgjsText1380" font-family="inherit" x="103.3037109375" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1381">17/08</tspan>
                                                                <title>17/08</title>
                                                            </text><text id="SvgjsText1383" font-family="inherit" x="172.1728515625" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1384">18/08</tspan>
                                                                <title>18/08</title>
                                                            </text><text id="SvgjsText1386" font-family="inherit" x="241.0419921875" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1387">19/08</tspan>
                                                                <title>19/08</title>
                                                            </text><text id="SvgjsText1389" font-family="inherit" x="309.9111328125" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1390">20/08</tspan>
                                                                <title>20/08</title>
                                                            </text><text id="SvgjsText1392" font-family="inherit" x="378.7802734375" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1393">21/08</tspan>
                                                                <title>21/08</title>
                                                            </text><text id="SvgjsText1395" font-family="inherit" x="447.6494140625" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1396">22/08</tspan>
                                                                <title>22/08</title>
                                                            </text><text id="SvgjsText1398" font-family="inherit" x="516.5185546875" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1399">23/08</tspan>
                                                                <title>23/08</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1354" class="apexcharts-grid">
                                                        <g id="SvgjsG1355" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1368" x1="0" y1="68.9325" x2="550.953125" y2="68.9325" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1369" x1="0" y1="137.865" x2="550.953125" y2="137.865" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1370" x1="0" y1="206.7975" x2="550.953125" y2="206.7975" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1356" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1373" x1="0" y1="275.73" x2="550.953125" y2="275.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1372" x1="0" y1="1" x2="0" y2="275.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1315" class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1316" class="apexcharts-series" rel="1" seriesName="Earningsxthisxmonthx" data:realIndex="0">
                                                            <path id="SvgjsPath1320" d="M 22.382470703125 275.731 L 22.382470703125 37.020624999999995 C 22.382470703125 34.020624999999995 25.382470703125 31.020624999999992 28.382470703125 31.020624999999992 L 28.382470703125 31.020624999999992 C 29.9085205078125 31.020624999999992 31.4345703125 34.020624999999995 31.4345703125 37.020624999999995 L 31.4345703125 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 22.382470703125 275.731 L 22.382470703125 37.020624999999995 C 22.382470703125 34.020624999999995 25.382470703125 31.020624999999992 28.382470703125 31.020624999999992 L 28.382470703125 31.020624999999992 C 29.9085205078125 31.020624999999992 31.4345703125 34.020624999999995 31.4345703125 37.020624999999995 L 31.4345703125 275.731 z " pathFrom="M 22.382470703125 275.731 L 22.382470703125 275.731 L 31.4345703125 275.731 L 31.4345703125 275.731 L 31.4345703125 275.731 L 31.4345703125 275.731 L 31.4345703125 275.731 L 22.382470703125 275.731 z" cy="31.01962499999999" cx="89.751611328125" j="0" val="355" barHeight="244.71037500000003" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1322" d="M 91.251611328125 275.731 L 91.251611328125 12.894249999999968 C 91.251611328125 9.894249999999968 94.251611328125 6.894249999999967 97.251611328125 6.894249999999967 L 97.251611328125 6.894249999999967 C 98.7776611328125 6.894249999999967 100.3037109375 9.894249999999968 100.3037109375 12.894249999999968 L 100.3037109375 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 91.251611328125 275.731 L 91.251611328125 12.894249999999968 C 91.251611328125 9.894249999999968 94.251611328125 6.894249999999967 97.251611328125 6.894249999999967 L 97.251611328125 6.894249999999967 C 98.7776611328125 6.894249999999967 100.3037109375 9.894249999999968 100.3037109375 12.894249999999968 L 100.3037109375 275.731 z " pathFrom="M 91.251611328125 275.731 L 91.251611328125 275.731 L 100.3037109375 275.731 L 100.3037109375 275.731 L 100.3037109375 275.731 L 100.3037109375 275.731 L 100.3037109375 275.731 L 91.251611328125 275.731 z" cy="6.893249999999966" cx="158.620751953125" j="1" val="390" barHeight="268.83675000000005" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1324" d="M 160.120751953125 275.731 L 160.120751953125 74.93349999999998 C 160.120751953125 71.93349999999998 163.120751953125 68.93349999999998 166.120751953125 68.93349999999998 L 166.120751953125 68.93349999999998 C 167.6468017578125 68.93349999999998 169.1728515625 71.93349999999998 169.1728515625 74.93349999999998 L 169.1728515625 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 160.120751953125 275.731 L 160.120751953125 74.93349999999998 C 160.120751953125 71.93349999999998 163.120751953125 68.93349999999998 166.120751953125 68.93349999999998 L 166.120751953125 68.93349999999998 C 167.6468017578125 68.93349999999998 169.1728515625 71.93349999999998 169.1728515625 74.93349999999998 L 169.1728515625 275.731 z " pathFrom="M 160.120751953125 275.731 L 160.120751953125 275.731 L 169.1728515625 275.731 L 169.1728515625 275.731 L 169.1728515625 275.731 L 169.1728515625 275.731 L 169.1728515625 275.731 L 160.120751953125 275.731 z" cy="68.93249999999998" cx="227.489892578125" j="2" val="300" barHeight="206.79750000000004" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1326" d="M 228.989892578125 275.731 L 228.989892578125 40.46724999999997 C 228.989892578125 37.46724999999997 231.989892578125 34.46724999999997 234.989892578125 34.46724999999997 L 234.989892578125 34.46724999999997 C 236.5159423828125 34.46724999999997 238.0419921875 37.46724999999997 238.0419921875 40.46724999999997 L 238.0419921875 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 228.989892578125 275.731 L 228.989892578125 40.46724999999997 C 228.989892578125 37.46724999999997 231.989892578125 34.46724999999997 234.989892578125 34.46724999999997 L 234.989892578125 34.46724999999997 C 236.5159423828125 34.46724999999997 238.0419921875 37.46724999999997 238.0419921875 40.46724999999997 L 238.0419921875 275.731 z " pathFrom="M 228.989892578125 275.731 L 228.989892578125 275.731 L 238.0419921875 275.731 L 238.0419921875 275.731 L 238.0419921875 275.731 L 238.0419921875 275.731 L 238.0419921875 275.731 L 228.989892578125 275.731 z" cy="34.466249999999974" cx="296.359033203125" j="3" val="350" barHeight="241.26375000000004" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1328" d="M 297.859033203125 275.731 L 297.859033203125 12.894249999999968 C 297.859033203125 9.894249999999968 300.859033203125 6.894249999999967 303.859033203125 6.894249999999967 L 303.859033203125 6.894249999999967 C 305.3850830078125 6.894249999999967 306.9111328125 9.894249999999968 306.9111328125 12.894249999999968 L 306.9111328125 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 297.859033203125 275.731 L 297.859033203125 12.894249999999968 C 297.859033203125 9.894249999999968 300.859033203125 6.894249999999967 303.859033203125 6.894249999999967 L 303.859033203125 6.894249999999967 C 305.3850830078125 6.894249999999967 306.9111328125 9.894249999999968 306.9111328125 12.894249999999968 L 306.9111328125 275.731 z " pathFrom="M 297.859033203125 275.731 L 297.859033203125 275.731 L 306.9111328125 275.731 L 306.9111328125 275.731 L 306.9111328125 275.731 L 306.9111328125 275.731 L 306.9111328125 275.731 L 297.859033203125 275.731 z" cy="6.893249999999966" cx="365.228173828125" j="4" val="390" barHeight="268.83675000000005" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1330" d="M 366.728173828125 275.731 L 366.728173828125 157.6525 C 366.728173828125 154.6525 369.728173828125 151.6525 372.728173828125 151.6525 L 372.728173828125 151.6525 C 374.2542236328125 151.6525 375.7802734375 154.6525 375.7802734375 157.6525 L 375.7802734375 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 366.728173828125 275.731 L 366.728173828125 157.6525 C 366.728173828125 154.6525 369.728173828125 151.6525 372.728173828125 151.6525 L 372.728173828125 151.6525 C 374.2542236328125 151.6525 375.7802734375 154.6525 375.7802734375 157.6525 L 375.7802734375 275.731 z " pathFrom="M 366.728173828125 275.731 L 366.728173828125 275.731 L 375.7802734375 275.731 L 375.7802734375 275.731 L 375.7802734375 275.731 L 375.7802734375 275.731 L 375.7802734375 275.731 L 366.728173828125 275.731 z" cy="151.6515" cx="434.097314453125" j="5" val="180" barHeight="124.07850000000002" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1332" d="M 435.597314453125 275.731 L 435.597314453125 37.020624999999995 C 435.597314453125 34.020624999999995 438.597314453125 31.020624999999992 441.597314453125 31.020624999999992 L 441.597314453125 31.020624999999992 C 443.1233642578125 31.020624999999992 444.6494140625 34.020624999999995 444.6494140625 37.020624999999995 L 444.6494140625 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 435.597314453125 275.731 L 435.597314453125 37.020624999999995 C 435.597314453125 34.020624999999995 438.597314453125 31.020624999999992 441.597314453125 31.020624999999992 L 441.597314453125 31.020624999999992 C 443.1233642578125 31.020624999999992 444.6494140625 34.020624999999995 444.6494140625 37.020624999999995 L 444.6494140625 275.731 z " pathFrom="M 435.597314453125 275.731 L 435.597314453125 275.731 L 444.6494140625 275.731 L 444.6494140625 275.731 L 444.6494140625 275.731 L 444.6494140625 275.731 L 444.6494140625 275.731 L 435.597314453125 275.731 z" cy="31.01962499999999" cx="502.966455078125" j="6" val="355" barHeight="244.71037500000003" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1334" d="M 504.466455078125 275.731 L 504.466455078125 12.894249999999968 C 504.466455078125 9.894249999999968 507.466455078125 6.894249999999967 510.466455078125 6.894249999999967 L 510.466455078125 6.894249999999967 C 511.9925048828125 6.894249999999967 513.5185546875 9.894249999999968 513.5185546875 12.894249999999968 L 513.5185546875 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 504.466455078125 275.731 L 504.466455078125 12.894249999999968 C 504.466455078125 9.894249999999968 507.466455078125 6.894249999999967 510.466455078125 6.894249999999967 L 510.466455078125 6.894249999999967 C 511.9925048828125 6.894249999999967 513.5185546875 9.894249999999968 513.5185546875 12.894249999999968 L 513.5185546875 275.731 z " pathFrom="M 504.466455078125 275.731 L 504.466455078125 275.731 L 513.5185546875 275.731 L 513.5185546875 275.731 L 513.5185546875 275.731 L 513.5185546875 275.731 L 513.5185546875 275.731 L 504.466455078125 275.731 z" cy="6.893249999999966" cx="571.835595703125" j="7" val="390" barHeight="268.83675000000005" barWidth="12.052099609375"></path>
                                                            <g id="SvgjsG1318" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                                <g id="SvgjsG1319" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1321" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1323" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1325" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1327" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1329" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1331" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1333" className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1335" class="apexcharts-series" rel="2" seriesName="Expensexthisxmonthx" data:realIndex="1">
                                                            <path id="SvgjsPath1339" d="M 34.4345703125 275.731 L 34.4345703125 88.72 C 34.4345703125 85.72 37.4345703125 82.72 40.4345703125 82.72 L 40.4345703125 82.72 C 41.9606201171875 82.72 43.486669921875 85.72 43.486669921875 88.72 L 43.486669921875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 34.4345703125 275.731 L 34.4345703125 88.72 C 34.4345703125 85.72 37.4345703125 82.72 40.4345703125 82.72 L 40.4345703125 82.72 C 41.9606201171875 82.72 43.486669921875 85.72 43.486669921875 88.72 L 43.486669921875 275.731 z " pathFrom="M 34.4345703125 275.731 L 34.4345703125 275.731 L 43.486669921875 275.731 L 43.486669921875 275.731 L 43.486669921875 275.731 L 43.486669921875 275.731 L 43.486669921875 275.731 L 34.4345703125 275.731 z" cy="82.719" cx="101.8037109375" j="0" val="280" barHeight="193.01100000000002" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1341" d="M 103.3037109375 275.731 L 103.3037109375 109.39975000000001 C 103.3037109375 106.39975000000001 106.3037109375 103.39975000000001 109.3037109375 103.39975000000001 L 109.3037109375 103.39975000000001 C 110.8297607421875 103.39975000000001 112.355810546875 106.39975000000001 112.355810546875 109.39975000000001 L 112.355810546875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 103.3037109375 275.731 L 103.3037109375 109.39975000000001 C 103.3037109375 106.39975000000001 106.3037109375 103.39975000000001 109.3037109375 103.39975000000001 L 109.3037109375 103.39975000000001 C 110.8297607421875 103.39975000000001 112.355810546875 106.39975000000001 112.355810546875 109.39975000000001 L 112.355810546875 275.731 z " pathFrom="M 103.3037109375 275.731 L 103.3037109375 275.731 L 112.355810546875 275.731 L 112.355810546875 275.731 L 112.355810546875 275.731 L 112.355810546875 275.731 L 112.355810546875 275.731 L 103.3037109375 275.731 z" cy="103.39875" cx="170.6728515625" j="1" val="250" barHeight="172.33125" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1343" d="M 172.1728515625 275.731 L 172.1728515625 57.70037499999997 C 172.1728515625 54.70037499999997 175.1728515625 51.70037499999997 178.1728515625 51.70037499999997 L 178.1728515625 51.70037499999997 C 179.6989013671875 51.70037499999997 181.224951171875 54.70037499999997 181.224951171875 57.70037499999997 L 181.224951171875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 172.1728515625 275.731 L 172.1728515625 57.70037499999997 C 172.1728515625 54.70037499999997 175.1728515625 51.70037499999997 178.1728515625 51.70037499999997 L 178.1728515625 51.70037499999997 C 179.6989013671875 51.70037499999997 181.224951171875 54.70037499999997 181.224951171875 57.70037499999997 L 181.224951171875 275.731 z " pathFrom="M 172.1728515625 275.731 L 172.1728515625 275.731 L 181.224951171875 275.731 L 181.224951171875 275.731 L 181.224951171875 275.731 L 181.224951171875 275.731 L 181.224951171875 275.731 L 172.1728515625 275.731 z" cy="51.699374999999975" cx="239.5419921875" j="2" val="325" barHeight="224.03062500000004" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1345" d="M 241.0419921875 275.731 L 241.0419921875 133.526125 C 241.0419921875 130.526125 244.0419921875 127.52612500000001 247.0419921875 127.52612500000001 L 247.0419921875 127.52612500000001 C 248.5680419921875 127.52612500000001 250.094091796875 130.526125 250.094091796875 133.526125 L 250.094091796875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 241.0419921875 275.731 L 241.0419921875 133.526125 C 241.0419921875 130.526125 244.0419921875 127.52612500000001 247.0419921875 127.52612500000001 L 247.0419921875 127.52612500000001 C 248.5680419921875 127.52612500000001 250.094091796875 130.526125 250.094091796875 133.526125 L 250.094091796875 275.731 z " pathFrom="M 241.0419921875 275.731 L 241.0419921875 275.731 L 250.094091796875 275.731 L 250.094091796875 275.731 L 250.094091796875 275.731 L 250.094091796875 275.731 L 250.094091796875 275.731 L 241.0419921875 275.731 z" cy="127.525125" cx="308.4111328125" j="3" val="215" barHeight="148.20487500000002" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1347" d="M 309.9111328125 275.731 L 309.9111328125 109.39975000000001 C 309.9111328125 106.39975000000001 312.9111328125 103.39975000000001 315.9111328125 103.39975000000001 L 315.9111328125 103.39975000000001 C 317.4371826171875 103.39975000000001 318.963232421875 106.39975000000001 318.963232421875 109.39975000000001 L 318.963232421875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 309.9111328125 275.731 L 309.9111328125 109.39975000000001 C 309.9111328125 106.39975000000001 312.9111328125 103.39975000000001 315.9111328125 103.39975000000001 L 315.9111328125 103.39975000000001 C 317.4371826171875 103.39975000000001 318.963232421875 106.39975000000001 318.963232421875 109.39975000000001 L 318.963232421875 275.731 z " pathFrom="M 309.9111328125 275.731 L 309.9111328125 275.731 L 318.963232421875 275.731 L 318.963232421875 275.731 L 318.963232421875 275.731 L 318.963232421875 275.731 L 318.963232421875 275.731 L 309.9111328125 275.731 z" cy="103.39875" cx="377.2802734375" j="4" val="250" barHeight="172.33125" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1349" d="M 378.7802734375 275.731 L 378.7802734375 68.04024999999999 C 378.7802734375 65.04024999999999 381.7802734375 62.04024999999998 384.7802734375 62.04024999999998 L 384.7802734375 62.04024999999998 C 386.3063232421875 62.04024999999998 387.832373046875 65.04024999999999 387.832373046875 68.04024999999999 L 387.832373046875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 378.7802734375 275.731 L 378.7802734375 68.04024999999999 C 378.7802734375 65.04024999999999 381.7802734375 62.04024999999998 384.7802734375 62.04024999999998 L 384.7802734375 62.04024999999998 C 386.3063232421875 62.04024999999998 387.832373046875 65.04024999999999 387.832373046875 68.04024999999999 L 387.832373046875 275.731 z " pathFrom="M 378.7802734375 275.731 L 378.7802734375 275.731 L 387.832373046875 275.731 L 387.832373046875 275.731 L 387.832373046875 275.731 L 387.832373046875 275.731 L 387.832373046875 275.731 L 378.7802734375 275.731 z" cy="62.03924999999998" cx="446.1494140625" j="5" val="310" barHeight="213.69075000000004" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1351" d="M 447.6494140625 275.731 L 447.6494140625 88.72 C 447.6494140625 85.72 450.6494140625 82.72 453.6494140625 82.72 L 453.6494140625 82.72 C 455.1754638671875 82.72 456.701513671875 85.72 456.701513671875 88.72 L 456.701513671875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 447.6494140625 275.731 L 447.6494140625 88.72 C 447.6494140625 85.72 450.6494140625 82.72 453.6494140625 82.72 L 453.6494140625 82.72 C 455.1754638671875 82.72 456.701513671875 85.72 456.701513671875 88.72 L 456.701513671875 275.731 z " pathFrom="M 447.6494140625 275.731 L 447.6494140625 275.731 L 456.701513671875 275.731 L 456.701513671875 275.731 L 456.701513671875 275.731 L 456.701513671875 275.731 L 456.701513671875 275.731 L 447.6494140625 275.731 z" cy="82.719" cx="515.0185546875" j="6" val="280" barHeight="193.01100000000002" barWidth="12.052099609375"></path>
                                                            <path id="SvgjsPath1353" d="M 516.5185546875 275.731 L 516.5185546875 109.39975000000001 C 516.5185546875 106.39975000000001 519.5185546875 103.39975000000001 522.5185546875 103.39975000000001 L 522.5185546875 103.39975000000001 C 524.0446044921875 103.39975000000001 525.570654296875 106.39975000000001 525.570654296875 109.39975000000001 L 525.570654296875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskgvhy2hxi)" pathTo="M 516.5185546875 275.731 L 516.5185546875 109.39975000000001 C 516.5185546875 106.39975000000001 519.5185546875 103.39975000000001 522.5185546875 103.39975000000001 L 522.5185546875 103.39975000000001 C 524.0446044921875 103.39975000000001 525.570654296875 106.39975000000001 525.570654296875 109.39975000000001 L 525.570654296875 275.731 z " pathFrom="M 516.5185546875 275.731 L 516.5185546875 275.731 L 525.570654296875 275.731 L 525.570654296875 275.731 L 525.570654296875 275.731 L 525.570654296875 275.731 L 525.570654296875 275.731 L 516.5185546875 275.731 z" cy="103.39875" cx="583.8876953125" j="7" val="250" barHeight="172.33125" barWidth="12.052099609375"></path>
                                                            <g id="SvgjsG1337" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                                <g id="SvgjsG1338" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1340" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1342" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1344" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1346" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1348" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1350" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1352" className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1317" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        <g id="SvgjsG1336" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                    </g>
                                                    <g id="SvgjsG1357" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1367" x1="0" y1="0" x2="550.953125" y2="0" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1371" x1="0" y1="275.73" x2="550.953125" y2="275.73" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1400" x1="0" y1="276.73" x2="550.953125" y2="276.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                                    </g>
                                                    <line id="SvgjsLine1418" x1="0" y1="0" x2="550.953125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1419" x1="0" y1="0" x2="550.953125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1420" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1421" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1422" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1401" class="apexcharts-yaxis" rel="0" transform="translate(20.046875, 0)">
                                                    <g id="SvgjsG1402" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1404" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1405">400</tspan>
                                                            <title>400</title>
                                                        </text><text id="SvgjsText1407" font-family="inherit" x="20" y="100.33250000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1408">300</tspan>
                                                            <title>300</title>
                                                        </text><text id="SvgjsText1410" font-family="inherit" x="20" y="169.26500000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1411">200</tspan>
                                                            <title>200</title>
                                                        </text><text id="SvgjsText1413" font-family="inherit" x="20" y="238.19750000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1414">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText1416" font-family="inherit" x="20" y="307.13" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1417">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1305" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 172.5px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(93, 135, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(73, 190, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Yearly Breakup -->
                                    <div class="card overflow-hidden">
                                        <div class="card-body p-4">
                                            <h5 class="card-title mb-9 fw-semibold">Separação Anual</h5>
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="fw-semibold mb-3">58</h4>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-arrow-up-left text-success"></i>
                                                        </span>
                                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                        <p class="fs-3 mb-0">Ultimo ano</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                                            <span class="fs-2">2023</span>
                                                        </div>
                                                        <div>
                                                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                                            <span class="fs-2">2024</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-center">
                                                        <div id="breakup" style="min-height: 128.7px;">
                                                            <div id="apexchartsw3383c0n" class="apexcharts-canvas apexchartsw3383c0n apexcharts-theme-light" style="width: 180px; height: 128.7px;"><svg id="SvgjsSvg1423" width="180" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                    <g id="SvgjsG1425" class="apexcharts-inner apexcharts-graphical" transform="translate(28, 0)">
                                                                        <defs id="SvgjsDefs1424">
                                                                            <clipPath id="gridRectMaskw3383c0n">
                                                                                <rect id="SvgjsRect1427" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                            </clipPath>
                                                                            <clipPath id="forecastMaskw3383c0n"></clipPath>
                                                                            <clipPath id="nonForecastMaskw3383c0n"></clipPath>
                                                                            <clipPath id="gridRectMarkerMaskw3383c0n">
                                                                                <rect id="SvgjsRect1428" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                            </clipPath>
                                                                        </defs>
                                                                        <g id="SvgjsG1429" class="apexcharts-pie">
                                                                            <g id="SvgjsG1430" transform="translate(0, 0) scale(1)">
                                                                                <circle id="SvgjsCircle1431" r="41.59756097560976" cx="63" cy="63" fill="transparent"></circle>
                                                                                <g id="SvgjsG1432" class="apexcharts-slices">
                                                                                    <g id="SvgjsG1433" class="apexcharts-series apexcharts-pie-series" seriesName="2022" rel="1" data:realIndex="0">
                                                                                        <path id="SvgjsPath1434" d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 103.6849453198706 100.69516662913668 L 93.51370898990294 91.27137497185251 A 41.59756097560976 41.59756097560976 0 0 0 63 21.40243902439024 L 63 7.536585365853654 z" fill="rgba(93,135,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="132.81553398058253" data:startAngle="0" data:strokeWidth="0" data:value="38" data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 103.6849453198706 100.69516662913668 L 93.51370898990294 91.27137497185251 A 41.59756097560976 41.59756097560976 0 0 0 63 21.40243902439024 L 63 7.536585365853654 z"></path>
                                                                                    </g>
                                                                                    <g id="SvgjsG1435" class="apexcharts-series apexcharts-pie-series" seriesName="2021" rel="2" data:realIndex="1">
                                                                                        <path id="SvgjsPath1436" d="M 103.6849453198706 100.69516662913668 A 55.463414634146346 55.463414634146346 0 0 1 7.594622861729029 60.463359102040855 L 21.445967146296773 61.097519326530644 A 41.59756097560976 41.59756097560976 0 0 0 93.51370898990294 91.27137497185251 L 103.6849453198706 100.69516662913668 z" fill="rgba(236,242,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="139.8058252427184" data:startAngle="132.81553398058253" data:strokeWidth="0" data:value="40" data:pathOrig="M 103.6849453198706 100.69516662913668 A 55.463414634146346 55.463414634146346 0 0 1 7.594622861729029 60.463359102040855 L 21.445967146296773 61.097519326530644 A 41.59756097560976 41.59756097560976 0 0 0 93.51370898990294 91.27137497185251 L 103.6849453198706 100.69516662913668 z"></path>
                                                                                    </g>
                                                                                    <g id="SvgjsG1437" class="apexcharts-series apexcharts-pie-series" seriesName="2020" rel="3" data:realIndex="2">
                                                                                        <path id="SvgjsPath1438" d="M 7.594622861729029 60.463359102040855 A 55.463414634146346 55.463414634146346 0 0 1 62.99031980805149 7.536586210609762 L 62.99273985603862 21.402439657957324 A 41.59756097560976 41.59756097560976 0 0 0 21.445967146296773 61.097519326530644 L 7.594622861729029 60.463359102040855 z" fill="rgba(249,249,253,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="87.37864077669906" data:startAngle="272.62135922330094" data:strokeWidth="0" data:value="25" data:pathOrig="M 7.594622861729029 60.463359102040855 A 55.463414634146346 55.463414634146346 0 0 1 62.99031980805149 7.536586210609762 L 62.99273985603862 21.402439657957324 A 41.59756097560976 41.59756097560976 0 0 0 21.445967146296773 61.097519326530644 L 7.594622861729029 60.463359102040855 z"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <line id="SvgjsLine1439" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine1440" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1426" class="apexcharts-annotations"></g>
                                                                </svg>
                                                                <div class="apexcharts-legend"></div>
                                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(93, 135, 255);"></span>
                                                                        <div class="apexcharts-tooltip-text" style="font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(236, 242, 255);"></span>
                                                                        <div class="apexcharts-tooltip-text" style="font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 249, 253);"></span>
                                                                        <div class="apexcharts-tooltip-text" style="font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- Monthly Earnings -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row alig n-items-start">
                                                <div class="col-8">
                                                    <h5 class="card-title mb-9 fw-semibold">Matriculas mensais</h5>
                                                    <h4 class="fw-semibold mb-3">6</h4>
                                                    <div class="d-flex align-items-center pb-1">
                                                        <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-arrow-down-right text-danger"></i>
                                                        </span>
                                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                        <p class="fs-3 mb-0">Ultimo ano</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-currency-dollar fs-6"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="earning" style="min-height: 60px;">
                                            <div id="apexchartssparkline3" class="apexcharts-canvas apexchartssparkline3 apexcharts-theme-light" style="width: 324px; height: 60px;"><svg id="SvgjsSvg1442" width="324" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1444" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1443">
                                                            <clipPath id="gridRectMaskz3xp2ctq">
                                                                <rect id="SvgjsRect1449" width="330" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskz3xp2ctq"></clipPath>
                                                            <clipPath id="nonForecastMaskz3xp2ctq"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskz3xp2ctq">
                                                                <rect id="SvgjsRect1450" width="328" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1448" x1="323.5" y1="0" x2="323.5" y2="60" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="323.5" y="0" width="1" height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG1471" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG1472" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1457" class="apexcharts-grid">
                                                            <g id="SvgjsG1458" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line id="SvgjsLine1462" x1="0" y1="8.571428571428571" x2="324" y2="8.571428571428571" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1463" x1="0" y1="17.142857142857142" x2="324" y2="17.142857142857142" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1464" x1="0" y1="25.714285714285715" x2="324" y2="25.714285714285715" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1465" x1="0" y1="34.285714285714285" x2="324" y2="34.285714285714285" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1466" x1="0" y1="42.857142857142854" x2="324" y2="42.857142857142854" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1467" x1="0" y1="51.42857142857142" x2="324" y2="51.42857142857142" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1468" x1="0" y1="59.99999999999999" x2="324" y2="59.99999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1459" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line id="SvgjsLine1470" x1="0" y1="60" x2="324" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1469" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1451" class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1452" class="apexcharts-series" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1455" d="M 0 60 L 0 38.57142857142857C 18.9 38.57142857142857 35.1 3.4285714285714306 54 3.4285714285714306C 72.9 3.4285714285714306 89.1 42.85714285714286 108 42.85714285714286C 126.9 42.85714285714286 143.1 25.714285714285715 162 25.714285714285715C 180.9 25.714285714285715 197.1 49.714285714285715 216 49.714285714285715C 234.9 49.714285714285715 251.1 10.285714285714292 270 10.285714285714292C 288.9 10.285714285714292 305.1 42.85714285714286 324 42.85714285714286C 324 42.85714285714286 324 42.85714285714286 324 60M 324 42.85714285714286z" fill="rgba(73,190,255,0.05)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskz3xp2ctq)" pathTo="M 0 60 L 0 38.57142857142857C 18.9 38.57142857142857 35.1 3.4285714285714306 54 3.4285714285714306C 72.9 3.4285714285714306 89.1 42.85714285714286 108 42.85714285714286C 126.9 42.85714285714286 143.1 25.714285714285715 162 25.714285714285715C 180.9 25.714285714285715 197.1 49.714285714285715 216 49.714285714285715C 234.9 49.714285714285715 251.1 10.285714285714292 270 10.285714285714292C 288.9 10.285714285714292 305.1 42.85714285714286 324 42.85714285714286C 324 42.85714285714286 324 42.85714285714286 324 60M 324 42.85714285714286z" pathFrom="M -1 60 L -1 60 L 54 60 L 108 60 L 162 60 L 216 60 L 270 60 L 324 60"></path>
                                                                <path id="SvgjsPath1456" d="M 0 38.57142857142857C 18.9 38.57142857142857 35.1 3.4285714285714306 54 3.4285714285714306C 72.9 3.4285714285714306 89.1 42.85714285714286 108 42.85714285714286C 126.9 42.85714285714286 143.1 25.714285714285715 162 25.714285714285715C 180.9 25.714285714285715 197.1 49.714285714285715 216 49.714285714285715C 234.9 49.714285714285715 251.1 10.285714285714292 270 10.285714285714292C 288.9 10.285714285714292 305.1 42.85714285714286 324 42.85714285714286" fill="none" fill-opacity="1" stroke="#49beff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskz3xp2ctq)" pathTo="M 0 38.57142857142857C 18.9 38.57142857142857 35.1 3.4285714285714306 54 3.4285714285714306C 72.9 3.4285714285714306 89.1 42.85714285714286 108 42.85714285714286C 126.9 42.85714285714286 143.1 25.714285714285715 162 25.714285714285715C 180.9 25.714285714285715 197.1 49.714285714285715 216 49.714285714285715C 234.9 49.714285714285715 251.1 10.285714285714292 270 10.285714285714292C 288.9 10.285714285714292 305.1 42.85714285714286 324 42.85714285714286" pathFrom="M -1 60 L -1 60 L 54 60 L 108 60 L 162 60 L 216 60 L 270 60 L 324 60" fill-rule="evenodd"></path>
                                                                <g id="SvgjsG1453" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1486" r="0" cx="324" cy="42.85714285714286" class="apexcharts-marker wbn12q7pv no-pointer-events" stroke="#ffffff" fill="#49beff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1454" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <g id="SvgjsG1460" class="apexcharts-grid-borders" style="display: none;">
                                                            <line id="SvgjsLine1461" x1="0" y1="0" x2="324" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <line id="SvgjsLine1481" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1482" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1483" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1484" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1485" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1447" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG1480" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1445" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 206.922px; top: 0px;">
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(73, 190, 255);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Earnings: </span><span class="apexcharts-tooltip-text-y-value">20</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </center>
    </div>

    </div>
</body>

</html>