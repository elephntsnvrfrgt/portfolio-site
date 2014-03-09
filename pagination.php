<?php

$currentPath = explode('?', $_SERVER['REQUEST_URI']); //make sure we don't count any GET variables!

$currentPath = $currentPath[0]; //grab just the path

$projectlist = array(
        "/cmhf",
        "/membersavings",
        "/bryant",
        "/bloodwater",
        "/ds-mobile",
        "/ds-infogrfx",
        "/smoky",
        "/baptist",
        "/type",
        "/ciot",
        "/cosd",
        "/stjoe",
        "/dash",
        "/plumbline",
        "/omg",
        "/amy",
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
			
		<a class="pointer home" href="index">
			<span class="icon-layout"></span>
		</a>

		<?php echo $nextlink ?>
	
	</div>
</nav>