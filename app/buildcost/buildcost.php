<blockquote>
	A number of people have been angling for the ability to build structures in game. To get an estimated resource cost for your desired structure, use this form.
</blockquote>

<ul id="partslist" class="noliststyle">
	<li>
		<select class="materials-select"></select>
		<input type="text">
	</li>
</ul>

<div id="options">
	<div class="options-col">
		<label for="fists">Fists:</label>
		<input id="fists" value="0"><br>

		<label for="stabbing">Stabbing:</label>
		<input id="stabbing" value="0"><br>
	</div>
	<div class="options-col">
		<label for="crushing">Crushing:</label>
		<input id="crushing" value="0"><br>

		<label for="slashing">Slashing:</label>
		<input id="slashing" value="0"><br>
	</div>
</div>

<input type="submit" id="roll-button" onclick="roll()">

<div id="results"></div>

<script src="js/buildcost.js"></script>