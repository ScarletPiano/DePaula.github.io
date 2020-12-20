<?php 
    $title = "About";
    $page = "about";
    include 'header.php';
?>

<main>
    <h1 class="banner">About</h1>
    <!-- About -->
    <div class="text">
        <div class="rubric">
            <h2 class="category">This Website</h2>
            <p>This website was created by Andrea C. DePaula, and you can find her Web and Mobile II homepage <a href="../index.html">here</a></p>
            <p>The goal of this website is to demonstrate some of the sightseeing locations one might visit on a trip to Rochester. As the creator grew up there, Rochester is the only place she has ever really known, but even still, she learned quite a bit while writing about it.</p>
            <p>Any images found throughout this site, can be clicked to either enhance it, or to travel to the site it was taken from.</p>
            <p>All php was validated at <a href="https://phpcodechecker.com">https://phpcodechecker.com</a><br/>All css was validated at <a href="https://jigsaw.w3.org/css-validator/">https://jigsaw.w3.org/css-validator/</a><br/>
            All js was validated at <a href="https://codebeautify.org/jsvalidate">https://codebeautify.org/jsvalidate</a> with space warnings ignored<br/>
            All html was validated at <a href="https://validator.w3.org">https://validator.w3.org</a>
            </p>
        </div>
    </div>    
    
    <!-- Grading Rubric -->
    <div class="text">
        <div class="rubric">
            <h2 class="category">Rubric</h2>
            <p class="title">Original JavaScript Component:</p>
            <ul>
                <li>javascript date and time was removed, updating copyright at the bottom of each page was kept.</li>
                <li>javascript is used to check form validation.</li>
            </ul>
            <hr>
            <p class="title">DHTML component:</p>
            <ul>
                <li> The updating copyright is "onload".</li>
            </ul>
            <hr>
            <p class="title">Extras:</p>
            <ul>
                <li>The tab title changes with each active page (php edits)</li>
                <li>On smaller screens, images move to the center of the page.</li>
                <li>Grid was used to organize the comment section</li>
                <li>On email submissions, php echos back if the email was valid or not.</li>
                <li>A favicon of Rochester's logo was added as the icon for the website's tab.</li>
                <li>Nav was changed to highlight where the user is. If the user is in a dropdown section, that section turns darker grey; if the user is in a non-dropdown section, that section turns yello.</li>
            </ul>
            <hr>
            <p class="title">Good Design Techniques Used:</p>
            <ul>
                <li>"Call to action" was removed from page titles.</li>
                <li>The header was changed to an darker color.</li>
                <li>The color scheme was chosen to match Rochester's official colors.</li>
                <li>Transparent/gradient background was used over an outline of Rochester buildings.</li>
                <li>Each page has the same format with the exception of the About Page, and the References Page, as they have no pictures to align.</li>
            </ul>
            <p class="title">Organization Used:</p>
            <ul>
                <li>Each section has information broken up by relavance.</li>
                <li>Helvetica was used as the title, and sans-serif for the text in order to maximize readability.</li>
                <li>Each area that has a website has the website linked with the first mention of it's name.</li>
            </ul>
            <p class="title">Content:</p>
            <ul>
                <li>Rochester's official website was used to gather most of the information. Information that was not retrieved from there, often came from first hand experience, or sites dedicated to those locations.</li>
                <li>Each page has at least one paragraph about the location and interesting points, with a google map photo that links to itself on a mouse click.</li>
            </ul>
            <p class="title">Navigation:</p>
            <ul>
                <li>Each page has a header declaring where the user is currently situated.</li>
                <li>All pages are given a "Back To Top" button.</li>
            </ul>
            <p class="title">Use of HTML5 and CSS3:</p>
            <ul>
                <li>"word-break" was used so as to keep text within each div section</li>
                <li>CS was used to float images to the right or left of text.</li>
                <li>CS was used for a majority of the navigation, and all of the color and text changes.</li>
                <li>Images are made to open a new page with the image file on click, unless they are a map, in which case it will open google maps.</li>
            </ul>
        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>