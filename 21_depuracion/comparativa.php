<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<?php $var = "texto";?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = 0;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = "0";?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = false;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = true;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = 1;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = "1";?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = null;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = array('elemento1','',1234);?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = 12.34;?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = "12.34";?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = "";?>
<div class="row">
    <div class="col-md-4"><pre><?php echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php $var = new DateTime();?>
<div class="row">
    <div class="col-md-4"><pre><?php //echo $var;?></pre></div>
    <div class="col-md-4"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-4"><pre><?php var_dump($var);?></pre></div>
</div>

<?php
include 'plantillas/pie.php';
?>