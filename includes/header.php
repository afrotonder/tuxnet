<header>
    <section id="logo-section">
        <a href="https://www.wired.com/2001/03/the-story-behind-tux-the-penguin/">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/TUX_G2.svg/163px-TUX_G2.svg.png" id="logo" alt="TuxNet Logo"  />
        </a>
        <h2 id="title"> TuxNet </h2>
    </section> 
    <section id="menu-section">
        <ul id="menu">
        <?php
                $menuItems = ['Home', 'About Us', 'Hacking', 'Open Source', 'Free Software', "Liscenses"] ;

                for($item = 0 ; $item < count($menuItems); $item++) {
                    echo "<li>".$menuItems[$item]."</li>" ;
                }
            ?>
        </ul>
    </section>
</header>


    