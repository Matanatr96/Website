<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <?= $this->element('imports') ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>

    <body >

        <div class="container" style="margin-top: 25%">
            <hr class="hr" noshade="true" color="#73C2FB"/>
            <div class="container centered-text">
                <p class="size2">Hi! My name is <span style="color: #009000">Anush Mattapalli</span> <br/>
                    I'm a (Person who messes with a lot of different things)<br/>
                    I help (something or someone)<br/><br/>
                    When im not
                    <span style = "color: #702963">c</span>
                    <span style = "color: #0047ab">o</span>
                    <span style = "color: #009000">d</span>
                    <span style = "color: #ffcc33">i</span>
                    <span style = "color: #ff8c00">n</span>
                    <span style = "color: #c80815">g</span>

                    , you can find me tearing it up on the <span style="color: #ffcc33">tennis court</span> or <span style="color: #000000">
				    soccer field</span>


                    <br/><br/>
                </p>

                <p class="size1 ">Want to work together? I'd love to hear from you</p>

                <div class = "container listStyle size1">
                    <p><a class = "link" href="https://www.google.com/ ">Email</a>&nbsp &nbsp &nbsp
                        <a class = "link" href="https://www.facebook.com/anush.mattapalli?ref=bookmarks">Facebook</a></p>
                </div>
            </div>

            <hr class="hr" noshade="true" color="#73C2FB"/>
            <div class="container" id = "moreContainer">
                <p><a class="link accent" href="matanatr/aboutme">Learn More</a></p>
            </div>
        </div>
    </body>
</html>