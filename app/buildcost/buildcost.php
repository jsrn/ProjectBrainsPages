<blockquote>
	A number of people have been angling for the ability to build structures in game. To get an estimated resource cost for your desired structure, use this form.
</blockquote>

<ul id="partslist" class="noliststyle">
	<li>
		Wood:
	</li>
	<li>
		<label for="wood-floor">Wooden Floor:</label>
		<input data-material="wood" data-cost="25" id="wood-floor" placeholder="0">
	</li>
	<li>
		<label for="wood-wall">Wooden Wall:</label>
		<input data-material="wood" data-cost="100" id="wood-wall" placeholder="0">
	</li>
	<li>
		<label for="wood-fence">Wooden Fence:</label>
		<input data-material="wood" data-cost="40" id="wood-fence" placeholder="0">
	</li>
	<li>
		Stone:
	</li>
	<li>
		<label for="stone-floor">Stone Floor:</label>
		<input data-material="stone" data-cost="25" id="stone-floor" placeholder="0">
	</li>
	<li>
		<label for="stone-wall">Stone Wall:</label>
		<input data-material="stone" data-cost="100" id="stone-wall" placeholder="0">
	</li>
	<li>
		<label for="stone-fence">Stone Fence:</label>
		<input data-material="stone" data-cost="40" id="stone-fence" placeholder="0">
	</li>
	<li>
		Cost Breakdown:
	</li>
	<li>
		<label>Wood Cost:</label> <span id="wood-cost">0</span>
	</li>
	<li>
		<label>Stone Cost:</label> <span id="stone-cost">0</span>
	</li>
</ul>

<script src="js/buildcost.js"></script>

<style>
	#partslist label
	{
		width: 140px;
		text-align: right;
		display: inline-block;
	}
</style>