<?PHP
include("db_con.php");
$table 	= "posts";
$sql	= "SELECT * FROM $table";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Sima Blog</title>


</head>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Sima<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.php">+ Tambah Post</a></li>
    </ul>
</nav>

		<div id='home'>
			<div class='posts'>
				<nav class='art-list'>
					<ul class='art-list-body'>
<?PHP			while($row = mysql_fetch_array($result)){
echo				"<li class='art-list-item'>";
echo					"<div class='art-list-item-title-and-time'>";
echo						"<h2 class='art-list-title'>";
echo							"<a href=\"post.php?id=$row[id_post]\">";
echo								$row['judul_post'];
echo							"</a>";
echo						"</h2>";
echo						"<div class='art-list-time'>";
echo							$row['tanggal_post'];
echo						"</div>";
echo					"</div>";
echo					"<p>";
echo					$row['konten_post'];
echo					"</p>";
echo					"<p>";
echo					  "<a href=\"new_post.php?id=$row[id_post]\">Edit</a> | <a href=\"delete_post.php?id=$row[id_post]\"onClick=\"return window.confirm('Apakah anda yakin ingin menghapus post ini?')\">Hapus</a>";
echo					"</p>";
echo				"</li>";
				}
?>
					</ul>
				</nav>
			</div>
		</div>

<footer class="footer">
    <div class="back-to-top"><a href="">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        Andrey Simaputera
        
    </aside>
</footer>

</div>

<script type="text/javascript" src="assets/js/fittext.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript">
  var ga_ua = '{{! TODO: ADD GOOGLE ANALYTICS UA HERE }}';

  (function(g,h,o,s,t,z){g.GoogleAnalyticsObject=s;g[s]||(g[s]=
      function(){(g[s].q=g[s].q||[]).push(arguments)});g[s].s=+new Date;
      t=h.createElement(o);z=h.getElementsByTagName(o)[0];
      t.src='//www.google-analytics.com/analytics.js';
      z.parentNode.insertBefore(t,z)}(window,document,'script','ga'));
      ga('create',ga_ua);ga('send','pageview');
</script>

</body>
</html>
