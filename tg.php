<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
if ( !file_exists('include/config.php') ) { die("ERROR: File include/config.php not found...exiting"); }
else { include_once 'include/config.php'; }
include_once 'include/infosvx.php';
include_once 'include/tgdb.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="all" />
    <meta name="keywords" content="Dashboard SVXReflector, SvxLink, Svx Link Reflector, Svx, svx link, svx,  SvxLink par CN8VX, Dashboard SVXReflector by CN8VX " />
    <meta name="title" content="Dashboard SVXReflector by CN8VX" />
    <meta name="description" content="Dashboard SVXReflector by CN8VX for Moroccan Amteur Radio Repeaters Interco by CN8VX." />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/scrstyle.js"></script>
    <link rel="shortcut icon" href="<?php echo $favicon_path; ?>">
    <link id="stylefile" rel="stylesheet" href="css/style_normal.css">
    <?php echo "<title>$page_title</title>"; ?>
</head>

<body>
    <div id="bannere">
        <table>
            <tbody>
                <tr>
                    <td class="entt"><a href="https://www.dmr-maroc.com/repeaters_simplex_svxlink.php" target="_blank"><img class="icm" src="<?php echo LOGO_PATH; ?>" alt="Logo"></a></td>
                    <td class="entt"><span class="logo-title">Talk Groups</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Les boutons -->
    <div id="container">
    <a href="index.php"><button class="btntogl">Home</button></a>
    </div>
    &nbsp;
    <?php
        echo '<center><div>'."\n";
        include "include/tabletg.php";
        echo '</div></center>'."\n";
        echo "<br />\n";
    ?>

</body>

<!-- Début du Footer -->
<?php
    include('include/footer.php');
?> 
<!-- Fin du Footer -->

</html>
