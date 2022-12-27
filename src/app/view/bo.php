<?php 
use src\app\user\AppUser;
use src\Core\Utils\Debug;
use src\Core\Config\Config;

$action = $entities['action'];
$entity = isset($entities['entity']) ? $entities['entity'] : '';

?>
<div class="container px-4 py-5" id="featured-2">
<!-- <h2 class="pb-2 border-bottom"></h2> -->
<div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
<?php

if($action === 'add'){

?>
<!-- <div id="addsection"> -->

<div class="col">
  <button type="button" class="collapsible" id="boAddSkillButton">Add skill</button>
  <div class="content">
    <form class="postform" action="index.php?page=addskill" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="logo">Logo</label>
      <input type="text" class="form-control" name="logo" id="logo" placeholder="logo">
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="col">
  <button type="button" class="collapsible" id="boAddItemButton">Add Item to Skill</button>
  <div class="content">
    <form class="postform" action="index.php?page=additem" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="description">
    </div>
    <div class="form-group">
      <label for="further">Further</label>
      <input type="text" class="form-control" name="further" id="further" placeholder="further">
    </div>
    <div class="form-group">
      <label for="skill_id">Skill_id</label>
      <input type="text" class="form-control" name="skill_id" id="skill_id" placeholder="skill_id" pattern="[0-9]{1,3}">
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="col">
  <button type="button" class="collapsible" id="boAddUrlToItemButton">Add Url to Skill (TODO : Redesign. Currently Urls->Items)</button>
  <div class="content">
    <form class="postform" action="index.php?page=addurltoitem" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="url">Url</label>
      <input type="text" class="form-control" name="url" id="url" placeholder="url">
    </div>
    <div class="form-group">
      <label for="skill_id">Skill_id</label>
      <input type="text" class="form-control" name="skill_id" id="skill_id" placeholder="skill_id" pattern="[0-9]{1,3}">
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="col">
  <button type="button" class="collapsible" id="boAddUrlToItemButton">Add Demo to Item</button>
  <div class="content">
    <form class="postform" action="index.php?page=adddemotoitem" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="description">
    </div>
    <div class="form-group">
      <label for="item_id">Item_id</label>
      <input type="text" class="form-control" name="item_id" id="item_id" placeholder="item_id" pattern="[0-9]{1,3}">
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="col">
  <button type="button" class="collapsible" id="boAddUrlToItemButton">Add Note</button>
  <div class="content">
    <form class="postform" action="index.php?page=addnote" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="description">
    </div>
    <div class="form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php 
}else{

if($action === 'update' && $entity === 'skill'){
	?>
<br> <!-- ============================================================================ -->
<div id="addsection">
<button type="button" class="collapsible">Add a skill</button>
<div class="content">
  <form class="postform" action="index.php?page=bo&action=boaddskill" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="logo">Logo:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="further">Further:</label>
    <input type="text">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
</div>
<br> <!-- ============================================================================ -->
<?php
}
if($action === 'update' && $entity === 'item'){
	$item = $entities['item'];
?>
<br> <!-- ============================================================================ -->
<button type="button" class="collapsible">Edit Item</button>
<div class="content">
<form class="postform" action="index.php?page=updateitem" method="post">
  <input type=hidden name="id" value="<?php echo $item->id; ?>">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $item->name; ?>" pattern="[À-žA-Za-z0-9.,!\s]{3,50}" title="Only alphanumeric values, at least 3 characters">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" name="description" value="<?php echo $item->description; ?>" pattern="[À-žA-Za-z0-9.,!\s]{3,2000}" title="Only alphanumeric values, at least 5 characters">
  </div>
  <div class="form-group">
    <label for="further">Further:</label>
    <input type="text" name="further" value="<?php echo $item->further; ?>" pattern="[A-Za-z0-9.:/?&]{0,50}">
  </div>
    <div class="form-group">
    <label for="skill_id">Skill_id:</label>
    <input type="text" name="skill_id" value="<?php echo $item->skill_id; ?>" pattern="[0-9]{1,3}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
</div>
<br> <!-- ============================================================================ -->
<?php
}
if($action === 'update' && $entity === 'url'){
?>
<br> <!-- ============================================================================ -->
<button type="button" class="collapsible">Add an Url</button>
<div class="content">
<form class="postform" action="index.php?page=bo&action=boaddurl" method="post">
  <div class="form-group">
    <strong>Add an Url</strong>
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="url">Url:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="entity">Entity:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="skill_id">Skill_id:</label>
    <input type="text">
  </div>
    <div class="form-group">
    <label for="item_id">Item_id:</label>
    <input type="text">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br> <!-- ============================================================================ -->
<?php
}
if($action === 'update' && $entity === 'demo'){
?>
<br> <!-- ============================================================================ -->
<button type="button" class="collapsible">Add a Demo</button>
<div class="content">
<form class="postform" action="index.php?page=bo&action=boadddemo" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text">
  </div>
  <div class="form-group">
    <label for="skill_id">Skill_id:</label>
    <input type="text">
  </div>
    <div class="form-group">
    <label for="item_id">Item_id:</label>
    <input type="text">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
</div>
</div>
<br> <!-- ============================================================================ -->
<?php
}
}
?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</div>
</div>