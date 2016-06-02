<?php
include 'plantillas/cabecera.php';
?>

<h1>echo vs print_r vs var_dump</h1>

<div class="row">
    <div class="col-md-3">echo $var;</div>
    <div class="col-md-3">print_r($var);</div>
    <div class="col-md-3">var_dump($var);</div>
    <div class="col-md-3">var_export($var);</div>
</div>

<?php $var = "texto";?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = 0;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = "0";?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = false;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = true;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = 1;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = "1";?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = null;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = array('elemento1','',1234);?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = 12.34;?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = "12.34";?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = "";?>
<div class="row">
    <div class="col-md-3"><pre><?php echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php $var = new DateTime();?>
<div class="row">
    <div class="col-md-3"><pre><?php //echo $var;?></pre></div>
    <div class="col-md-3"><pre><?php print_r($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_dump($var);?></pre></div>
    <div class="col-md-3"><pre><?php var_export($var);?></pre></div>
</div>

<?php
include 'plantillas/pie.php';
?>