<!DOCTYPE html >
<html>
<head>
  <title><?php if(x($page,'title')) echo $page['title'] ?></title>
<script>var baseurl="<?php echo $a->get_baseurl() ?>";</script>
<?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>
</head>
<body>
<?php if(x($page,'nav')) echo $page['nav']; ?>
<aside id="region_1"><?php if(x($page,'aside')) echo $page['aside']; ?></aside>
<section id="region_2"><?php if(x($page,'content')) echo $page['content']; ?>
<div id="page-footer"></div>
<div id="pause"></div>
</section>
<aside id="region_3"><?php if(x($page,'right_aside')) echo $page['right_aside']; ?></aside>
<footer><?php if(x($page,'footer')) echo $page['footer']; ?></footer>
</body>
</html>
