<?php
    $title = 'Advanced Rocketry';
    
    $mainContent = '<h2>Advanced Rocketry Documentation</h2>
<br />
<p>&nbsp;&nbsp;&nbsp; Welcome to the documentation page for Advanced
Rocketry!&nbsp; The mod is still in alpha and should be entering beta
soon.</p>
<p>Advanced Rocketry is a Minecraft mod designed to add random or
player specified planets to the game.&nbsp; These planets each have
unique properties such as Atmosphere Density, Distance from the sun,
Atmosphere composition, Average Temperature, and size.&nbsp; Players
can build rockets out of blocks to travel to these other worlds.<br />
</p>
<hr>
<h2>What\'s New?</h2>
<h3>0.8.3</h3>
<ul>
<li>Added config option for blacklisting biomes to prevent them from spawning on planets</li>
<li>Added config option to prevent any vanilla biomes from spawning on planets</li>
<li>Added config option to register high pressure biomes</li>
<li>Added config option to register biomes that span entire worlds</li>
<li>[MC 1.7.10] Powersuits now also protect from the vacuum of space</li>
<li>Upon Death player should spawn in overworld, preventing infinite death loops</li>
<li>[MC 1.7.10] Fixed bug causing the first space station to be built being assigned an invalid number</li>
<li>Fix warp controller causing crash if placed in world</li>
<li>[MC 1.10.2] Fixed glow affect for space suit HUD not working</li>
</ul>
<h3>0.8.2</h3>
<ul>
<li>Added Decorative light</li>
<li>Fixed rare bug where client would crash when going between worlds</li>
<li>Optimized Rocket renders with GLLists</li>
<li>Data pipes can now pull data from Satellite Terminal with requiring the connect button to be pressed, now allows fully automated Data harvesting</li>
<li>Added more stars</li>
<li>Fixed Sun being out in the rain</li>
<li>[MC 1.10.2] Added <a href="blocks/SolarGenerator.php">Solar Generators</a></li>
<li>[MC 1.10.2] Added <a href="blocks/Cables.php">Energy cables</a> and implementing Forges Energy system to replace the... lack of energy systems in 1.10</li>
<li>[MC 1.10.2] Added Coal generators (takes anything that\'ll burn in a furnace</li>
</ul>
<h3>0.8.1</h3>
<ul>
<li>Backward Compatibility: Create Gas Giants in worlds made in previous versions of AR</li>
<li>Fix Dilithium not generating on galacticraft\'s moon</li>
<li>Fix crash caused by unregistering gas giant dimensions</li>
<li>Reduced the amount of smoke in large rockets</li>
<li>Added config to increase output of MicrowaveRecievers</li>
<li>Fixed crash involving blocks that do not properly return an itemstack in the rocket GUI</li>
</ul>
<h3>0.8.0</h3>
<ul>
<li>Added Gas Giants and Gas Giant Mining</li>
<li>Added <a href="blocks/UnmannedVehicleAssembler.php">Unmanned Vehicle Assembler</a></li>
<li>Added <a href="blocks/Terraformer.php">Terraformer</a></li>
<li>Added <a href="items/modularSpaceSuit.php#foggles">Anti-Fog visor</a></li>
<li>Added Titanium Aluminide</li>
<li>Added recipe for bonemeal in the chemical reactor</li>
<li>Added Nitrogen</li>
<li>Added Buckets for Oxygen, Nitrogen, and Hydrogen</li>
<li>Added <a href="items/modularSpaceSuit.php#atmAnalyser">Atmosphere Analyser</a></li>
<li>Added sounds</li>
<li>Mobs now take damage from the vacuum</li>
<li>Added Biome Changer Satellite and <a href="items/biomeChanger.php">Biome Changer Satellite Remote</a></li>
<li>Increased planet variety</li>
<li>Infrastructure can now be linked to Docking Pads which will in turn link to any rocket that lands on the Docking Pad</li>
<li>New algorithm for warp fuel calculations</li>
<li>Redid Fog effect for planets (again)</li>
<li><a href="blocks/Hatches.php">Rocket fluid loader and fluid unloader</a></li>
<li>Rockets can now be automated to fly between destinations using <a href="blocks/DockingPad.php">Docking Pads</a></li>
<li><a href="blocks/DockingPad.php">Docking Pads</a> now accept <a href="items/linker.php">linkers</a> as an item</li>
<li><a href="items/holoProjector.php">Holo-Projector</a> now will align the hologram to a machine when used to rightclick a machine control block
<li>Fixed warp effect not working in multiplayer sometimes</li>
<li>Fixed solar satellites not being created properly</li>
<li>Fixed graphics on pipes/Microwave Reciever not being shaded</li>
<li>Fixed the delete satellite button not updating the itemstack on the server</li>
<li>Fixed laser drill missing texture</li>
<li>Now Requires LibVulpes 0.1.2</li>
</ul>
<h3>0.7.0</h3>
<ul>
<li>Implemented <a href="items/modularSpaceSuit.php">Modular space suits</a></li>
<li>Added Jetpack</li>
<li>Added Bionic Legs</li>
<li>Moved multiblock blocks/items to a new item group in creative</li>
<li>Added Aluminum</li>
<li>Added <a href="items/pressureTank.php">pressure tanks</a></li>
<li>Oxygen Charger renamed to <a href="blocks/gasCharger.php">Gas Charger</a></li>
<li>Gas Charger now can fill hydrogen tanks in spacesuits</li>
<li><font color="#990000">Massive Refactor of code!  May require liquid/data/satellites hatches to be replaced!</font></li>
</ul>
<h3>0.6.8</h3>
<ul>
<li>Fixed Rockets being stuck in the air on space stations</li>
<li>Fixed O2 detectors having the wrong name</li>
<li>Fixed low gravity being missing in space</li>
<li>Added <a href="./blocks/LaserDrill.php">Laser Drill</a></li>
<li>Added <a href="./blocks/MicrowaveReciever.php">Microwave Reciever</a></li>
<li>Overhauled textures for planets as viewed from space stations</li>
<li>Fixed warp not working half the time in single player</li>
<li>Fixed planet information not being displayed in the planet selector interface</li>
<li>Actual documentation for some of the mod on this site</li>
</ul>';
    
    $infoBarContent = '';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
