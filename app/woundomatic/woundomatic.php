<div id="header">
	Injury generator for Project Brains. Pick the settings, and roll!
</div>

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

<script src="js/woundomatic.js"></script>