<?php
require_once('../conexao/banco.php');
require_once("../seguranca.php");

$sql = "select tb_vendas.*,tb_clientes.CLI_NOME
from tb_vendas
inner join tb_clientes on (tb_vendas.CLI_CODIGO=tb_clientes.CLI_CODIGO)";
$sql2 = "select CLI_CODIGO,CLI_NOME from tb_clientes";
$sql3 = "select * from tb_tipopagto";
$sql = mysqli_query ($con, $sql) or die ("Erro na sql!");
$sql2 = mysqli_query ($con, $sql2) or die ("Erro na sql!");
$sql3 = mysqli_query ($con, $sql3) or die ("Erro na sql!");

?>
<!DOCTYPE html>
<html>

<head>

<link rel="apple-touch-icon" sizes="57x57" href="../icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icon/favicon-16x16.png">
<link rel="manifest" href="../icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MARK1 | ROC</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet"> 

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <h2 style="color: #e6e6e6; text-decoration:bold; text-align:center;">
                            MARK1
                        </h2>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $_SESSION["login"]?></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        MK1
                    </div>
                </li>
                <li class="active">
                    <a href="../dashboard/dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Painel de Controle</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Cadastros</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="../clientes/cadastro_clientes.php">Clientes</a></li>	
                        <li><a href="../produtos/cadastro_produtos.php">Produtos</a></li>
                        <li><a href="../procompras/cadastro_procompras.php">Produtos para compra</a></li>
                        <li><a href="../fornecedor/cadastro_fornecedor.php">Fornecedor</a></li>
                        <li><a href="../tipopagto/cadastro_tipopagto.php">Tipo de Pagamento</a></li>
                        <li><a href="../login/cadastro_login.php">Login</a></li>
                        <li><a href="../pratos/cadastro_pratos.php">Pratos</a></li>
                    </ul>
                </li>
                <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Consultas </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="../clientes/consulta_cliente.php">Clientes <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../clientes/consulta_cliente.php">Por Nome</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../produtos/consulta_produtos.php">Produtos <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../produtos/consulta_produtos.php">Por Descrição</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../procompras/consulta_procompras.php">Produtos para compra <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../procompras/consulta_procompras.php">Por Descrição</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../fornecedor/consulta_fornecedor.php">Fornecedor <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../fornecedor/consulta_fornecedor.php">Por Nome</a>
                                </li>           
                            </ul>
                        </li>
                        <li>
                            <a href="../tipopagto/consulta_tipopagto.php">Tipo de Pagamento <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../tipopagto/consulta_tipopagto.php">Por Descrição</a>
                                </li>                            
                            </ul>
                        </li>
                        <li>
                            <a href="../login/consulta_login.php">Login <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../login/consulta_login.php">Por Nome</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../pratos/consulta_pratos.php">Pratos <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../pratos/consulta_pratos.php">Por Descrição</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Vendas </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="../vendas/prevenda.php">Vender</a>
                        </li>
                        <li>
                            <a href="#">Consultar <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../vendas/consulta.php">Por Data</a>
                                </li>
                                <li>
                                    <a href="../vendas/consulta2.php">Por Cliente</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Compras</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="../compras/precompra.php">Comprar</a>
                        </li>
                        <li>
                            <a href="#">Consultar <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../compras/consulta.php">Por Data</a>
                                </li>
                                <li>
                                    <a href="../compras/consulta2.php">Por Fornecedor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Cardápio</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="../cardapio/precardapio.php">Cadastrar</a>
                        </li>
                        <li>
                            <a href="../cardapio/consulta.php">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../pdf/manual.pdf"><i class="fa fa-file-text"></i> <span class="nav-label">Manual</span></a>
                </li>
                <li class="active">
                    <a href="../db_bkp/backup.php"><i class="fa fa-database"></i> <span class="nav-label">Backup</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Sistema</span>
                </li>


                <li>
                    <a href="../logout.php">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
                
            </ul>

        </nav>
        </div>
        <!--Main Content -->
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Venda</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../dashboard/dashboard.php">Ínicio</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Vendas</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
             
          <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
                <div class="col-sm-12">

                    <!--Cadastrar venda-->
                    <form method="post" style="height:100%;" action="../vendas/salvar_cad_venda.php">
                     
            <div class="form-group  row" style="margin-top:2%;"><label class="col-sm-2 col-form-label">Cliente</label>
            	<div class="col-sm-10"><select class="form-control m-b" name="sel_cliente">
                                <?php while($dados=mysqli_fetch_array($sql2)){?>
                                        <option value="<?php echo $dados['CLI_CODIGO'];?>" ><?php echo $dados['CLI_NOME'];?></option>
                                <?php } ?>
                                    </select></div>
            </div>
            <div class="form-group  row" style="margin-top:2%;"><label class="col-sm-2 col-form-label">Tipo de Pagamento</label>
            	<div class="col-sm-10"><select class="form-control m-b" name="sel_tipopagto">
                                <?php while($dados=mysqli_fetch_array($sql3)){?>
                                        <option value="<?php echo $dados['TPG_CODIGO'];?>" ><?php echo $dados['TPG_DESCRICAO'];?></option>
                                <?php } ?>
                                    </select></div>
            </div>
            <div class="form-group  row" style="margin-top:2%;"><label class="col-sm-2 col-form-label">Observação</label>
            	<div class="col-sm-10"><input type="text" class="form-control" name="txt_obs"></div>
            </div>
            <div class="hr-line-dashed"></div>

                                    <div class="col-sm-offset-2" style="float:right;">
                                        
                                        <button class="btn btn-primary btn-sm" type="submit">Criar venda</button><br><br>
                                 
                                </div>
                            </form>

             
                    
                    </div>
                </div>
            </div>
   
           


                </div>
                </div>
        <div class="footer" style="position: inherit;">
            <div class="float-right">
                contato@<strong>rocmarcas</strong>.com
            </div>
            <div>
                <strong>Copyright</strong> ROC Inteligência de Marcas &copy; 2019
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="../js/plugins/flot/jquery.flot.js"></script>
    <script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="../js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="../js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="../js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../js/demo/sparkline-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>
</html>
