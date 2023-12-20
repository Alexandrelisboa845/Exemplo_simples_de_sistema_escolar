<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/EstudanteDAO.php");
include_once("../model/DTO/Estudante.php");
$produto = new Estudante();
$produtoDAO = new EstudanteDAO();


// Iniciar a sessão

if (session_unset()) {
    $username = $_SESSION['username'];
    header("Location: login-form.php"); // Redirecionar de volta para a página de login se a sessão não estiver definida
    exit();
} else {
}
$count = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4c79af;
            color: white;
        }

        .content {
            padding: 16px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4c79af;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-container,
        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 800px;
            width: 100%;
        }
    </style>
</head>

<body>

    <?php
    $index = 0;
    include_once("navbarApp.php"); ?>
    <center>
        <div class="login-container">


 
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
                    <div id="apexcharts8gmd3t7qj" class="apexcharts-canvas apexcharts8gmd3t7qj apexcharts-theme-light" style="width: 636px; height: 345px;"><svg id="SvgjsSvg1375" width="636" height="345" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-15, 0)" style="background: transparent;">
                            <g id="SvgjsG1377" class="apexcharts-inner apexcharts-graphical" transform="translate(50.046875, 30)">
                                <defs id="SvgjsDefs1376">
                                    <linearGradient id="SvgjsLinearGradient1381" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1382" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                        <stop id="SvgjsStop1383" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        <stop id="SvgjsStop1384" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMask8gmd3t7qj">
                                        <rect id="SvgjsRect1386" width="582.953125" height="278.73" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask8gmd3t7qj"></clipPath>
                                    <clipPath id="nonForecastMask8gmd3t7qj"></clipPath>
                                    <clipPath id="gridRectMarkerMask8gmd3t7qj">
                                        <rect id="SvgjsRect1387" width="579.953125" height="279.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect1385" width="12.598974609375" height="275.73" x="32.505856323242185" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1381)" class="apexcharts-xcrosshairs" y2="275.73" filter="none" fill-opacity="0.9" x1="32.505856323242185" x2="32.505856323242185"></rect>
                                <line id="SvgjsLine1431" x1="0" y1="276.73" x2="0" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1432" x1="71.994140625" y1="276.73" x2="71.994140625" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1433" x1="143.98828125" y1="276.73" x2="143.98828125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1434" x1="215.982421875" y1="276.73" x2="215.982421875" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1435" x1="287.9765625" y1="276.73" x2="287.9765625" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1436" x1="359.970703125" y1="276.73" x2="359.970703125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1437" x1="431.96484375" y1="276.73" x2="431.96484375" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1438" x1="503.958984375" y1="276.73" x2="503.958984375" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1439" x1="575.953125" y1="276.73" x2="575.953125" y2="282.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <g id="SvgjsG1447" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1448" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1450" font-family="inherit" x="35.9970703125" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1451">16/08</tspan>
                                            <title>16/08</title>
                                        </text><text id="SvgjsText1453" font-family="inherit" x="107.9912109375" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1454">17/08</tspan>
                                            <title>17/08</title>
                                        </text><text id="SvgjsText1456" font-family="inherit" x="179.9853515625" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1457">18/08</tspan>
                                            <title>18/08</title>
                                        </text><text id="SvgjsText1459" font-family="inherit" x="251.9794921875" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1460">19/08</tspan>
                                            <title>19/08</title>
                                        </text><text id="SvgjsText1462" font-family="inherit" x="323.9736328125" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1463">20/08</tspan>
                                            <title>20/08</title>
                                        </text><text id="SvgjsText1465" font-family="inherit" x="395.9677734375" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1466">21/08</tspan>
                                            <title>21/08</title>
                                        </text><text id="SvgjsText1468" font-family="inherit" x="467.9619140625" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1469">22/08</tspan>
                                            <title>22/08</title>
                                        </text><text id="SvgjsText1471" font-family="inherit" x="539.9560546875" y="304.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1472">23/08</tspan>
                                            <title>23/08</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1427" class="apexcharts-grid">
                                    <g id="SvgjsG1428" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine1441" x1="0" y1="68.9325" x2="575.953125" y2="68.9325" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1442" x1="0" y1="137.865" x2="575.953125" y2="137.865" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1443" x1="0" y1="206.7975" x2="575.953125" y2="206.7975" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1429" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1446" x1="0" y1="275.73" x2="575.953125" y2="275.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1445" x1="0" y1="1" x2="0" y2="275.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1388" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1389" class="apexcharts-series" rel="1" seriesName="Earningsxthisxmonthx" data:realIndex="0">
                                        <path id="SvgjsPath1393" d="M 23.398095703125 275.731 L 23.398095703125 37.020624999999995 C 23.398095703125 34.020624999999995 26.398095703125 31.020624999999992 29.398095703125 31.020624999999992 L 29.398095703125 31.020624999999992 C 31.1975830078125 31.020624999999992 32.9970703125 34.020624999999995 32.9970703125 37.020624999999995 L 32.9970703125 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 23.398095703125 275.731 L 23.398095703125 37.020624999999995 C 23.398095703125 34.020624999999995 26.398095703125 31.020624999999992 29.398095703125 31.020624999999992 L 29.398095703125 31.020624999999992 C 31.1975830078125 31.020624999999992 32.9970703125 34.020624999999995 32.9970703125 37.020624999999995 L 32.9970703125 275.731 z " pathFrom="M 23.398095703125 275.731 L 23.398095703125 275.731 L 32.9970703125 275.731 L 32.9970703125 275.731 L 32.9970703125 275.731 L 32.9970703125 275.731 L 32.9970703125 275.731 L 23.398095703125 275.731 z" cy="31.01962499999999" cx="93.892236328125" j="0" val="355" barHeight="244.71037500000003" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1395" d="M 95.392236328125 275.731 L 95.392236328125 12.894249999999968 C 95.392236328125 9.894249999999968 98.392236328125 6.894249999999967 101.392236328125 6.894249999999967 L 101.392236328125 6.894249999999967 C 103.1917236328125 6.894249999999967 104.9912109375 9.894249999999968 104.9912109375 12.894249999999968 L 104.9912109375 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 95.392236328125 275.731 L 95.392236328125 12.894249999999968 C 95.392236328125 9.894249999999968 98.392236328125 6.894249999999967 101.392236328125 6.894249999999967 L 101.392236328125 6.894249999999967 C 103.1917236328125 6.894249999999967 104.9912109375 9.894249999999968 104.9912109375 12.894249999999968 L 104.9912109375 275.731 z " pathFrom="M 95.392236328125 275.731 L 95.392236328125 275.731 L 104.9912109375 275.731 L 104.9912109375 275.731 L 104.9912109375 275.731 L 104.9912109375 275.731 L 104.9912109375 275.731 L 95.392236328125 275.731 z" cy="6.893249999999966" cx="165.886376953125" j="1" val="390" barHeight="268.83675000000005" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1397" d="M 167.386376953125 275.731 L 167.386376953125 74.93349999999998 C 167.386376953125 71.93349999999998 170.386376953125 68.93349999999998 173.386376953125 68.93349999999998 L 173.386376953125 68.93349999999998 C 175.1858642578125 68.93349999999998 176.9853515625 71.93349999999998 176.9853515625 74.93349999999998 L 176.9853515625 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 167.386376953125 275.731 L 167.386376953125 74.93349999999998 C 167.386376953125 71.93349999999998 170.386376953125 68.93349999999998 173.386376953125 68.93349999999998 L 173.386376953125 68.93349999999998 C 175.1858642578125 68.93349999999998 176.9853515625 71.93349999999998 176.9853515625 74.93349999999998 L 176.9853515625 275.731 z " pathFrom="M 167.386376953125 275.731 L 167.386376953125 275.731 L 176.9853515625 275.731 L 176.9853515625 275.731 L 176.9853515625 275.731 L 176.9853515625 275.731 L 176.9853515625 275.731 L 167.386376953125 275.731 z" cy="68.93249999999998" cx="237.880517578125" j="2" val="300" barHeight="206.79750000000004" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1399" d="M 239.380517578125 275.731 L 239.380517578125 40.46724999999997 C 239.380517578125 37.46724999999997 242.380517578125 34.46724999999997 245.380517578125 34.46724999999997 L 245.380517578125 34.46724999999997 C 247.1800048828125 34.46724999999997 248.9794921875 37.46724999999997 248.9794921875 40.46724999999997 L 248.9794921875 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 239.380517578125 275.731 L 239.380517578125 40.46724999999997 C 239.380517578125 37.46724999999997 242.380517578125 34.46724999999997 245.380517578125 34.46724999999997 L 245.380517578125 34.46724999999997 C 247.1800048828125 34.46724999999997 248.9794921875 37.46724999999997 248.9794921875 40.46724999999997 L 248.9794921875 275.731 z " pathFrom="M 239.380517578125 275.731 L 239.380517578125 275.731 L 248.9794921875 275.731 L 248.9794921875 275.731 L 248.9794921875 275.731 L 248.9794921875 275.731 L 248.9794921875 275.731 L 239.380517578125 275.731 z" cy="34.466249999999974" cx="309.874658203125" j="3" val="350" barHeight="241.26375000000004" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1401" d="M 311.374658203125 275.731 L 311.374658203125 12.894249999999968 C 311.374658203125 9.894249999999968 314.374658203125 6.894249999999967 317.374658203125 6.894249999999967 L 317.374658203125 6.894249999999967 C 319.1741455078125 6.894249999999967 320.9736328125 9.894249999999968 320.9736328125 12.894249999999968 L 320.9736328125 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 311.374658203125 275.731 L 311.374658203125 12.894249999999968 C 311.374658203125 9.894249999999968 314.374658203125 6.894249999999967 317.374658203125 6.894249999999967 L 317.374658203125 6.894249999999967 C 319.1741455078125 6.894249999999967 320.9736328125 9.894249999999968 320.9736328125 12.894249999999968 L 320.9736328125 275.731 z " pathFrom="M 311.374658203125 275.731 L 311.374658203125 275.731 L 320.9736328125 275.731 L 320.9736328125 275.731 L 320.9736328125 275.731 L 320.9736328125 275.731 L 320.9736328125 275.731 L 311.374658203125 275.731 z" cy="6.893249999999966" cx="381.868798828125" j="4" val="390" barHeight="268.83675000000005" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1403" d="M 383.368798828125 275.731 L 383.368798828125 157.6525 C 383.368798828125 154.6525 386.368798828125 151.6525 389.368798828125 151.6525 L 389.368798828125 151.6525 C 391.1682861328125 151.6525 392.9677734375 154.6525 392.9677734375 157.6525 L 392.9677734375 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 383.368798828125 275.731 L 383.368798828125 157.6525 C 383.368798828125 154.6525 386.368798828125 151.6525 389.368798828125 151.6525 L 389.368798828125 151.6525 C 391.1682861328125 151.6525 392.9677734375 154.6525 392.9677734375 157.6525 L 392.9677734375 275.731 z " pathFrom="M 383.368798828125 275.731 L 383.368798828125 275.731 L 392.9677734375 275.731 L 392.9677734375 275.731 L 392.9677734375 275.731 L 392.9677734375 275.731 L 392.9677734375 275.731 L 383.368798828125 275.731 z" cy="151.6515" cx="453.862939453125" j="5" val="180" barHeight="124.07850000000002" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1405" d="M 455.362939453125 275.731 L 455.362939453125 37.020624999999995 C 455.362939453125 34.020624999999995 458.362939453125 31.020624999999992 461.362939453125 31.020624999999992 L 461.362939453125 31.020624999999992 C 463.1624267578125 31.020624999999992 464.9619140625 34.020624999999995 464.9619140625 37.020624999999995 L 464.9619140625 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 455.362939453125 275.731 L 455.362939453125 37.020624999999995 C 455.362939453125 34.020624999999995 458.362939453125 31.020624999999992 461.362939453125 31.020624999999992 L 461.362939453125 31.020624999999992 C 463.1624267578125 31.020624999999992 464.9619140625 34.020624999999995 464.9619140625 37.020624999999995 L 464.9619140625 275.731 z " pathFrom="M 455.362939453125 275.731 L 455.362939453125 275.731 L 464.9619140625 275.731 L 464.9619140625 275.731 L 464.9619140625 275.731 L 464.9619140625 275.731 L 464.9619140625 275.731 L 455.362939453125 275.731 z" cy="31.01962499999999" cx="525.857080078125" j="6" val="355" barHeight="244.71037500000003" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1407" d="M 527.357080078125 275.731 L 527.357080078125 12.894249999999968 C 527.357080078125 9.894249999999968 530.357080078125 6.894249999999967 533.357080078125 6.894249999999967 L 533.357080078125 6.894249999999967 C 535.1565673828125 6.894249999999967 536.9560546875 9.894249999999968 536.9560546875 12.894249999999968 L 536.9560546875 275.731 z " fill="rgba(93,135,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 527.357080078125 275.731 L 527.357080078125 12.894249999999968 C 527.357080078125 9.894249999999968 530.357080078125 6.894249999999967 533.357080078125 6.894249999999967 L 533.357080078125 6.894249999999967 C 535.1565673828125 6.894249999999967 536.9560546875 9.894249999999968 536.9560546875 12.894249999999968 L 536.9560546875 275.731 z " pathFrom="M 527.357080078125 275.731 L 527.357080078125 275.731 L 536.9560546875 275.731 L 536.9560546875 275.731 L 536.9560546875 275.731 L 536.9560546875 275.731 L 536.9560546875 275.731 L 527.357080078125 275.731 z" cy="6.893249999999966" cx="597.851220703125" j="7" val="390" barHeight="268.83675000000005" barWidth="12.598974609375"></path>
                                        <g id="SvgjsG1391" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG1392" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1394" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1396" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1398" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1400" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1402" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1404" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1406" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1408" class="apexcharts-series" rel="2" seriesName="Expensexthisxmonthx" data:realIndex="1">
                                        <path id="SvgjsPath1412" d="M 35.9970703125 275.731 L 35.9970703125 88.72 C 35.9970703125 85.72 38.9970703125 82.72 41.9970703125 82.72 L 41.9970703125 82.72 C 43.7965576171875 82.72 45.596044921875 85.72 45.596044921875 88.72 L 45.596044921875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 35.9970703125 275.731 L 35.9970703125 88.72 C 35.9970703125 85.72 38.9970703125 82.72 41.9970703125 82.72 L 41.9970703125 82.72 C 43.7965576171875 82.72 45.596044921875 85.72 45.596044921875 88.72 L 45.596044921875 275.731 z " pathFrom="M 35.9970703125 275.731 L 35.9970703125 275.731 L 45.596044921875 275.731 L 45.596044921875 275.731 L 45.596044921875 275.731 L 45.596044921875 275.731 L 45.596044921875 275.731 L 35.9970703125 275.731 z" cy="82.719" cx="106.4912109375" j="0" val="280" barHeight="193.01100000000002" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1414" d="M 107.9912109375 275.731 L 107.9912109375 109.39975000000001 C 107.9912109375 106.39975000000001 110.9912109375 103.39975000000001 113.9912109375 103.39975000000001 L 113.9912109375 103.39975000000001 C 115.7906982421875 103.39975000000001 117.590185546875 106.39975000000001 117.590185546875 109.39975000000001 L 117.590185546875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 107.9912109375 275.731 L 107.9912109375 109.39975000000001 C 107.9912109375 106.39975000000001 110.9912109375 103.39975000000001 113.9912109375 103.39975000000001 L 113.9912109375 103.39975000000001 C 115.7906982421875 103.39975000000001 117.590185546875 106.39975000000001 117.590185546875 109.39975000000001 L 117.590185546875 275.731 z " pathFrom="M 107.9912109375 275.731 L 107.9912109375 275.731 L 117.590185546875 275.731 L 117.590185546875 275.731 L 117.590185546875 275.731 L 117.590185546875 275.731 L 117.590185546875 275.731 L 107.9912109375 275.731 z" cy="103.39875" cx="178.4853515625" j="1" val="250" barHeight="172.33125" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1416" d="M 179.9853515625 275.731 L 179.9853515625 57.70037499999997 C 179.9853515625 54.70037499999997 182.9853515625 51.70037499999997 185.9853515625 51.70037499999997 L 185.9853515625 51.70037499999997 C 187.7848388671875 51.70037499999997 189.584326171875 54.70037499999997 189.584326171875 57.70037499999997 L 189.584326171875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 179.9853515625 275.731 L 179.9853515625 57.70037499999997 C 179.9853515625 54.70037499999997 182.9853515625 51.70037499999997 185.9853515625 51.70037499999997 L 185.9853515625 51.70037499999997 C 187.7848388671875 51.70037499999997 189.584326171875 54.70037499999997 189.584326171875 57.70037499999997 L 189.584326171875 275.731 z " pathFrom="M 179.9853515625 275.731 L 179.9853515625 275.731 L 189.584326171875 275.731 L 189.584326171875 275.731 L 189.584326171875 275.731 L 189.584326171875 275.731 L 189.584326171875 275.731 L 179.9853515625 275.731 z" cy="51.699374999999975" cx="250.4794921875" j="2" val="325" barHeight="224.03062500000004" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1418" d="M 251.9794921875 275.731 L 251.9794921875 133.526125 C 251.9794921875 130.526125 254.9794921875 127.52612500000001 257.9794921875 127.52612500000001 L 257.9794921875 127.52612500000001 C 259.7789794921875 127.52612500000001 261.578466796875 130.526125 261.578466796875 133.526125 L 261.578466796875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 251.9794921875 275.731 L 251.9794921875 133.526125 C 251.9794921875 130.526125 254.9794921875 127.52612500000001 257.9794921875 127.52612500000001 L 257.9794921875 127.52612500000001 C 259.7789794921875 127.52612500000001 261.578466796875 130.526125 261.578466796875 133.526125 L 261.578466796875 275.731 z " pathFrom="M 251.9794921875 275.731 L 251.9794921875 275.731 L 261.578466796875 275.731 L 261.578466796875 275.731 L 261.578466796875 275.731 L 261.578466796875 275.731 L 261.578466796875 275.731 L 251.9794921875 275.731 z" cy="127.525125" cx="322.4736328125" j="3" val="215" barHeight="148.20487500000002" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1420" d="M 323.9736328125 275.731 L 323.9736328125 109.39975000000001 C 323.9736328125 106.39975000000001 326.9736328125 103.39975000000001 329.9736328125 103.39975000000001 L 329.9736328125 103.39975000000001 C 331.7731201171875 103.39975000000001 333.572607421875 106.39975000000001 333.572607421875 109.39975000000001 L 333.572607421875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 323.9736328125 275.731 L 323.9736328125 109.39975000000001 C 323.9736328125 106.39975000000001 326.9736328125 103.39975000000001 329.9736328125 103.39975000000001 L 329.9736328125 103.39975000000001 C 331.7731201171875 103.39975000000001 333.572607421875 106.39975000000001 333.572607421875 109.39975000000001 L 333.572607421875 275.731 z " pathFrom="M 323.9736328125 275.731 L 323.9736328125 275.731 L 333.572607421875 275.731 L 333.572607421875 275.731 L 333.572607421875 275.731 L 333.572607421875 275.731 L 333.572607421875 275.731 L 323.9736328125 275.731 z" cy="103.39875" cx="394.4677734375" j="4" val="250" barHeight="172.33125" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1422" d="M 395.9677734375 275.731 L 395.9677734375 68.04024999999999 C 395.9677734375 65.04024999999999 398.9677734375 62.04024999999998 401.9677734375 62.04024999999998 L 401.9677734375 62.04024999999998 C 403.7672607421875 62.04024999999998 405.566748046875 65.04024999999999 405.566748046875 68.04024999999999 L 405.566748046875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 395.9677734375 275.731 L 395.9677734375 68.04024999999999 C 395.9677734375 65.04024999999999 398.9677734375 62.04024999999998 401.9677734375 62.04024999999998 L 401.9677734375 62.04024999999998 C 403.7672607421875 62.04024999999998 405.566748046875 65.04024999999999 405.566748046875 68.04024999999999 L 405.566748046875 275.731 z " pathFrom="M 395.9677734375 275.731 L 395.9677734375 275.731 L 405.566748046875 275.731 L 405.566748046875 275.731 L 405.566748046875 275.731 L 405.566748046875 275.731 L 405.566748046875 275.731 L 395.9677734375 275.731 z" cy="62.03924999999998" cx="466.4619140625" j="5" val="310" barHeight="213.69075000000004" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1424" d="M 467.9619140625 275.731 L 467.9619140625 88.72 C 467.9619140625 85.72 470.9619140625 82.72 473.9619140625 82.72 L 473.9619140625 82.72 C 475.7614013671875 82.72 477.560888671875 85.72 477.560888671875 88.72 L 477.560888671875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 467.9619140625 275.731 L 467.9619140625 88.72 C 467.9619140625 85.72 470.9619140625 82.72 473.9619140625 82.72 L 473.9619140625 82.72 C 475.7614013671875 82.72 477.560888671875 85.72 477.560888671875 88.72 L 477.560888671875 275.731 z " pathFrom="M 467.9619140625 275.731 L 467.9619140625 275.731 L 477.560888671875 275.731 L 477.560888671875 275.731 L 477.560888671875 275.731 L 477.560888671875 275.731 L 477.560888671875 275.731 L 467.9619140625 275.731 z" cy="82.719" cx="538.4560546875" j="6" val="280" barHeight="193.01100000000002" barWidth="12.598974609375"></path>
                                        <path id="SvgjsPath1426" d="M 539.9560546875 275.731 L 539.9560546875 109.39975000000001 C 539.9560546875 106.39975000000001 542.9560546875 103.39975000000001 545.9560546875 103.39975000000001 L 545.9560546875 103.39975000000001 C 547.7555419921875 103.39975000000001 549.555029296875 106.39975000000001 549.555029296875 109.39975000000001 L 549.555029296875 275.731 z " fill="rgba(73,190,255,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8gmd3t7qj)" pathTo="M 539.9560546875 275.731 L 539.9560546875 109.39975000000001 C 539.9560546875 106.39975000000001 542.9560546875 103.39975000000001 545.9560546875 103.39975000000001 L 545.9560546875 103.39975000000001 C 547.7555419921875 103.39975000000001 549.555029296875 106.39975000000001 549.555029296875 109.39975000000001 L 549.555029296875 275.731 z " pathFrom="M 539.9560546875 275.731 L 539.9560546875 275.731 L 549.555029296875 275.731 L 549.555029296875 275.731 L 549.555029296875 275.731 L 549.555029296875 275.731 L 549.555029296875 275.731 L 539.9560546875 275.731 z" cy="103.39875" cx="610.4501953125" j="7" val="250" barHeight="172.33125" barWidth="12.598974609375"></path>
                                        <g id="SvgjsG1410" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG1411" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1413" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1415" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1417" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1419" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1421" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1423" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1425" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1390" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1409" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <g id="SvgjsG1430" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine1440" x1="0" y1="0" x2="575.953125" y2="0" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1444" x1="0" y1="275.73" x2="575.953125" y2="275.73" stroke="rgba(0,0,0,0.1)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1473" x1="0" y1="276.73" x2="575.953125" y2="276.73" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                </g>
                                <line id="SvgjsLine1491" x1="0" y1="0" x2="575.953125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1492" x1="0" y1="0" x2="575.953125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1493" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1494" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1495" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1474" class="apexcharts-yaxis" rel="0" transform="translate(20.046875, 0)">
                                <g id="SvgjsG1475" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1477" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1478">400</tspan>
                                        <title>400</title>
                                    </text><text id="SvgjsText1480" font-family="inherit" x="20" y="100.33250000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1481">300</tspan>
                                        <title>300</title>
                                    </text><text id="SvgjsText1483" font-family="inherit" x="20" y="169.26500000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1484">200</tspan>
                                        <title>200</title>
                                    </text><text id="SvgjsText1486" font-family="inherit" x="20" y="238.19750000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1487">100</tspan>
                                        <title>100</title>
                                    </text><text id="SvgjsText1489" font-family="inherit" x="20" y="307.13" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label grey--text lighten-2--text fill-color" style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1490">0</tspan>
                                        <title>0</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG1378" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 172.5px;"></div>
                         
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>

</html>