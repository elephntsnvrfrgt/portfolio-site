<?php

$currentPath = explode('?', $_SERVER['REQUEST_URI']); //make sure we don't count any GET variables!

$currentPath = $currentPath[0]; //grab just the path

//remove /portfolio-site from each item in array before deploying.

$projectlist = array(
        "/vw-carnet.php",
        "/cmhf.php",
        "/membersavings.php",
        "/bryant.php",
        "/bloodwater.php",
        "/ds-mobile.php",
        "/ds-infogrfx.php",
        "/smoky.php",
        "/baptist.php",
        "/type.php",
        "/ciot.php",
        "/cosd.php",
        "/stjoe.php",
        "/dash.php",
        "/plumbline.php",
        "/omg.php",
        "/amy.php",
);


$currentPageIndex = array_search($currentPath, $projectlist );


if($currentPageIndex == 0) { //if it's on the first page, we want them to go to the last page
    $prevlink = '<a id="prev" class="pointer prev" href="'.$projectlist[ sizeof($projectlist)-1].'"><h6>Prev Project</h6><span class="icon-arrow-left"></span></a>';
} else { //otherwise just go to the n-1th page
    $prevlink = '<a id="prev" class="pointer prev" href="'.$projectlist[$currentPageIndex-1].'"><h6>Prev Project</h6><span class="icon-arrow-left"></span></a>';
}


if($currentPageIndex  == sizeof($projectlist)-1 ) {     //if we're on the last page, have them go to the first page for "next"
    $nextlink = '<a id="next" class="pointer next" href="'.$projectlist[0].'"><h6>Next Project</h6><span class="icon-arrow-right"></span></a>';
} else {
    $nextlink = '<a id="next" class="pointer next" href="'.$projectlist[$currentPageIndex+1].'"><h6>Next Project</h6><span class="icon-arrow-right"></span></a>';
}

?>

<nav class="pagination">
	<div class="pagination-content">

		<?php echo $prevlink; ?>

		<a class="pointer home" href="index.php">
			<span class="icon-layout"></span>
		</a>

		<?php echo $nextlink ?>

	</div>
</nav>
