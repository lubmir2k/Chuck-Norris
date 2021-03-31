<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home of Chuck Norris<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="container">

	<?php foreach($jokes as $joke): ?>
	
	<div class="row border m-bottom">
	
		<div class="col"><span class="uppercase bold">Chuck Norris Joke</span></div>

		<?php if ($joke['categories']): ?>
		
			<?php foreach($joke['categories'] as $category): ?>
			
			<div class="col">Category: <?= $category ?></div>
			
			<?php endforeach; ?>
			
		<?php else: ?>
		
		<div class="col">Category: general joke</div>
		
		<?php endif; ?>
		
		<div class="col border center padded" onclick="toggleJoke(this)">Open for more</div>

		<div class="row" style="display:none;"><div class="col"><?= $joke['joke'] ?></div></div>
		
	</div>
		
	<?php endforeach; ?>

</div>

<?= $this->endSection() ?>