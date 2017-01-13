<!DOCTYPE html>

<?= $this->element("imports"); ?>
<?= $this->Html->css('matanatr.css') ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <?= $this->Html->charset() ?>
        <?= $this->element('imports') ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <?= $this->element('colorbar'); ?>
                <?= $this->element('namelessNavigation'); ?>

                <div class="container" style="margin-top: -70px">
                    <div align="center" class="" style="margin-top: 25px;">
                        <p class="size1 grey"><a href="index.ctp">Anush Mattapalli</a></p>
                        <p class="size3 lightGrey"><i>Georgia Institute of Technology <span style="color: #1E90FF">|</span>
                                Class of 2018</i></p>
                    </div>
                    <div align="center">
                        <hr id="hr1" noshade="true" color="#DDDDDD">
                    </div>
                    <p id="about" style="width:80%;" class="push-2 marbot"><b>About me:</b> I am a rising junior at georgia
                        tech looking to export my potential into a formidable company!</p>
                    <div class="push-2">
                        <p id="facts" class="marbot"><b>Two Truths and a Lie:</b></p>
                        <p class="marbot martop5">1. I am a black belt in tae-kwon-do</p>
                        <p class="marbot martop5">2. I have been to 33 Different states in the country </p>
                        <p class="marbot martop5">3. I can speak 3.5 languages.</p>
                    </div>
                    <div align="center">
                        <hr id="hr1" noshade="true" color="#DDDDDD">
                    </div>
                </div>

                <div class="container top25" style="background-color: #00BFFF">
                    <div align="center">
                        <p class="marbot size2 grey -1">Education</p>
                        <p class="top5 marbot size4 lightGrey">Georgia Institute of Technology</p>
                        <p class="marbot"><i>Bachelor's Degree, Major: Computer Science, Minor: Applied Mathematics</i></p>
                        <p class="marbot"><b>Core GPA:</b> 3.69<b> Minor GPA:</b> 3.56</p>
                    </div>
                </div>

                <!-- Coursework Div -->
                <div class="container" id="courseWork" style="background-color: #9acfea">
                    <div align="center" style="padding-left: 10%">
                        <div style="float:left">
                            <p class="marbot"><b>Major Coursework</b></p>
                            <ul class="listStyle top3" style="margin-bottom:10px;">
                                <li>CS 1301 - Intro to Python</li>
                                <li>CS 1331 - Intro to Java</li>
                                <li>CS 1332 - Discrete Structures and Algorithms</li>
                            </ul>
                        </div>

                        <div>
                            <p class="marbot"><b>Minor Coursework</b></p>
                            <ul class="listStyle top3" style="margin-bottom:10px;">
                                <li>Math 1502 - Calc 2</li>
                                <li>Math 3215 - Combinatorix</li>
                                <li>Math 2605 - Linear Algebra 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </body>
</html>